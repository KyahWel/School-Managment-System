<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('examModel');
	}


	public function addExam()
	{
		$this->load->view('/examCRUD/addexam');

		if(isset($_POST['date']) && isset($_POST['time']) && isset($_POST['building']) && isset($_POST['room_no']) && isset($_POST['floor_no'])){
			$this->examModel->insertData();
			redirect('Admin/admission');
		}
	}

	public function edit()
	{
		$examData = $this->input->post('id');
        $records = $this->examModel->getData($examData);
		$output = '<form method="POST" action="../examController/updateExam/'.$records->schedID.'" class="formExam">
					<div class="row mb-3">
						<div class="col-lg-6 col-md-12">
							<!--Date-->
							<label class="form-label">Date</label>
							<input type="date" class="form-control" name="date" value = '.$records->date.' required>
						</div>
						<div class="col-lg-6 col-md-12">
							<!--Time-->
							<label class="form-label">Time</label>
							<input type="time" class="form-control" name="time" value = '.$records->time.' required>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-lg-6 col-md-12">
							<!--Building-->
							<label class="form-label">Building</label>
							<select class="form-select" name="building" required>
								<option value="" disabled selected hidden>'.$records->building.'</option>
								<option value="College of Science">College of Science</option>
								<option value="College of Engineering">College of Engineering</option>
								<option value="College of Industrial Education">College of Industrial Education</option>
								<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
								<option value="College of Liberal Arts">College of Liberal Arts</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-12">
							<!--Time-->
							<label class="form-label">Room Number</label>
							<input type="text" class="form-control" name="room_no" value = '.$records->room_no.' required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<!--Time-->
							<label class="form-label">Floor Number</label>
							<input type="text" class="form-control" name="floor_no" value = '.$records->floor_no.' required>
						</div>
					</div>
					<div class="addExamScheduleButton mt-4 d-flex justify-content-end">
						<!--Buttons-->
						<button class="btn btn-default" id="examEditSave" type="submit" name="submit" value="save">Save</button>
						<button class="btn btn-default" id="examEditCancel" data-bs-dismiss="modal" value="cancel">Cancel</button>
					</div>
				</form>';
			echo $output;
	}

	public function updateExam($id)
	{	
		$data['row'] = $this->examModel->updateData($id);
		redirect('Admin/admission');
	}

	public function deactivate($id)
	{	
		$data['row'] = $this->examModel->deactivateData($id);
		redirect('Admin/admission');
	}

	public function activate($id)
	{	
		$data['row'] = $this->examModel->reactivateData($id);
		redirect('Admin/admission');
	}
}
