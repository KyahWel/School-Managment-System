<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function registration_final_step()
	{
		$this->load->view('applicant/applicantFinalStep');
	}
	

}
