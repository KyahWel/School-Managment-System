<?php
defined('BASEPATH') || exit('No direct script access allowed');

class FacultyControllerFunctions extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->model('teacherModel');
	}

	public function addFaculty() {
		if (isset($_POST['firstname']) && isset($_POST['lastname']))
		{
			$this->teacherModel->insertData();
			redirect('Admin/faculty');
		}
	}

	public function viewFaculty() {
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$output = '
				<div class="row">
					<div class="col-lg-3 col-md-6 mb-1"> <!--Last Name-->
						<input type="text" class="form-control" readonly value = "'.$records->lastname.'">
						<label class="form-label pt-2">Last Name</label>
					</div>
					<div class="col-lg-3 col-md-6 mb-1"> <!--First Name-->
						<input type="text" class="form-control" readonly value="'.$records->firstname.'">
						<label class="form-label pt-2">First Name</label>
					</div>
					<div class="col-lg-3 col-md-6 mb-1"> <!--Middle Name-->
						<input type="text" class="form-control" readonly value="'.$records->middlename.'">
						<label class="form-label pt-2">Middle Name</label>
					</div>
					<div class="col-lg-3 col-md-6 mb-1"> <!--Suffix-->
						<input type="text" class="form-control" readonly value="'.$records->extname.'">
						<label class="form-label pt-2">Suffix</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-1"> <!--Phone Number-->
						<input type="text" class="form-control" readonly value="'.$records->phonenum.'">
						<label class="form-label pt-2">Phone Number</label>
					</div>
					<div class="col-lg-6 col-md-6 mb-1"> <!--Email-->
						<input type="text" class="form-control" readonly value="'.$records->email.'">
						<label class="form-label pt-2">Email</label>
					</div>
				</div>
				';
		echo $output;
	}

	public function editFaculty() {
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$output = '
			<form method="POST" action="../FacultyController/updateTeacher/'.$records->teacherID.'" id="editProfessorForm">
				<div class="row mb-3">
					<div class="col"> <!--Year Level-->
						<label class="form-label">Year Level</label>
						<input type="text" class="form-control" name="yearlevel">
					</div>
					<div class="col-6"> <!--Username-->
						<label class="form-label">Username</label>
						<input type="text" class="form-control" name="username" value="'.$records->username.'">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-6"> <!--College-->
						<label class="form-label">College</label>
						<input type="text" class="form-control" name="college" value="'.$records->college.'">
					</div>
					<div class="col-6"> <!--Department-->
						<label class="form-label">Department</label>
						<input type="text" class="form-control" name="department" value = "'.$records->department.'">
					</div>
				</div>
				<div class="editProfessorButton d-flex justify-content-end"> <!--Buttons-->
					<button class="btn btn-default" id="save" type="submit" value="save">Save</button>
					<button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
				</div>
			</form>';
		echo $output;
	}

	public function updateTeacher($id) {
		$data['row'] = $this->teacherModel->updateData($id);
		redirect('Faculty/profile');
	}

	public function deactivate($id) {
		$data['row'] = $this->teacherModel->deactivateData($id);
		redirect('Admin/faculty');
	}

	public function activate($id) {
		$data['row'] = $this->teacherModel->reactivateData($id);
		redirect('Admin/faculty');
	}

	public function changePass($id) {
		$this->teacherModel->changePassword($id);
	}
}