<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacultyController extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('#');		
	// }

	public function dashboard()
	{
		$this->load->view('Faculty_Panel/dashboard');
	}

	public function myProfile()
	{
        $this->load->view('Faculty_Panel/myProfile');
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
