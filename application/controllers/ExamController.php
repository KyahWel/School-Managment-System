<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('examModel');
	}
	public function index()
	{	
		$data['exam'] = $this->examModel->viewData();
		$this->load->view('exammainView', $data);
	}

	public function addExam()
	{
		$this->load->view('/examCRUD/addexam');

		if(isset($_POST['date']) && isset($_POST['time'])){
			$this->examModel->insertData();
			redirect('examController');
		}
	}
	public function viewExam($id)
	{
		$data['row'] = $this->examModel->getData($id);
		$this->load->view('/examCRUD/viewexam',$data);
	}
	public function editExam($id)
	{
		$data['row'] = $this->examModel->getData($id);
		$this->load->view('/examCRUD/editexam',$data);
	}

	public function updateExam($id)
	{	
		$data['row'] = $this->examModel->updateData($id);
		redirect('examcontroller');
	}

	public function deactivateData($id)
	{	
		$data['row'] = $this->examModel->deactivateData($id);
		redirect('examcontroller');
	}

	public function reactivateData($id)
	{	
		$data['row'] = $this->examModel->reactivateData($id);
		redirect('examcontroller');
	}
}
