<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacultyController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('teacherModel');
		$this->load->model('eventsModel');
		$this->load->model('Authentication');
		if ($this->session->userdata('authenticated') != '2'){
			$this->session->set_flashdata('logout','Please logout first'); 
			if ($this->session->userdata('authenticated') == '1') {
				redirect('Admin/dashboard');
			}
			elseif ($this->session->userdata('authenticated') == '3'){
				redirect('Student/dashboard');
			}
			else {
				redirect('Applicant/'.$this->session->userdata('auth_user')['applicantID']);
			}
		}
	}

	public function dashboard()
	{
		$data['announcement'] = $this->eventsModel->getAllData();
		$this->load->view('Faculty_Panel/dashboard',$data);
	}

	public function myProfile()
	{
		$data['prof'] = $this->teacherModel->getData($this->session->userdata('auth_user')['teacherID']);
        $this->load->view('Faculty_Panel/myProfile',$data);
	}

	
	public function myStudents()
	{
        $this->load->view('Faculty_Panel/myStudents');
	}


	public function changePassword()
	{
        $this->load->view('Faculty_Panel/changePassword');
	}
}
