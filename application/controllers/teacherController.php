<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('teacherModel');
	}
	public function index()
	{	
		$data['teacher'] = $this->teacherModel->viewData();
		$this->load->view('teacher_mainView', $data);
	}

	public function addTeacher()
	{
		$this->load->view('/teacherCRUD/addTeacher');

		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
			$this->teacherModel->insertData();
			redirect('teacherController');
		}
	}
	public function viewTeacher($id)
	{
		$data['row'] = $this->teacherModel->getData($id);
		$this->load->view('/teacherCRUD/viewTeacher',$data);
	}
	public function editTeacher($id)
	{
		$data['row'] = $this->teacherModel->getData($id);
		$this->load->view('/teacherCRUD/editTeacher',$data);
	}

	public function updateTeacher($id)
	{	
		$data['row'] = $this->teacherModel->updateData($id);
		redirect('teachercontroller');
	}

	public function deactivateData($id)
	{	
		$data['row'] = $this->teacherModel->deactivateData($id);
		redirect('teachercontroller');
	}

	public function reactivateData($id)
	{	
		$data['row'] = $this->teacherModel->reactivateData($id);
		redirect('teachercontroller');
	}

	

}
