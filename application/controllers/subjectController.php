<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjectController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('subjectModel');
	}


	public function addsubject()
	{
		if(isset($_POST['courseID']) && isset($_POST['subjectCode']) && isset($_POST['yearlevel']) && isset($_POST['name']) && isset($_POST['units'])){
			$this->subjectModel->insertData();
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
		$output = '<form method="POST" action="../subjectController/updatesubject/'.$records->subjectID.'"" id="editsubjectForm">
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
			<div class="editsubjectButton d-flex justify-content-end">
				<button class="btn btn-default" id="save" type="submit" value="save">Save</button>
				<button class="btn btn-default" id="cancel" type="submit" value="cancel">Cancel</button>
			</div>  
		</form>';
		echo $output;
	}

	public function updatesubject($id)
	{	
		$this->subjectModel->updateData($id);
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
