<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentControllerFunctions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('studentModel');
	}

	public function addStudent()
	{
		//to be edited
		$this->load->view('/studentCRUD/addStudent');

		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['applicantID']) && isset($_POST['courseID'])&& isset($_POST['type'])&& isset($_POST['creatorID'])){
			$this->studentModel->insertData();
			redirect('Admin/students');
		}
	}

	public function view(){
		$studentData = $this->input->post('id');
        $records = $this->studentModel->getData($studentData);
		$output = 
		'  <!-- View Student Info -->
        <div class="viewStudentContent d-flex align-items-center">
            <div id="viewStudentAvatar">
				<img src="../assets/images/studentAvatar.svg" alt="Student Avatar" id="studentPhoto">
            </div>
            <div class="table-responsive mx-3">
                <table id="viewStudentInformation" class="table-body">
                    <tr class="text-start">    
                        <td class="py-2">
							<p><b>Email:</b></p>
                            <p><b>Username:</b></p>
                            <p><b>Student ID:</b></p>
                            <p><b>Course:</b></p>
                            <p class="mb-0"><b>Section:</b></p>
                        </td>
						<td class="py-2">
							<p>'.$records->email.'</p>
                            <p>'.$records->username.'</p>
                            <p>'.$records->studentNumber.'</p>
                            <p>'.$records->degree.' in '.$records->major.'</p>
                            <p class="mb-0">'.$records->sectionName.'</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--Tabs-->
		<div class="table-wrapper col-12 align-self-center my-3" id="viewProfessorTable">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewStudentTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="viewStudentInfoTab" data-bs-toggle="tab" data-bs-target="#StudentInfo" type="button" role="tab" aria-controls="StudentInfo" aria-selected="true">Personal Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewStudentSchedTab" data-bs-toggle="tab" data-bs-target="#StudentSched" type="button" role="tab" aria-controls="StudentSched" aria-selected="false">Schedule</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewStudentEducTab" data-bs-toggle="tab" data-bs-target="#StudentEduc" type="button" role="tab" aria-controls="StudentEduc" aria-selected="false">Educational Attainment</button>
                </li>
            </ul>   
       

		<div class="tab-content p-3" id="viewStudentTabContent">
				<!--Personal Information Tab-->
				<div class="tab-pane show active my-3" id="StudentInfo" role="tabpanel" aria-labelledby="viewStudentInfoTab">
					<div class="row">
						<div class="col-lg-3 col-md-6 mb-1"> <!--First Name-->
							<input type="text" name="firstname" class="form-control" value="'.$records->firstname.'" readonly>
							<label class="form-label pt-2">First Name</label>
						</div>
						<div class="col-lg-3 col-md-6 mb-1"> <!--Middle Name-->
							<input type="text" name="middlename" class="form-control" value='.$records->middlename.' readonly>
							<label class="form-label pt-2">Middle Name</label>
						</div>
						<div class="col-lg-3 col-md-6 mb-1"> <!--Last Name-->
							<input type="text" name="lastname" class="form-control" value='.$records->lastname.' readonly>
							<label class="form-label pt-2">Last Name</label>
						</div>
						<div class="col-lg-3 col-md-6 mb-1"> <!--Suffix-->
							<input type="text" name="suffix" class="form-control" value="'.$records->extname.'" readonly>
							<label class="form-label pt-2">Suffix</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-1"> <!--LRN-->
							<input type="text" name="lrn" class="form-control" value="'.$records->LRN.'" readonly>
							<label class="form-label pt-2">LRN Number</label>
						</div>
						
						<label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label><!--Gender-->';
		 	if($records->gender == "Male"){
			$output.='<div class="col-lg-3 col-md-12 pt-1">
							<div class="form-check-inline">
								<input class="form-check-input" type="radio" name="gender" checked value="Male" readonly>
								<label class="form-check-label" for="gender"> Male </label>
							</div>
							<div class="form-check-inline mb-3">
								<input class="form-check-input" type="radio" name="gender" value="Female" readonly>
								<label class="form-check-label" for="gender"> Female </label>
							</div>
						</div>
					</div>';
			 }
			 else{
				$output.='<div class="col-lg-3 col-md-12 pt-1">
						<div class="form-check-inline">
							<input class="form-check-input" type="radio" name="gender" checked value="Male" readonly>
							<label class="form-check-label" for="gender"> Male </label>
						</div>
						<div class="form-check-inline mb-3">
							<input class="form-check-input" type="radio" name="gender" checked value="Female" readonly>
							<label class="form-check-label" for="gender"> Female </label>
						</div>
					</div>
				</div>';
			 }
			$output.='<div class="row">
						<div class="col-lg-5 col-md-6 mb-1"> <!--Birthdate-->
							<input type="date" name="birthday" class="form-control" value="'.$records->birthday.'" readonly >
							<label class="form-label pt-2">Birth Date</label>
						</div>
						<div class="col-lg-2 col-md-6 mb-1"> <!--Age-->
							<input type="text" name="age" class="form-control" value="'.$records->age.'" readonly>
							<label class="form-label pt-2">Age</label>
						</div>
						<div class="col-lg-5 col-md-6 mb-1"> <!--Birthplace-->
							<input type="text" name="birthplace" class="form-control" value="'.$records->birthplace.'" readonly>
							<label class="form-label pt-2">Birth Place</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-1"> <!--Contact Number-->
							<input type="tel" name="contact" class="form-control" value="'.$records->contactnum.'" readonly>
							<label class="form-label pt-2">Contact Number</label>
						</div>
						<div class="col-lg-4 col-md-6 mb-1"> <!--Landline-->
							<input type="tel" name="landline" class="form-control" value="'.$records->landline.'" readonly>
							<label class="form-label pt-2">Landline Number</label>
						</div>
						<div class="col-lg-4 col-md-6 mb-1"> <!--Email-->
							<input type="text" name="email" class="form-control" value="'.$records->email.'" readonly>
							<label class="form-label pt-2">Email Address</label>
						</div>
					</div>
				</div>

				<!-- Schedule Tab-->
				<div class="tab-pane" id="StudentSched" role="tabpanel" aria-labelledby="viewStudentSchedTab"> 
					<div class="table-responsive">  
						<table class="table align-middle table-striped table-borderless table-hover" id="table-body"> <!--Table Body-->
							<thead>
								<tr>
									<th>Subject Code</th>
									<th>Subject Name</th>
									<th>Teacher</th>
									<th>Day</th>
									<th>Time</th>
								</tr>
							</thead>
							<tbody>     
								<tr>
									<td>DM001</td> 
									<td>Discrete Mathematics</td>
									<td>Salvador John</td>
									<td>Mon</td>
									<td>10:00-13:00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!--Educational Attainment Tab-->
				<div class="tab-pane" id="StudentEduc" role="tabpanel" aria-labelledby="viewStudentEducTab">
					<p class="fw-bold">SCHOOL LAST ATTENDED</p>
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-1"> <!--Name of School-->
							<input type="text" name="schoolname" class="form-control" value="'.$records->last_school_attended.'" readonly>
							<label class="form-label pt-2">Name of School</label>
						</div>
						<div class="col-lg-6 col-md-6 mb-1"> <!--Track-->
							<input type="text" name="track" class="form-control" value="'.$records->track.'" readonly>
							<label class="form-label pt-2">Program/Track</label>
						</div>
					</div>
					<div class="col-lg-12 col-md-6 mb-1"> <!--School Address-->
						<input type="text" name="schooladdress" class="form-control"  value="'.$records->school_address.'" readonly>
						<label class="form-label pt-2">School Address</label>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-1"> <!--Year Level-->
							<input type="text" name="yrlevel" class="form-control" value="'.$records->year_level.'" readonly>
							<label class="form-label pt-2">Year Level</label>
						</div>
						<div class="col-lg-6 col-md-6 mb-1"> <!--Year Graduated-->
							<input type="text" name="yrgrad" class="form-control" value="'.$records->year_graduated.'" readonly>
							<label class="form-label pt-2">Year Graduated</label>
						</div>
					</div>
					<div class="row">
						<label class="form-label col-lg-2 col-md-12 pt-1">Category:</label><!--Category-->
						';
			if($records->category=="K-12"){
				$output.='<div class="col-lg-4 col-md-12 pt-1">
							<div class="form-check-inline">
								<input class="form-check-input" type="radio" name="category" checked value="nc" readonly>
								<label class="form-check-label" for="category"> K-12 </label>
							</div>
							<div class="form-check-inline mb-3">
								<input class="form-check-input" type="radio" name="category" value="oc" readonly>
								<label class="form-check-label" for="category"> Old Curriculum </label>
							</div>
						</div>';
			}
			else{
				$output.='<div class="col-lg-4 col-md-12 pt-1">
							<div class="form-check-inline">
								<input class="form-check-input" type="radio" name="category" value="nc" readonly>
								<label class="form-check-label" for="category"> K-12 </label>
							</div>
							<div class="form-check-inline mb-3">
								<input class="form-check-input" type="radio" name="category" checked value="oc" readonly>
								<label class="form-check-label" for="category"> Old Curriculum </label>
							</div>
						</div>';
			}
			$output.='
						<div class="col-lg-6 col-md-6 mb-1"> <!--GPA-->
							<input type="text" name="gpa" class="form-control" value="'.$records->gpa.'" readonly>
							<label class="form-label pt-2">GPA</label>
						</div>
						</div>
				</div>
			</div>
			</div>';
	echo $output;
	}

	public function updateData($id){
		$this->studentModel->updateData($id);
		redirect('Student/Profile');
	}

	public function deactivate($id)
	{	
		 $this->studentModel->deactivateData($id);
		redirect('Admin/students');
	}

	public function activate($id)
	{	
		$this->studentModel->reactivateData($id);
		redirect('Admin/students');
	}

	public function changePass($id)
	{	
		$this->studentModel->changePassword($id);
	}

	
}
