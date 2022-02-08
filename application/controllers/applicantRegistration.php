<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantRegistration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');
		$this->load->model('pdfGeneratorModel');
		$this->load->model('courseModel');
		if ($this->session->userdata('authenticated') != '5'){
			 
			if ($this->session->userdata('authenticated') == '1'){
				$this->session->set_flashdata('logout','Please logout first');
				redirect('Admin/dashboard');	
			}
				
			elseif  ($this->session->userdata('authenticated') == '2'){
				$this->session->set_flashdata('logout','Please logout first');
				redirect('Faculty/dashboard');
			}
				
			elseif  ($this->session->userdata('authenticated') == '3'){
				$this->session->set_flashdata('logout','Please logout first');
				redirect('Student/Dashboard');
			}
				
			elseif  ($this->session->userdata('authenticated') == '4'){
				$this->session->set_flashdata('logout','Please logout first');
				redirect('Applicant/'.$this->session->userdata('auth_user')['applicantID']);
			}
				
			else{
				$this->session->set_flashdata('invalid','Please verify your profile first');
				redirect('Login/Applicant');
			}
				
		}
	}

	public function index()
	{	
	
		$firstname=$this->input->get('firstname');
		$lastname=$this->input->get('lastname');
		$middlename=$this->input->get('middlename');
		$extname=$this->input->get('extname');
		$data['course'] = $this->courseModel->viewData();
		$data['personalInfo'] = array($firstname,$lastname,$middlename,$extname);
		$this->load->view('applicant/applicant_registration',$data);
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['medical_record']) && isset($_FILES['form_137']) && isset($_FILES['good_moral'])){
			$firstname = $_POST['firstname'];
			$lastname  = $_POST['lastname'];
			$this->applicantModel->insertData();
			redirect('applicantRegistration/final_step?firstname='.$firstname.'&lastname='.$lastname);
		}
	}

	public function final_step(){
		$firstname=$this->input->get('firstname');
		$lastname=$this->input->get('lastname');
		$data['student'] = $this->applicantModel->viewAppliedData($firstname,$lastname);
		$this->load->view('applicant/applicantFinalStep',$data);
		$this->session->set_flashdata('successApplicant','Applied Successfully!'); 
		$this->session->unset_userdata('authenticated');
	}

	public function downloadTestPermit($id)
	{
		$this->pdfGeneratorModel->generateTestPermit($id);
	}

	
}