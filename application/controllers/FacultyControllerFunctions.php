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
		<form class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6"> <!--Last Name-->
					<input type="text" class="form-control" readonly value = "'.$records->lastname.'">
					<label class="form-label pt-2">Last Name</label>
				</div>
				<div class="col-lg-3 col-md-6"> <!--First Name-->
					<input type="text" class="form-control" readonly value="'.$records->firstname.'">
					<label class="form-label pt-2">First Name</label>
				</div>
				<div class="col-lg-3 col-md-6"> <!--Middle Name-->
					<input type="text" class="form-control" readonly value="'.$records->middlename.'">
					<label class="form-label pt-2">Middle Name</label>
				</div>
				<div class="col-lg-3 col-md-6"> <!--Suffix-->
					<input type="text" class="form-control" readonly value="'.$records->extname.'">
					<label class="form-label pt-2">Suffix</label>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6"> <!--Phone Number-->
					<input type="text" class="form-control" readonly value="'.$records->phonenum.'">
					<label class="form-label pt-2">Phone Number</label>
				</div>
				<div class="col-lg-6 col-md-6"> <!--Email-->
					<input type="text" class="form-control" readonly value="'.$records->email.'">
					<label class="form-label pt-2">Email</label>
				</div>
			</div>
		</form>';
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

	public function viewStudents() {
		$sectionID = $this->input->post('sectionID');
		$classCode = $this->input->post('classCode');
		$subjectID = $this->input->post('subjectID');
        $records = $this->teacherModel->getStudents($sectionID);
		$data = $this->teacherModel->getSectionData($subjectID,$classCode);
		$output='
		<div class="table-responsive">
			<table id="sectionInformation">
				<tr>
					<td>
						<p><b>Course:</b></p>
						<p><b>Subject Code:</b></p>
						<p><b>Subject Title:</b></p>
						<p class="mb-0"><b>Schedule:</b></p>
					</td>
					<td class="text-uppercase">
						<p>'.$data->degree.' in '.$data->major.'</p>
						<p>'.$data->subjectCode.'</p>
						<p>'.$data->name.'</p>
						<p class="mb-0">'.$data->day.', '.date('h:i:s a', strtotime($data->start_time)).'-'.date('h:i:s a', strtotime($data->end_time)).'</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- Search -->
		<div class="col-12 align-self-center mb-3" id="searchPanel">
			<input type="text" name="search" placeholder="Search Student ID">
			<button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
		</div>

		<div class="table-wrapper">
			
			<!--Table Header-->
			<div class="table-title">
				<div class="row">
					<div class="col">
						<h2>BSCS-1A</h2>
					</div>
				</div>
			</div>

			<!-- Table Content -->
			<div class="table-responsive">  
				<table class="table table-body align-middle table-striped table-borderless table-hover">
					<thead>
					<tr>
							<th>Student ID</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Grade</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>  ';
			foreach ($records as $records){ 
				$output .= '
						
						<tr>
							<td>'.$records->studentNumber.'</td> 
							<td>'.$records->lastname.'</td>
							<td>'.$records->firstname.'</td>
							<td> </td>
							<td>
								<button type="button" id="input" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#inputGrade"><i class="fas fa-plus"></i> Input Grade</button>
								<button type="button" id="edit" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#editGrade"><i class="fas fa-pen"></i> Edit Grade</button>
							</td>
						</tr> ';
			}
		$output .= '	
					</tbody>
				</table>
			</div>
		</div>
		';
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