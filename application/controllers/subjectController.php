<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjectController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('subjectModel');
		$this->load->model('classModel');
	}


	public function addsubject()
	{
		if(isset($_POST['courseID']) && isset($_POST['subjectCode']) && isset($_POST['college']) && isset($_POST['yearlevel']) && isset($_POST['name']) && isset($_POST['units'])){
			$this->subjectModel->insertData();
			$this->session->set_flashdata('successSubject','Successfully added subject');
			redirect('Admin/subject');
		}
	}

	public function viewsubject()
	{
		$subjectData = $this->input->post('id');
        $records = $this->subjectModel->getData($subjectData);
		$output='<div class="row mb-3">
			<div class="col-6">
				<label class="form-label">subject ID:</label>
				<label>'.$records->subjectID.'</label>
			</div>
			<div class="col-6"> 
				<label class="form-label">Degree:</label>
				<label>'.$records->degree.'</label>
			</div>
			</div> 
			<div class="row mb-3">
				<div class="col-6">
					<label class="form-label">Major:</label>
					<label>'.$records->major.'</label>
				</div>
				<div class="col-6">
					<label class="form-label">College:</label>
					<label>'.$records->college.'</label>
				</div>
			</div>    
			<div class="editsubjectButton d-flex justify-content-end">
				<button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Exit</button>
			</div>';
		echo $output;
	}

	public function editsubject(){
		$subjectData = $this->input->post('id');
        $records = $this->subjectModel->getData($subjectData);
		$output = '<div id="edit_course">
		<form method="POST" action="../subjectController/updatesubject/'.$records->subjectID.'"">
			<div class="row">
				<div class="row mb-3 py-1">
					<div class="col-lg-2 col-md-2 col-sm-12 pt-2">
						<label class="form-label">Select Course: </label>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 ">
						<input type="text" name="courseID" class="form-control" value="'.$records->degree.' in '.$records->major.'" readonly>
					</div>
				</div>
				<div class="row mb-3 py-1">
					<div class="col-lg-2 col-md-2 col-sm-12 pt-2">
						<label class="form-label">College: </label>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 ">
						<input type="text" name="college" class="form-control" value="'.$records->college.'" readonly>
						
					</div>
				</div>
				<div class="row mb-3 py-1">
					<div class="col-6">
						<label class="form-label">Year Level: </label>
						<input type="text" name="yearlevel" class="form-control" value="'.$records->yearlevel.'" readonly>
					</div>
					<div class="col-6">
						<label class="form-label">Semester: </label>
						<input type="text" name="semester" class="form-control" value="'.$records->semester.'" readonly>
						
					</div>
				</div>
				<div class="row mb-3 py-1">
					<div class="col-6">
						<label class="form-label">Subject Code: </label>
						<input type="text" name="subjectCode" class="form-control" required value="'.$records->subjectCode.'">
					</div>
					<div class="col-6">
						<label class="form-label">Units: </label>
						<input type="number" name="units" class="form-control" value="'.$records->units.'" required>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-lg-2 col-md-2 col-sm-12 pt-2">
						<label class="form-label">Subject Name: </label>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 ">
						<input type="text" name="name" class="form-control" value="'.$records->name.'" required>
					</div>
				</div>
			</div>
			<div class="editSubjectButton d-flex justify-content-end mt-3">
				<button class="btn btn-default" id="saveEdit" type="submit" value="save">Save</button>
				<button class="btn btn-default" id="cancelEdit" type="button" data-bs-dismiss="modal">Cancel</button>
			</div>
		</form>
	</div>';
		echo $output;
	}


	public function updatesubject($id)
	{	
		$this->subjectModel->updateData($id);
		$this->session->set_flashdata('successSubject','Successfully edited subject');
		redirect('Admin/subject');
	}

	public function deactivate($id)
	{	
		$this->subjectModel->deactivateData($id);
		redirect('Admin/subject');
	}

	public function activate($id)
	{	
		$this->subjectModel->reactivateData($id);
		redirect('Admin/subject');
	}

	

}
