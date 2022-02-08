<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantVerification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');

	}

	public function index()
	{	
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$middlename = $this->input->post('middlename');
			$extname = $this->input->post('extname');
			echo $this->applicantModel->verify($_POST['fname'],$_POST['lname'],$_POST['middlename'],$_POST['extname']);
			if($this->applicantModel->verify($_POST['fname'],$_POST['lname'],$_POST['middlename'],$_POST['extname']) == 1){
				$this->session->set_userdata('authenticated', "5");
			}
	}
}