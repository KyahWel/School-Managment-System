<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantRegistration extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');
		$this->load->model('pdfGeneratorModel');
		$this->load->model('courseModel');
	}

	public function index()
	{	
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('applicant/applicant_registration',$data);
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['medical_record']) && isset($_FILES['form_137']) && isset($_FILES['good_moral'])){
			$this->session->set_flashdata('fname', $_POST['firstname']);
			$this->session->set_flashdata('lname', $_POST['lastname']);
			$this->applicantModel->insertData();
			redirect('applicantRegistration/final_step');
		}
	}

	public function final_step(){
		$data['student'] = $this->applicantModel->viewAppliedData($this->session->flashdata('fname'),$this->session->flashdata('lname'));
		$this->load->view('applicant/applicantFinalStep',$data);
		$this->session->set_flashdata('successApplicant','Applied Successfully!'); 
	}

	public function downloadTestPermit($id)
	{
		$this->pdfGeneratorModel->generateTestPermit($id);
	}

	public function verification(){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$middlename = $this->input->post('middlename');
		$extname = $this->input->post('extname');
		echo $this->applicantModel->verify($fname,$lname,$middlename,$extname);
	}
}