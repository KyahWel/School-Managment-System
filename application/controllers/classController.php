<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('subjectModel');
		$this->load->model('classModel');
		$this->load->model('courseModel');
		$this->load->model('teacherModel');
	}

	public function addClass(){
		if(isset($_POST['courseID']) && isset($_POST['yearlevel']) && isset($_POST['semester'])&& isset($_POST['classcode']) && isset($_POST['subjectID'])){
			$subjectID = $this->input->post('subjectID');
			$timeFrom = $this->input->post('timeFrom');
			$timeTo = $this->input->post('timeTo');
			$day = $this->input->post('day');
			$room = $this->input->post('room');
			$check = $this->classModel->checkExist();
			if($check==NULL){
				for($i=0;$i<sizeof($subjectID);$i++){
					$this->classModel->insertData($subjectID[$i],$timeFrom[$i],$timeTo[$i],$day[$i],$room[$i]);
				}
				redirect('Admin/class');
			}
			else{
				$this->session->set_flashdata('adminError','Error Adding Class: Class Code already exists'); 
				redirect('Admin/dashboard');
			}
		}
		else{
			$this->session->set_flashdata('adminError','Error Adding Class: Subjects not loaded properly'); 
			redirect('Admin/dashboard');
		}
	}
	
	public function viewCourseSubjects(){
		$courseData = $this->input->post('courseID');
		$semester = $this->input->post('semester');
		$yearlevel = $this->input->post('yearlevel');
		$records = $this->subjectModel->getCourseLinked($courseData,$yearlevel,$semester);
		if($courseData != "" && $semester != ""  && $yearlevel != "" ){
			$output="";
			for ($i=0; $i<count($records); $i++){	
			$output.='
				<div class="row mb-3">
					<div class="col-sm-3">
						<input type="text" class="form-control" readonly required value="'.$records[$i]['name'].'">
						<input type="text" class="form-control" hidden name="subjectID[]" readonly required value="'.$records[$i]['subjectID'].'">
					</div>		
					<div class="col-sm-3"> <!-- Day -->
						<select name="day[]" class="form-select" required>
							<option value="" disabled selected hidden>Day</option>
							<option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
							<option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
							<option value="Saturday">Saturday</option>
							<option value="Sunday">Sunday</option>
						</select>
					</div>
					<div class="col-sm-2" id="from-time"> <!-- Time from -->
						<input type="time" class="form-control" name="timeFrom[]" required>
					</div>
					<div class="col-sm-2" id="to-time"> <!--Time to -->
						<input type="time" class="form-control" name="timeTo[]" required>
					</div>
					<div class="col-sm-2" id="time"> <!-- Room No -->
						<input type="text" class="form-control" name="room[]" placeholder="Room" required>
					</div>
				</div>';
				
			}
			echo $output;
		}
	}
	
	public function viewClass(){
		$classData = $this->input->post('classcode');
        $records = $this->classModel->getData($classData);
		$output = '
			<div class="row mb-3">
				<div class="col-6"> <!--Class Code-->
					<label class="form-label">Class Code</label>
					<input type="text" class="form-control" value="'.$records[0]['class_code'].'" readonly>
				</div>
				<div class="col-6"> <!--Year Level-->
					<label class="form-label">Year Level</label>
					<input type="text" class="form-control" value="'.$records[0]['yearlevel'].'" readonly>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6"> <!--Course-->
					<label class="form-label">Course</label>
					<input type="text" class="form-control" value="'.$records[0]['degree'].' in '.$records[0]['major'].'" readonly>
				</div>
				<div class="col-6"> <!--Semester-->
					<label class="form-label">Semester</label>
					<input type="text" class="form-control" value="'.$records[0]['semester'].'"  readonly>
				</div>
			</div> 
			
			<hr class="mx-0 my-4">
			
			<label class="form-label"><b>Subjects</b></label>';
			for ($i=0; $i<count($records); $i++){	
				$output.='
						<div class="row mb-3"> <!--Subject-->
							<div class="col-sm-3">
								<input type="text" class="form-control" value="'.$records[$i]['name'].'" readonly>
							</div>';
				if($records[$i]['teacherID']==NULL){
					$output.='
							<div class="col-sm-3">
								<input type="text" class="form-control" value="" readonly>  
							</div>';
				}
				else{
					$output.='
							<div class="col-sm-3">
								<input type="text" class="form-control" value="'.$records[$i]['firstname'].' '.$records[$i]['lastname'].'" readonly>  
							</div>';
				}
				
				$output.='
							<div class="col-sm-2">
								<input type="text" class="form-control" value="'.$records[$i]['day'].'" readonly>
							</div>
							<div class="col-sm-1" id="start-time">
								<input type="text" class="form-control" value="'.date('h:i:s a', strtotime($records[$i]['start_time'])).'" readonly>
							</div>
							<div class="col-sm-1" id="end-time">
								<input type="text" class="form-control" value="'.date('h:i:s a', strtotime($records[$i]['end_time'])).'" readonly>
							</div>
							<div class="col-sm-2" id="time">
								<input type="text" class="form-control" value="'.$records[$i]['room_no'].'" readonly>
							</div>
						</div>
				';
			}
			$output.='	
			<div class="viewClassButton d-flex justify-content-end"> <!--Buttons-->
				<button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Okay</button>
			</div>';
		echo $output;
	}

	public function editClass(){
		$classData = $this->input->post('classcode');
        $records = $this->classModel->getData($classData);
		$prof = $this->teacherModel->viewAllData();
		$output ='<form method="POST" action="../classController/updateData/'.$records[0]['class_code'].'">
			<div class="row mb-3">
				<div class="col-6"> <!--Class Code-->
					<label class="form-label">Class Code</label>
					<input type="text" class="form-control"  readonly value="'.$records[0]['class_code'].'">
				</div>
				<div class="col-6"> <!--Year Level-->
					<label class="form-label">Year Level</label>
					<input type="text" class="form-control" readonly value="'.$records[0]['yearlevel'].'">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6"> <!--Course-->
					<label class="form-label">Course</label>
					<input type="text" class="form-control" readonly value="'.$records[0]['degree'].' in '.$records[0]['major'].'">
				</div>
				<div class="col-6"> <!--Semester-->
					<label class="form-label">Semester</label>
					<input type="text" class="form-control" readonly value="'.$records[0]['semester'].'">
				</div>
			</div>

			<hr class="mx-0 my-4">

			<label class="form-label"><b>Subjects</b></label>';
			for ($i=0; $i<count($records); $i++){	
				$output.='
			<div class="row mb-3"> <!--Subject-->
				<div class="col-sm-3">	
					<input type="text" class="form-control" readonly required value="'.$records[$i]['name'].'">
					<input type="text" class="form-control" hidden name="subjectID[]" readonly required value="'.$records[$i]['subjectID'].'">
				</div>	
				<div class="col-sm-3"> <!-- Professor -->
					<select name="profID[]" class="form-select">';
						if($records[$i]['teacherID']==NULL){
							$output.=' <option value="" disabled selected hidden>Select Professor</option>';
						}
						else{
							$output.=' <option value="'.$records[$i]['teacherID'].'" selected hidden>'.$records[$i]['firstname'].' '.$records[$i]['lastname'].'</option>';
						}
					
						for ($x=0; $x<count($prof); $x++){
							$output.=' <option value="'.$prof[$x]['teacherID'].'">'.$prof[$x]['firstname'].' '.$prof[$x]['lastname'].'</option>';
						}
						$output.='
					</select>
				</div>
				<div class="col-sm-2"> <!-- Day -->
					<select name="day[]" class="form-select">
						<option value="'.$records[$i]['day'].'" selected hidden>'.$records[$i]['day'].'</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						<option value="Sunday">Sunday</option>
					</select>
				</div>
				<div class="col-sm-1" id="time"> <!-- Time from -->
					<input type="time" class="form-control" name="timeFrom[]" value='.$records[$i]['start_time'].'>
				</div>
				<div class="col-sm-1" id="time"> <!--Time to -->
					<input type="time" class="form-control" name="timeTo[]" value='.$records[$i]['end_time'].'>
				</div>
				<div class="col-sm-2" id="time"> <!-- Room No -->
					<input type="text" class="form-control" name="room[]" value="'.$records[$i]['room_no'].'" required>
				</div>
			</div>';
		}
		$output.='
			</div>
			<div class="editClassButton d-flex justify-content-end"> <!--Buttons-->
				<button class="btn btn-default" id="save" type="submit" value="save">Confirm</button>
				<button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
			</div>
		</form>    ';

		echo $output;
	}

	public function updateData($classcode){
		$subjectID = $this->input->post('subjectID');
		$timeFrom = $this->input->post('timeFrom');
		$timeTo = $this->input->post('timeTo');
		$day = $this->input->post('day');
		$room = $this->input->post('room');
		$profID = $this->input->post('profID');
		for($i=0;$i<sizeof($subjectID);$i++){
			$this->classModel->updateData($subjectID[$i],$timeFrom[$i],$timeTo[$i],$day[$i],$room[$i],$profID[$i],$classcode);
		}
		redirect('Admin/class');
	}

	public function deactivate($id)
	{	
		$this->classModel->deactivateData($id);
		redirect('Admin/class');
	}

	public function activate($id)
	{	
		$this->classModel->reactivateData($id);
		redirect('Admin/class');
	}

	

}
