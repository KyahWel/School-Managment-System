<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantController extends CI_Controller {


	public function personal_info()
	{
		$this->load->view('applicants/personalInfo');
	}
	public function educational_attainment()
	{
		$this->load->view('applicants/educationalattainment');
	}
	public function requirements()
	{
		$this->load->view('applicants/requirements');
	}
}
