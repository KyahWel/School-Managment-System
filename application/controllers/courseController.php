<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class courseController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('courseModel');
	}
	public function index()
	{	
		$data['course'] = $this->courseModel->viewData();
		$this->load->view('course_mainView', $data);
	}

	public function addCourse()
	{
		$this->load->view('/courseCRUD/addcourse');

		if(isset($_POST['degree']) && isset($_POST['major']) && isset($_POST['college'])){
			$this->courseModel->insertData();
			redirect('courseController');
		}
	}
	public function viewCourse($id)
	{
		$data['row'] = $this->courseModel->getData($id);
		$this->load->view('/courseCRUD/viewcourse',$data);
	}

	public function editCourse($id)
	{
		$data['row'] = $this->courseModel->getData($id);
		$this->load->view('/courseCRUD/editcourse',$data);
	}

	public function updateCourse($id)
	{	
		$data['row'] = $this->courseModel->updateData($id);
		redirect('coursecontroller');
	}

	public function deactivateData($id)
	{	
		$data['row'] = $this->courseModel->deactivateData($id);
		redirect('coursecontroller');
	}

	public function reactivateData($id)
	{	
		$data['row'] = $this->courseModel->reactivateData($id);
		redirect('coursecontroller');
	}

	

}
