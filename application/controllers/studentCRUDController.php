<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentCRUDController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('studentModel');
	}

	public function addStudent()
	{
		$this->load->view('/studentCRUD/addStudent');

		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['applicantID']) && isset($_POST['courseID'])&& isset($_POST['type'])&& isset($_POST['creatorID'])){
			$this->studentModel->insertData();
			redirect('Admin/students');
		}
	}
	public function viewStudent($id)
	{
		$data['row'] = $this->studentModel->getData($id);
		$this->load->view('/studentCRUD/viewStudent',$data);
	}
	public function editStudent($id)
	{
		$data['row'] = $this->studentModel->getData($id);
		$this->load->view('/studentCRUD/editStudent',$data);
	}

	public function updateStudent($id)
	{	
		$data['row'] = $this->studentModel->updateData($id);
		redirect('Admin/students');
	}

	public function deactivate($id)
	{	
		$data['row'] = $this->studentModel->deactivateData($id);
		redirect('Admin/students');
	}

	public function activate($id)
	{	
		$data['row'] = $this->studentModel->reactivateData($id);
		redirect('Admin/students');
	}

	

}
