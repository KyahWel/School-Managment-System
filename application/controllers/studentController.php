<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('studentModel');
		$this->load->model('eventsModel');
		$this->load->model('Authentication');
		if ($this->session->userdata('authenticated') != '3'){
			$this->session->set_flashdata('logout','Please logout first'); 
			if ($this->session->userdata('authenticated') == '1') {
				redirect('Admin/dashboard');
			}	
			elseif ($this->session->userdata('authenticated') == '2') {
				redirect('Faculty/dashboard');
			}
			else {	
				redirect('Applicant/'.$this->session->userdata('auth_user')['applicantID']);
			}
		}
	}

	public function dashboard()
	{	
		$data['announcement'] = $this->eventsModel->getAllData();
		$data['schedMonday'] = $this->studentModel->getScheduleMonday($this->session->userdata('auth_user')['studentID']);
		$data['schedTuesday'] = $this->studentModel->getScheduleTuesday($this->session->userdata('auth_user')['studentID']);
		$data['schedWednesday'] = $this->studentModel->getScheduleWednesday($this->session->userdata('auth_user')['studentID']);
		$data['schedThursday'] = $this->studentModel->getScheduleThursday($this->session->userdata('auth_user')['studentID']);
		$data['schedFriday'] = $this->studentModel->getScheduleFriday($this->session->userdata('auth_user')['studentID']);
		$data['schedSaturday'] = $this->studentModel->getScheduleSaturday($this->session->userdata('auth_user')['studentID']);
		$data['schedSunday'] = $this->studentModel->getScheduleSunday($this->session->userdata('auth_user')['studentID']);
		$this->load->view('Student_Panel/dashboard',$data);
	}

	public function myprofile()
	{
		$data['student'] =  $this->studentModel->getData($this->session->userdata('auth_user')['studentID']);
        $this->load->view('Student_Panel/myProfile',$data);
	}

	public function enrollment()
	{
        $this->load->view('Student_Panel/enrollment');
	}

	public function grades()
	{
        $this->load->view('Student_Panel/grades');
	}

	public function dropSubject()
	{
        $this->load->view('Student_Panel/dropSubject');
	}

	public function changePassword()
	{
        $this->load->view('Student_Panel/changePassword');
	}
}
