<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('studentModel');
	}

	public function addAdmin()
	{
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
			$this->AdminModel->insertData();
		}
	}
	public function viewAdmin()
	{
		$adminData = $this->input->post('adminData');
        $records = $this->AdminModel->getData($adminData);
		$output ='
			<div class="row mb-3">
				<div class="col-6">
					<label>ID: </label>
					<label>'.$records->adminID.'</label>
				</div>
				<div class="col-12">
					<label>Admin Number: </label>
					<label>'.$records->adminNumber.'</label>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label>Username: </label>
					<label>'.$records->username.'</label>
				</div>
				<div class="col-12">
					<label>Password(hashed): </label>
					<label>'.$records->password.'</label>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label>Firstname: </label>
					<label>'.$records->firstname.'</label>
				</div>
				<div class="col-12">
					<label>Lastname: </label>
					<label>'.$records->lastname.'</label>
				</div>
			</div>
		';
		echo $output;
	}
	public function editAdmin()
	{	
		$adminData = $this->input->post('id');
        $records = $this->AdminModel->getData($adminData); 
		$output = '<form method="POST" action="../admin_main/updateAdmin/'.$records->adminID.'" id="editAdminForm">
			<div class="row mb-3">
				<div class="col-6">
					<label class="form-label">Firstname:</label>
					<input type="text" class="form-control" name="firstname" value="'.$records->firstname.'">
				</div>
				<div class="col-6">
					<label class="form-label">Lastname:</label>
					<input type="text" class="form-control" name ="lastname" value="'.$records->lastname.'">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label class="form-label">Username:</label>
					<input type="text" class="form-control" name="username" value="'.$records->username.'">
				</div>
			</div>
			<div class="editAdminButton d-flex justify-content-end">
				<button class="btn btn-default" id="save" type="submit" value="save">Save Changes</button>
				<button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button><br>
			</div>                    
		</form>';
		echo $output;
	}

	public function viewApplicant(){
		$applicantData = $this->input->post('id');
        $records = $this->AdminModel->getData($applicantData); 
	}

	public function addApplicants(){
		$applicantID = $this->input->post('applicantID');
		$lastname = $this->input->post('lastname');
		for($i=0;$i<sizeof($applicantID);$i++){
			$this->studentModel->insertData($applicantID[$i],$lastname[$i]);
		}
		redirect("Admin/dashboard");
	}

	public function updateAdmin($id)
	{	
		$data['row'] = $this->AdminModel->updateData($id);
		redirect("Admin/admin");
	}

	public function deactivate($id)
	{	
		$data['row'] = $this->AdminModel->deactivateData($id);
		redirect("Admin/admin");
	}

	public function activate($id)
	{	
		$data['row'] = $this->AdminModel->reactivateData($id);
		redirect("Admin/admin");
	}

	public function changePass($id)
	{	
		$this->AdminModel->changePassword($id);
	}
}
