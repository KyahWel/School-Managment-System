<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('studentModel');
	}
	public function index()
	{	
		$data['student'] = $this->studentModel->viewData();
		$this->load->view('student_mainView', $data);
	}

	public function addStudent()
	{
		$this->load->view('/studentCRUD/addStudent');

		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['applicantID']) && isset($_POST['courseID'])&& isset($_POST['type'])&& isset($_POST['creatorID'])){
			$this->studentModel->insertData();
			redirect('studentController');
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
		redirect('studentcontroller');
	}

	public function deactivateData($id)
	{	
		$data['row'] = $this->studentModel->deactivateData($id);
		redirect('studentcontroller');
	}

	public function reactivateData($id)
	{	
		$data['row'] = $this->studentModel->reactivateData($id);
		redirect('studentcontroller');
	}

	

}
