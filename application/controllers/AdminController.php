<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('eventsModel');
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
					redirect('adminController/dashboard');
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
        $this->load->view('Admin_Panel/admission');
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
        $this->load->view('Admin_Panel/course');
	}

	public function dashboard()
	{
		$this->load->view('Admin_Panel/dashboard');
	}
	
	public function faculty()
	{
        $this->load->view('Admin_Panel/faculty');
	}

	public function section()
	{
        $this->load->view('Admin_Panel/section');
	}

	public function students()
	{
        $this->load->view('Admin_Panel/students');
	}

	public function changePassword()
	{
        $this->load->view('Admin_Panel/changePassword');
	}
}
