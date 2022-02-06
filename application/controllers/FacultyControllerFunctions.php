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
			
		}
	}

	public function viewFaculty() {
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$recordsSched = $this->teacherModel->getSchedule($facultyData);
		$sectionSched = $this->teacherModel->getSchedule($facultyData);
		$output = '
		<div class="viewProfessorTitle">
            <button type="button" class="btn btn-default btn-sm" id="back-button" onclick="mainFaculty()"><i class="fa fa-arrow-left"></i> Back</button>
            <h3>'.$records->firstname.'\'s Profile</h3>
        </div>

        <!-- View Professor Information -->
        <div class="viewProfessorContent d-flex align-items-center">
            <div class="profile-pic-div">
                <img src="../assets/images/facultyAvatar.jpg" alt="Professor Avatar" id="facultyPhoto">
            </div>
            <div class="table-responsive mx-3">
                <table id="viewProfessorInformation" class="table-body">
                    <tr>
                        <td class="py-3">
                            <p><b>Faculty ID:</b></p>
                            <p><b>Name:</b></p>
                            <p><b>Department:</b></p>
                            <p class="mb-0"><b>Email:</b></p>
                        </td>
                        <td class="py-3">
                            <p>'.$records->teacherNumber.'</p>
                            <p>'.$records->firstname.' '.$records->lastname.'</p>
                            <p>'.$records->department.'</p>';
			if($records->email==NULL){
				$output.=' <p class="mb-0"> &nbsp </p>';
			}
			else{
				$output.='<p class="mb-0">'.$records->email.'</p>';
			}
               $output.='          
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
								<td>'.$recordsSched->major.''.$recordsSched->degree.'</td>
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
											<td>'.$sectionSched->major.''.$sectionSched->degree.'</td>
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
}