<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('#');		
	// }

	public function dashboard()
	{
		$this->load->view('Student_Panel/dashboard');
	}

	public function myprofile()
	{
        $this->load->view('Student_Panel/myProfile');
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
