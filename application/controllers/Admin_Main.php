<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
	}
	public function index()
	{	
		$data['result'] = $this->AdminModel->viewData();
		$this->load->view('admin_mainView', $data);
	}

	public function addAdmin()
	{
		$this->load->view('/adminCRUD/addAdmin');

		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
			$this->AdminModel->insertData();
			redirect('admin_main');
		}
	}
	public function viewAdmin($id)
	{
		$data['row'] = $this->AdminModel->getData($id);
		$this->load->view('/adminCRUD/viewAdmin',$data);
	}
	public function editAdmin($id)
	{
		$data['row'] = $this->AdminModel->getData($id);
		$this->load->view('/adminCRUD/editAdmin',$data);
	}

	public function updateAdmin($id)
	{	
		$data['row'] = $this->AdminModel->updateData($id);
		redirect('admin_main');
	}

	public function deactivateData($id)
	{	
		$data['row'] = $this->AdminModel->deactivateData($id);
		redirect('admin_main');
	}

	public function reactivateData($id)
	{	
		$data['row'] = $this->AdminModel->reactivateData($id);
		redirect('admin_main');
	}


}
