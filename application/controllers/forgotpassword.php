<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotpassword extends CI_Controller {

	public function __construct() {
        parent:: __construct();
		$this->load->model('forgotpass');	
		$this->load->model('sendEmail');
    }

	public function adminForgot(){
		$username = $this->input->post('username');
		echo $this->forgotpass->verifyAdminUsername($username);
	}

	public function studentForgot(){
		$username = $this->input->post('username');
		echo $this->forgotpass->verifyStudentUsername($username);
	}

	public function facultyForgot(){
		$username = $this->input->post('username');
		echo $this->forgotpass->verifyFacultyUsername($username);
	}

	public function sendEmailStudent(){
		$key = $this->input->post('key');
		$email = $this->input->post('data');
		$this->sendEmail->sendkey($key,$email);
	}

	public function sendEmailAdmin(){
		$key = $this->input->post('key');
		$email = $this->input->post('data');
		$this->sendEmail->sendkey($key,$email);
	}

	public function sendEmailFaculty(){
		$key = $this->input->post('key');
		$email = $this->input->post('data');
		$this->sendEmail->sendkey($key,$email);
	}

	public function changepassAdmin() {	
		$username= $this->input->post('username');
		$newpass = $this->input->post('newpass');
		$this->forgotpass->changePassAdmin($username,$newpass);
	}

	public function changepassStudent() {	
		$username= $this->input->post('username');
		$newpass = $this->input->post('newpass');
		$this->forgotpass->changePassStudent($username,$newpass);
	}

	public function changepassFaculty() {	
		$username= $this->input->post('username');
		$newpass = $this->input->post('newpass');
		$this->forgotpass->changePassFaculty($username,$newpass);
	}
}
