<?php
defined('BASEPATH') || exit('No direct script access allowed');

class FacultyController extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('teacherModel');
		$this->load->model('eventsModel');
		$this->load->model('Authentication');
		if ($this->session->userdata('authenticated') != '2')
		{
			
			if ($this->session->userdata('authenticated') == '1') {
				$this->session->set_flashdata('logout', 'Please logout first');
				redirect('Admin/dashboard');
			}
			elseif ($this->session->userdata('authenticated') == '3') {
				$this->session->set_flashdata('logout', 'Please logout first');
				redirect('Student/dashboard');
			}
			elseif ($this->session->userdata('authenticated') == '4') {
				$this->session->set_flashdata('logout', 'Please logout first');
				redirect('Applicant/'.$this->session->userdata('auth_user')['applicantID']);
			}
			else{
				$this->session->set_flashdata('invalid', 'Error: Invalid Action');
				redirect('Login/Applicant');
			}
		}
	}

	public function dashboard() {
		$data['announcement'] = $this->eventsModel->getAllData();
		$data['schedMonday'] = $this->teacherModel->getScheduleMonday($this->session->userdata('auth_user')['teacherID']);
		$data['schedTuesday'] = $this->teacherModel->getScheduleTuesday($this->session->userdata('auth_user')['teacherID']);
		$data['schedWednesday'] = $this->teacherModel->getScheduleWednesday($this->session->userdata('auth_user')['teacherID']);
		$data['schedThursday'] = $this->teacherModel->getScheduleThursday($this->session->userdata('auth_user')['teacherID']);
		$data['schedFriday'] = $this->teacherModel->getScheduleFriday($this->session->userdata('auth_user')['teacherID']);
		$data['schedSaturday'] = $this->teacherModel->getScheduleSaturday($this->session->userdata('auth_user')['teacherID']);
		$data['schedSunday'] = $this->teacherModel->getScheduleSunday($this->session->userdata('auth_user')['teacherID']);
		
		$this->load->view('Faculty_Panel/dashboard',$data);
	}

	public function myProfile() {
		$data['prof'] = $this->teacherModel->getData($this->session->userdata('auth_user')['teacherID']);
        $this->load->view('Faculty_Panel/myProfile', $data);
	}
	
	public function myStudents()
	{	
		$data['subjects'] = $this->teacherModel->getSubjects($this->session->userdata('auth_user')['teacherID']);
        $this->load->view('Faculty_Panel/myStudents',$data);
	}

	public function changePassword() {
        $this->load->view('Faculty_Panel/changePassword');
	}
}