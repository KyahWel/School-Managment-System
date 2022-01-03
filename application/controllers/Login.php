<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('#');		
	// }

	public function home()
	{
		$this->load->view('Login/home');
	}

	public function student()
	{
        $this->load->view('Login/student');
	}

	public function faculty()
	{
        $this->load->view('Login/faculty');
	}

	public function admin()
	{
        $this->load->view('Login/admin');
	}

}
