<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantRegistration extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');
		$this->load->model('courseModel');
	}

	public function index()
	{	
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('applicant/applicant_registration',$data);
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['medical_record']) && isset($_FILES['form_137']) && isset($_FILES['good_moral'])){
			$this->applicantModel->insertData();
			redirect('applicantRegistration/final_step');
		}
	}

	public function final_step(){
		$this->load->view('applicant/applicantFinalStep');
		$this->session->set_flashdata('success','Applied Successfully!'); 
	}

}