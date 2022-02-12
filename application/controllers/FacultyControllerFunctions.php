<?php
defined('BASEPATH') || exit('No direct script access allowed');

class FacultyControllerFunctions extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		$this->load->model('teacherModel');
		$this->load->model('studentModel');
		$this->load->model('studentGrades');
		$this->load->model('sectionModel');
	}

	public function addFaculty() {
		if (isset($_POST['firstname']) && isset($_POST['lastname']))
		{
			$this->teacherModel->insertData();
			
		}
	}

	public function viewFaculty() {
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$recordsSched = $this->teacherModel->getSchedule($facultyData);
		$sectionSched = $this->teacherModel->getSchedule($facultyData);
		$output = '
		<div class="viewProfessorTitle">
            <button type="button" class="btn btn-default btn-sm" id="back-button" onclick="mainFaculty()"><em class="fa fa-arrow-left"></em> Back</button>
            <h3>'.$records->firstname.'\'s Profile</h3>
        </div>

        <!-- View Professor Information -->
        <div class="viewProfessorContent d-flex align-items-center">
            <div class="profile-pic-div">
                <img src="../assets/images/facultyAvatar.png" alt="Professor Avatar" id="facultyPhoto">
            </div>
            <div class="table-responsive mx-3">
                <table id="viewProfessorInformation" class="table-body">
                    <tr class="d-flex align-items-start">
                        <td class="py-3">
                            <p><b>Faculty ID:</b></p>
                            <p><b>Name:</b></p>
                            <p><b>Department:</b></p>
                            <p class="mb-0"><b>Email:</b></p>
                        </td>
                        <td class="py-3">
                            <p>'.$records->teacherNumber.'</p>
                            <p>'.$records->firstname.' '.$records->lastname.'</p>
                            <p>'.$records->department.'</p>
							<p class="mb-0">'.$records->email.'</p>     
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- View Professor Table -->
        <div class="table-wrapper col-12 align-self-center mt-4 mb-3" id="viewProfessorTable">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewProfessorTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="viewProfessorInformationTab" data-bs-toggle="tab" data-bs-target="#ProfessorInformation" type="button" role="tab" aria-controls="ProfessorInformation" aria-selected="true">Professor Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewProfessorSubjectTab" data-bs-toggle="tab" data-bs-target="#ProfessorSubject" type="button" role="tab" aria-controls="ProfessorSubject" aria-selected="false">Subject</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Section</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="viewProfessorTabContent">
                <!-- Information Tab -->
                <div class="tab-pane show active my-3" id="ProfessorInformation" role="tabpanel" aria-labelledby="viewProfessorInformationTab">
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
				</form>
                </div>
                <!-- Subject Tab -->
                <div class="tab-pane" id="ProfessorSubject" role="tabpanel" aria-labelledby="viewProfessorSubjectTab">
                    <div class="table-responsive">
                        <table class="table table-body align-middle table-striped table-borderless table-hover">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>School Year</th>
                                    <th>Year Level</th>
                                    <th>Semester</th>
                                    <th>Course</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                </tr>
                            </thead>
                            <tbody>';
			foreach($recordsSched as $recordsSched){
				$output.=' <tr>
								<td>'.$recordsSched->schoolyear.'</td>
								<td>'.$recordsSched->yearlevel.'</td>
								<td>'.$recordsSched->semester.'</td>
								<td>'.$recordsSched->degree.' in '.$recordsSched->major.'</td>
								<td>'.$recordsSched->subjectCode.'</td>
								<td>'.$recordsSched->name.'</td>
							</tr>';
			}
                                
            $output.='                   
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Section Tab -->
                <div class="tab-pane" id="ProfessorSection" role="tabpanel" aria-labelledby="viewProfessorSectionTab">
                    <div class="table-responsive">
                        <table class="table table-body align-middle table-striped table-borderless table-hover" id="sectionListOfFaculty">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>School Year</th>
                                    <th>Year Level</th>
                                    <th>Semester</th>
                                    <th>Course</th>
                                    <th>Section</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>';
							foreach($sectionSched as $sectionSched){
								$output.='
										<tr>
											<td>'.$sectionSched->schoolyear.'</td>
											<td>'.$sectionSched->yearlevel.'</td>
											<td>'.$sectionSched->semester.'</td>
											<td>'.$recordsSched->degree.' in '.$recordsSched->major.'</td>
											<td>'.$sectionSched->sectionName.'</td>
											<td>'.$sectionSched->subjectCode.'</td>
											<td>'.$sectionSched->name.'</td>
											<td>'.$sectionSched->day.'</td>
											<td>'.date("h:i:sa",strtotime($sectionSched->start_time)).'-'.date("h:i:sa",strtotime($sectionSched->end_time)).'</td>
										</tr>';
											
							}				
							$output.='      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
		';
		echo $output;
	}

	public function editFaculty() {
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$output = '
			<form method="POST" action="../FacultyControllerFunctions/updateTeacherAdmin/'.$records->teacherID.'" id="editProfessorForm">
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

	public function updateTeacherAdmin($id) {
		$this->teacherModel->adminupdateData($id);
	}

	public function updateTeacher($id) {
		 $this->teacherModel->updateData($id);
		redirect('Faculty/profile');
	}

	public function deactivate($id) {
		$this->teacherModel->deactivateData($id);
		redirect('Admin/faculty');
	}

	public function activate($id) {
		$this->teacherModel->reactivateData($id);
		redirect('Admin/faculty');
	}

	public function changePass($id) {
		$this->teacherModel->changePassword($id);
	}

	public function insertGrade($studentID){
		$teacheriD = $this->input->get('teacherID');
		$subjectID = $this->input->get('subjectID');
		$classCode = $this->input->get('classCode');
		$student = $this->studentModel->getData($studentID);
		$sectionName = $this->sectionModel->getData($student->sectionID);
		if (isset($_POST['grade']))
		{
			$this->studentGrades->updateData($studentID,$teacheriD,$subjectID);
		}
		redirect("Faculty/list/$sectionName->sectionName?classCode=$classCode&subjectID=$subjectID&sectionID=$sectionName->sectionID");
	}
	
	public function editGrade(){
		$studentID = $this->input->post('studentID');
		$teacheriD = $this->input->post('teacherID');
		$classCode = $this->input->post('class_code');
		$subjectID = $this->input->post('subjectID');
		$section= $this->teacherModel->getSectionData($subjectID,$classCode);
		$student = $this->studentModel->getData($studentID);
		$grades = $this->studentGrades->viewDataGrade($studentID,$teacheriD,$subjectID);
		$output='
				<form class="container my-3" method="POST" 
				action="'.base_url('FacultyControllerFunctions/insertGrade').'/'
				.$studentID.'?teacherID='.$teacheriD.'&subjectID='.$subjectID.'&classCode='.$classCode.'">
					<div class="row mb-3">
						<div class="col-6">
							<!--Subject Code-->
							<label for="subjectCode" class="form-label mb-0">Subject Code: </label>
							<input type="text" class="form-control" readonly value='.$section->subjectCode.'>
						</div>
						<div class="col-6">
							<!--Subject Title-->
							<label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
							<input type="text" class="form-control" readonly value="'.$section->name.'">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-6">
							<!--Student Name-->
							<label for="studentName" class="form-label mb-0">Student Name: </label>
							<input type="text" class="form-control" readonly value="'.$student->firstname.' '.$student->lastname.'">
						</div>
						<div class="col-6">
							<!--Student ID-->
							<label for="studentID" class="form-label mb-0">Student Number: </label>
							<input type="text" class="form-control" readonly value='.$student->studentNumber.'>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-6">
							<!--Section-->
							<label for="section" class="form-label mb-0">Section: </label>
							<input type="text" class="form-control" readonly value='.$student->sectionName.'>
						</div>
						<div class="col-6">
							<!--Schedule-->
							<label for="schedule" class="form-label mb-0">Schedule: </label>
							<input type="text" class="form-control" readonly 
							value="'.date('h:i:sa', strtotime($section->start_time)).' to '.date('h:i:sa', strtotime($section->end_time)).'">
						</div>
					</div>
				<div class="row my-4 align-items-center">
					<div class="col-sm-auto">
						<label for="grade" class="col-form-label">Old Grade: </label>
					</div>
					<div class="col-auto col-sm-3">
						<input type="grade" class="form-control text-center" aria-describedby="gradeOfStudent" readonly value='.$grades->grade.'>
					</div>
				</div>
				<div class="row mb-3 align-items-center">
					<div class="col-sm-auto">
						<label for="grade"  class="col-form-label">New Grade: </label>
					</div>
					<div class="col-auto col-sm-3">
						<input type="grade" name="grade" class="form-control" aria-describedby="gradeOfStudent">
					</div>
					
				</div>
				<div class="editGradeButton d-flex justify-content-end pt-4">
					<!--Buttons-->
					<button class="btn btn-default" id="save" type="submit" value="save">Confirm</button>
					<button class="btn btn-default" id="cancel" type="button"
						data-bs-dismiss="modal">Cancel</button>
				</div>
		</form>
	';
	echo $output;
	}
	

	public function addGrade(){
		$studentID = $this->input->post('studentID');
		$teacheriD = $this->input->post('teacherID');
		$classCode = $this->input->post('class_code');
		$subjectID = $this->input->post('subjectID');
		$section= $this->teacherModel->getSectionData($subjectID,$classCode);
		$student = $this->studentModel->getData($studentID);
		$output='
			<form class="container my-3" method="POST" 
			action="'.base_url('FacultyControllerFunctions/insertGrade').'/'
			.$studentID.'?teacherID='.$teacheriD.'&subjectID='.$subjectID.'&classCode='.$classCode.'">
				<div class="row mb-3">
					<div class="col-6">
						<!--Subject Code-->
						<label for="subjectCode" class="form-label mb-0">Subject Code: </label>
						<input type="text" class="form-control" readonly value='.$section->subjectCode.'>
					</div>
					<div class="col-6">
						<!--Subject Title-->
						<label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
						<input type="text" class="form-control" readonly value="'.$section->name.'">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-6">
						<!--Student Name-->
						<label for="studentName" class="form-label mb-0">Student Name: </label>
						<input type="text" class="form-control" readonly value="'.$student->firstname.' '.$student->lastname.'">
					</div>
					<div class="col-6">
						<!--Student ID-->
						<label for="studentID" class="form-label mb-0">Student Number: </label>
						<input type="text" class="form-control" readonly value='.$student->studentNumber.'>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-6">
						<!--Section-->
						<label for="section" class="form-label mb-0">Section: </label>
						<input type="text" class="form-control" readonly value='.$student->sectionName.'>
					</div>
					<div class="col-6">
						<!--Schedule-->
						<label for="schedule" class="form-label mb-0">Schedule: </label>
						<input type="text" class="form-control" readonly 
						value="'.date('h:i:sa', strtotime($section->start_time)).' to '.date('h:i:sa', strtotime($section->end_time)).'">
					</div>
				</div>
				<div class="row my-4 align-items-center">
					<div class="col-sm-auto">
						<label for="grade" class="col-form-label">Grade: </label>
					</div>
					<div class="col-auto col-sm-3">
						<input type="number" step="any" class="form-control" name="grade" aria-describedby="gradeOfStudent">
					</div>
				</div>
				<div class="inputGradeButton d-flex justify-content-end pt-4">
					<!--Buttons-->
					<button class="btn btn-default" id="saveInput" type="submit" value="save">Save</button>
					<button class="btn btn-default" id="cancelInput" type="button"
						data-bs-dismiss="modal">Cancel</button>
				</div>
			</form>		
		';
		echo $output;
	}
}