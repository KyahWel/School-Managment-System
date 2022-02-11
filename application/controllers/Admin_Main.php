<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Admin_Main extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('studentModel');
		$this->load->model('applicantModel');
		$this->load->model('eventsModel');
	}
	public function addAdmin() {
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']))
		{
			$this->AdminModel->insertData();
		}
	}
	public function viewAdmin() {
		$adminData = $this->input->post('adminData');
        $records = $this->AdminModel->getData($adminData);
		$output = '
			<div class="row mb-3">
				<div class="col-6">
					<label for="id" class="form-label">ID</label>
					<input type="text" class="form-control" name="id" value="'.$records->adminID.'" readonly>				
				</div>
				<div class="col-6">
					<label for="adminNumber" class="form-label">Admin Number</label>
					<input type="text" class="form-control" name="adminNumber" value="'.$records->adminNumber.'" readonly>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label for="username" class="form-label">Username</label>
					<input type="text" class="form-control" name="username" value="'.$records->username.'" readonly>				
				</div>
				<div class="col-6">
					<label for="password" class="form-label">Password (Hashed)</label>
					<input type="text" class="form-control" name="password" value="'.$records->password.'" readonly>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label for="firstname" class="form-label">First Name</label>
					<input type="text" class="form-control" name="firstname" value="'.$records->firstname.'" readonly>
				</div>
				<div class="col-6">
					<label for="lastname" class="form-label">Last Name</label>
					<input type="text" class="form-control" name="lastname" value="'.$records->lastname.'" readonly>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-6">
					<label for="firstname" class="form-label">Email</label>
					<input type="text" class="form-control" name="firstname" value="'.$records->email.'" readonly>
				</div>

			</div>
		';
		echo $output;
	}
	public function editAdmin() {
		$adminData = $this->input->post('id');
        $records = $this->AdminModel->getData($adminData);
		$output = '
			<form method="POST" action="../admin_main/updateAdmin/'.$records->adminID.'" id="editAdminForm">
				<div class="row mb-3">
					<div class="col-6">
						<label class="form-label">Username:</label>
						<input type="text" class="form-control" name="username" value="'.$records->username.'">
					</div>
					<div class="col-6">
						<label class="form-label">Email:</label>
						<input type="text" class="form-control" name="email" value="'.$records->email.'">
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-6">
						<label class="form-label">Firstname:</label>
						<input type="text" class="form-control" name="firstname" value="'.$records->firstname.'">
					</div>
					<div class="col-6">
						<label class="form-label">Lastname:</label>
						<input type="text" class="form-control" name ="lastname" value="'.$records->lastname.'">
					</div>
				</div>
				<div class="editAdminButton d-flex justify-content-end">
					<button class="btn btn-default" id="saveEdit" type="submit" value="save">Save Changes</button>
					<button class="btn btn-default" id="cancelEdit" type="button" data-bs-dismiss="modal">Cancel</button><br>
				</div>
			</form>';
		echo $output;
	}

	public function viewApplicant() {
		$applicantData = $this->input->post('id');
        $records = $this->applicantModel->getData($applicantData);
		$output = '
		<div class="enrollmentDetails mt-3 mb-0" id="details">
			<div class="tabHeader">
				<p class="text-white px-4 py-3">Applicant ID: <span class="fw-bold">'.$records->applicantNumber.'</span></p>
			</div>
			<div class="tabDetails px-4">
				<h6 class="step fw-bold py-2 px-3"> <i class="fa fa-user px-1"></i> PERSONAL INFORMATION </h6>
				<p class="my-4 pt-1"> <b>Course Chosen: </b>'.$records->degree.' in '.$records->major.'</p>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<p><b>Name: </b>'.$records->firstname.' '.$records->middlename.' '.$records->lastname.'</p>
						<p><b>Suffix: </b>'.$records->extname.'</p>
						<p><b>LRN: </b>'.$records->LRN.'</p>
						<p><b>Gender: </b>'.$records->gender.'</p>
						<p><b>Birth Date: </b>'.$records->birthday.'</p>
						<p><b>Age: </b>'.$records->age.'</p>
						<p><b>Birth Place: </b>'.$records->birthplace.'</p>
						<p><b>Contact Number: </b>'.$records->contactnum.'</p>
						<p><b>Landline: </b>'.$records->landline.'</p>
						<p><b>Email Address: </b>'.$records->email.'</p>

					</div>
					<div class="col-lg-6">
						<h6 class="text-dark fw-bold pb-3"> PERMANENT ADDRESS</h6>
						<p><b>Unit #:</b> '.$records->unit.'</p>
						<p><b>Street: </b> '.$records->street.'</p>
						<p><b>Barangay: </b> '.$records->barangay.'</p>
						<p><b>City: </b> '.$records->city.'</p>
						<p><b>Zipcode: </b> '.$records->zipcode.'</p>
						<p><b>Province: </b> '.$records->province.'</p>
					</div>
				</div>
				<hr>
				<h6 class="step fw-bold text-uppercase py-2 px-3"><i class="fa fa-user-graduate px-1"></i>
				Educational Attainment: School Last Attended</h6>
				<p class="pt-2"><b>Name of School: </b> '.$records->last_school_attended.'</p>
				<p><b>Program/Track: </b> '.$records->track.'</p>
				<p><b>School Address: </b> '.$records->school_address.'</p>
				<p><b>Year Level: </b> '.$records->year_level.'</p>
				<p><b>Year Graduated: </b> '.$records->year_graduated.'</p>
				<p><b>Category: </b> '.$records->category.'</p>
				<p class="pb-3"><b>GPA: </b> '.$records->gpa.'</p>
				<hr>
				<h6 class="step fw-bold text-uppercase py-2 px-3"><i class="fas fa-file px-1"></i> Admission Requirements</h6>
				<div class="row mb-3 pt-2">
					<div class="mb-3 fw-bold">
						Medical Clearance <br>
						<img src="../application/uploads\\'.$records->medical_record.'" alt="Medical Clearance" class="rounded hover-shadow cursor" src="assets/images/download.png" onclick="openModal();currentSlide(1)" style="width: 200px;">
					</div>
					<div class="mb-3 fw-bold">
						Form 137 <br>
						<img src="../application/uploads\\'.$records->form_137.'" alt="Form 137" class="rounded hover-shadow cursor" onclick="openModal();currentSlide(2)" style="width: 200px">
					</div>
					<div class="mb-3 fw-bold">
						Good Moral <br>
						<img src="../application/uploads\\'.$records->good_moral.'" alt="Good Moral" class="rounded hover-shadow cursor" onclick="openModal();currentSlide(3)" style="width: 200px;">
					</div>
				</div>
			</div>
			<div id="requirementsModal" class="modal reqModal">
				<span class="closeRequirement cursor" onclick="closeModal()">&times;</span>
				<div class="modal-Requirementscontent">
					<div class="mySlides">
						<div class="numbertext">Medical Clearance</div>
						<img src="../application/uploads\\'.$records->medical_record.'" alt="Medical Clearance"  style="width:100%" height="500px">
					</div>

					<div class="mySlides">
						<div class="numbertext">Form 137</div>
						<img src="../application/uploads\\'.$records->form_137.'" alt="Form 137" style="width:100%" height="500px">
					</div>

					<div class="mySlides">
						<div class="numbertext">Good Moral</div>
						<img src="../application/uploads\\'.$records->good_moral.'" alt="Good Moral" style="width:100%" height="500px">
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<!-- <div class="caption-container">
						<p id="caption"></p>
					</div> -->
				</div>
			</div>
		</div>';
		echo $output;
	}

	public function addApplicants() {	
		if(isset($_POST['applicantID']) && isset($_POST['lastname'])){
			$applicantID = $this->input->post('applicantID');
			$lastname = $this->input->post('lastname');
			for($i=0;$i<sizeof($applicantID);$i++) {
				$this->studentModel->insertData($applicantID[$i], $lastname[$i]);
			}
		}
		redirect("Admin/admission");
	}

	public function addApplicant() {	
		$applicantID = $this->input->post('id');
		$lastname = $this->input->post('surname');
		if(isset($_POST['applicantID']) && isset($_POST['lastname'])){
			$this->studentModel->addApplicant($applicantID,$lastname);
		}
		redirect("Admin/admission");
	}
	

	public function updateAdmin($id) {
		$data['row'] = $this->AdminModel->updateData($id);
		redirect("Admin/admin");
	}

	public function deactivate($id) {
		$data['row'] = $this->AdminModel->deactivateData($id);
		redirect("Admin/admin");
	}

	public function activate($id) {
		$data['row'] = $this->AdminModel->reactivateData($id);
		redirect("Admin/admin");
	}

	public function changePass($id) {	
		$this->AdminModel->changePassword($id);
	}
}