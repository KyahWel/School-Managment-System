<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('eventsModel');
	}

	public function admin()
	{
        $this->load->view('Admin_Panel/admin');
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
