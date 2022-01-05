<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacultyController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('teacherModel');
		$this->load->model('eventsModel');
		$this->load->model('Authentication');
		if ($this->session->userdata('authenticated') != '2'){
			$this->session->set_flashdata('status','Please logout first'); 
			if ($this->session->userdata('authenticated') == '1')
				redirect('Admin/dashboard');
			else
				redirect('Student/dashboard');
		}
	}

	public function addFaculty($id)
	{
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
			$this->teacherModel->insertData($id);
			redirect('Admin/faculty');
		}
	}


	public function viewFaculty()
	{
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$output = '
		<div class="viewProfessorTitle">
            <button class="btn btn-default btn-sm" id="back-button" onclick="mainFaculty()">Back</button>
            <h3>'.$records->firstname.'\'s Profile</h3>
        </div>

        <!-- View Professor Information -->
        <div class="viewProfessorContent d-flex align-items-center">
            <div id="viewProfessorAvatar">
                <button class="btn"><i class="fas fa-user"></i></button>
            </div>
            <div class="table-responsive">
			<table id="viewProfessorInformation">
			<tr>
				<td>
					<b>Faculty Number:</b><br>
					<b>Name:</b><br>
					<b>Username:</b><br>
					<b>College:</b><br>
					<b>Department:</b><br>
				</td>
				<td>
					'.$records->teacherNumber.'<br>
					'.$records->firstname.' '.$records->lastname.'<br>
					'.$records->username.'<br>
					'.$records->college.'<br>
					'.$records->department.'<br>
				</td>
			</tr>
		</table>
            </div>
        </div>
		';
		echo $output;
	}

	public function editFaculty()
	{
		$facultyData = $this->input->post('id');
        $records = $this->teacherModel->getData($facultyData);
		$output = '<form method="POST" action="../FacultyController/updateTeacher/'.$records->teacherID.'" id="editProfessorForm">
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

	public function updateTeacher($id)
	{	
		$data['row'] = $this->teacherModel->updateData($id);
		redirect('Admin/faculty');
	}

	public function deactivate($id)
	{	
		$data['row'] = $this->teacherModel->deactivateData($id);
		redirect('Admin/faculty');
	}

	public function activate($id)
	{	
		$data['row'] = $this->teacherModel->reactivateData($id);
		redirect('Admin/faculty');
	}

	public function dashboard()
	{
		$data['announcement'] = $this->eventsModel->getAllData();
		$this->load->view('Faculty_Panel/dashboard',$data);
	}

	public function myProfile()
	{
        $this->load->view('Faculty_Panel/myProfile');
	}

	
	public function myStudents()
	{
        $this->load->view('Faculty_Panel/myStudents');
	}


	public function changePassword()
	{
        $this->load->view('Faculty_Panel/changePassword');
	}
}
