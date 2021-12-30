<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class courseController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('courseModel');
	}


	public function addCourse()
	{
		if(isset($_POST['degree']) && isset($_POST['major']) && isset($_POST['college'])){
			$this->courseModel->insertData();
			redirect('Admin/course');
		}
	}

	public function viewCourse()
	{
		$courseData = $this->input->post('id');
        $records = $this->courseModel->getData($courseData);
		$output='<div class="row mb-3">
			<div class="col-6">
				<label class="form-label">Course ID:</label>
				<label>'.$records->courseID.'</label>
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
			<div class="editCourseButton d-flex justify-content-end">
				<button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Exit</button>
			</div>';
		echo $output;
	}

	public function editCourse(){
		$courseData = $this->input->post('id');
        $records = $this->courseModel->getData($courseData);
		$output = '<form method="POST" action="../courseController/updateCourse/'.$records->courseID.'"" id="editCourseForm">
			<div class="row">
				<div class="col-sm-12">
					<label class="form-label">Degree:</label>
					<input type="text" class="form-control" name="degree" value="'.$records->degree.'">
				</div>
				<div class="col-sm-12"> 
					<label class="form-label">Major:</label>
					<input type="text" class="form-control" name="major" value="'.$records->major.'">
				</div>
				<div class="col-sm-12">
					<label class="form-label">College:</label>
					<select name="college" class="form-control" required id="collegeSelect">
						<option value="" disabled selected hidden>'.$records->college.'</option>
						<option value="College of Science">College of Science</option>
						<option value="College of Engineering">College of Engineering</option>
						<option value="College of Industrial Education">College of Industrial Education</option>
						<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
						<option value="College of Liberal Arts">College of Liberal Arts</option>
					</select>
				</div>
			</div><br>
			<div class="editCourseButton d-flex justify-content-end">
				<button class="btn btn-default" id="save" type="submit" value="save">Save</button>
				<button class="btn btn-default" id="cancel" type="submit" value="cancel">Cancel</button>
			</div>  
		</form>';
		echo $output;
	}

	public function updateCourse($id)
	{	
		$this->courseModel->updateData($id);
		redirect('Admin/course');
	}

	public function deactivate($id)
	{	
		$this->courseModel->deactivateData($id);
		redirect('Admin/course');
	}

	public function activate($id)
	{	
		$this->courseModel->reactivateData($id);
		redirect('Admin/course');
	}

	

}
