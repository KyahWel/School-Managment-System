<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('eventsModel');
		$this->load->model('teacherModel');
		$this->load->model('courseModel');
		$this->load->model('subjectModel');
		$this->load->model('studentModel');
		$this->load->model('examModel');
		$this->load->model('applicantModel');
	}

	public function login(){
		$data = $this->AdminModel->login();
			if($data != NULL){ 
				if($data->status == 1){
					$auth_userdetails = [
						'adminID' => $data->adminID,
						'firstname' =>  $data->firstname,
						'lastname' =>  $data->lastname,
						'adminNumber' =>  $data->adminNumber
					];
					$this->session->set_userdata('auth_admin',$auth_userdetails);
					redirect('Admin/dashboard');
				}
				else{
					$this->session->set_flashdata('status','Invalid Email or Password'); //Palitan ng error message, deactivated yung account
 					redirect('Homepage#');
				}
			}
			else{
				$this->session->set_flashdata('status','Invalid Email or Password'); //Palitan ng error message, invalid email or password
				redirect('Homepage#');
			}
		
	}

	public function admin()
	{
        $data['result'] = $this->AdminModel->viewData();
        $this->load->view('Admin_Panel/admin',$data);
	}

	public function admission()
	{
		$data['exam'] = $this->examModel->viewData();
		$data['applicant'] = $this->applicantModel->viewData();
        $this->load->view('Admin_Panel/admission',$data);
	}

	public function announcement()
	{	
		$data['result'] = $this->eventsModel->getAllData();
        $this->load->view('Admin_Panel/announcement',$data);
	}

	public function class()
	{
        $this->load->view('Admin_Panel/class');
	}

	public function course()
	{
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('Admin_Panel/course',$data);
	}

	public function dashboard()
	{	
		$data['announcement'] = $this->eventsModel->getAllData();
		$data['teacher'] = $this->teacherModel->viewData();
		$data['student'] = $this->studentModel->viewData();
		$this->load->view('Admin_Panel/dashboard',$data);
	}
	
	public function faculty()
	{
		$data['teacher'] = $this->teacherModel->viewData();
        $this->load->view('Admin_Panel/faculty', $data);
	}

	public function section()
	{
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('Admin_Panel/section',$data);
	}

	public function subject()
	{	
		$data['subject'] = $this->subjectModel->viewData();
		$data['course'] = $this->courseModel->viewData();
        $this->load->view('Admin_Panel/subjects',$data);
	}

	public function students()
	{
		$data['student'] = $this->studentModel->viewData();
        $this->load->view('Admin_Panel/students',$data);
	}

	public function changePassword()
	{
        $this->load->view('Admin_Panel/changePassword');
	}
}
