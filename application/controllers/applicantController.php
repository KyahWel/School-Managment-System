<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicantController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('applicantModel');
		$this->load->model('courseModel');
		$this->load->model('Authentication');
		if ($this->session->userdata('authenticated') != '4'){
			$this->session->set_flashdata('status','Please logout first'); 
			if ($this->session->userdata('authenticated') == '1')
				redirect('Admin/dashboard');
			elseif  ($this->session->userdata('authenticated') == '2')
				redirect('Faculty/Dashboard');
			else
				redirect('Student/Dashboard');
		}
	}

	public function viewAllApplicant(){
		$data['applicant'] = $this->applicantModel->viewData();
		$this->load->view('/applicant/applicants',$data);
	}

	public function viewApplicant($id)
	{
		$data['applicant'] = $this->applicantModel->getData($id);
		$this->load->view('/applicant/applicantDataRead',$data);
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
