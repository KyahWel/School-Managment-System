<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');
		$this->load->model('courseModel');
		
		$this->load->helper(array('form', 'url','file'));
	}
	public function index()
	{
		$this->load->view('applicant_login');
		if(isset($_POST['applicantnumber'])){
			if($this->applicantModel->insertData()==0){
				echo('fail');
			}
		}
		
	}
	public function addApplicant()
	{	
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('applicant_form',$data);
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['medical_record']) && isset($_FILES['form_137']) && isset($_FILES['good_moral'])){
			$this->applicantModel->insertData();
			redirect('Welcome');
		}
		
	}
	public function viewAllApplicant(){
		$data['applicant'] = $this->applicantModel->viewData();
		$this->load->view('/applicant/applicants',$data);
	}

	public function viewApplicant($id)
	{
		$data['applicant'] = $this->applicantModel->getData($id);
		$this->load->view('/applicant/applicant_data',$data);
	}


	public function updateStatus($id)
	{	
		$data['applicant'] = $this->applicantModel->updateData($id);
		redirect('applicantcontroller/viewallapplicant');
	}

	public function applicantInfo($id)
	{
		$data['applicant'] = $this->applicantModel->getData($id);
		$this->load->view('/applicant/applicant_data',$data);
	}
}
