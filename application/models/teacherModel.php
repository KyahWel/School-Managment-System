<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
		$digits = 4;
		$year = 22;
		do{
			$holder = "PROF-TUPM-".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('teacher_accounts');
			$this->db->where('teacherNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);	
			$data = array(
				'teacherID' => NULL,
				'username' => $holder,
				'password' => password_hash($_POST['lastname'],PASSWORD_DEFAULT),
				'teacherNumber' => $holder,
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'middlename' => $_POST['middlename'],
				'extname' => $_POST['extname'],
				'college' => $_POST['college'],
				'department' => $_POST['department'],
				'creatorID' => $this->session->userdata('auth_user')['adminID'],
				'status' => 1
			);
		$this->db->insert('teacher_accounts',$data);
		unset($_POST);
		$this->session->set_flashdata('successAdmin','Added faculty account successfully');
		redirect('Admin/faculty');
			
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM teacher_accounts');
		return $query->result();
	}

	public function viewAllData()
	{
		$query = $this->db->query('SELECT * FROM teacher_accounts');
		return $query->result_array();
	}

	public function getData($id)
	{	
		$query = $this->db->query('	SELECT admin_accounts.adminNumber, teacher_accounts.* 
									FROM teacher_accounts 
									LEFT JOIN admin_accounts 
									ON teacher_accounts.creatorID = admin_accounts.adminID 
									WHERE teacher_accounts.teacherID ='.$id);
		return $query->row();
	}

	
	public function adminupdateData($id)
	{
		$data = array(
			'college' => $_POST['college'],
			'department' => $_POST['department']
		);
		$this->db->where('teacherID',$id);
		$this->db->update('teacher_accounts',$data);
		$this->session->set_flashdata('successAdmin','Updated faculty account successfully');
		redirect('Admin/faculty');
	}


	public function updateData($id)
	{
		$data = array(
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'middlename' => $_POST['middlename'],
			'extname' => $_POST['extname'],
			'phonenum' => $_POST['phonenum'],
			'email' => $_POST['email'],
			# Add Year Level
		);
		$this->db->where('teacherID',$id);
		$this->db->update('teacher_accounts',$data);
		
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('teacherID',$id);
		$this->db->update('teacher_accounts',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('teacherID',$id);
		$this->db->update('teacher_accounts',$data);
	}

	public function getSchedule($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code = section_table.class_code
								LEFT JOIN `course_table` 
								ON class.courseID = course_table.courseID
								WHERE class.teacherID= '$id' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}

	public function getScheduleMonday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Monday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleTuesday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Tuesday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleWednesday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Wednesday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleThursday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Thursday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleFriday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Friday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleSaturday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Saturday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}
	public function getScheduleSunday($id){
		$query = $this->db->query("SELECT * FROM `class`
								LEFT JOIN `subjects_table` 
								ON class.subjectID=subjects_table.subjectID
								LEFT JOIN `section_table` 
								ON class.class_code=section_table.class_code
								WHERE class.teacherID= '$id' AND class.day='Sunday' ORDER BY class.day ASC, class.start_time ASC ");
		return $query->result();
	}

	public function getSubjects($id){
		$getTeacherSubject = $this->db->query('	SELECT * FROM class
												LEFT JOIN subjects_table
												ON class.subjectID=subjects_table.subjectID
												LEFT JOIN section_table
												ON class.class_code = section_table.class_code
												WHERE class.teacherID='.$id
												);
		return $getTeacherSubject->result();
	}

	public function getStudents($id){
	
		$getStudentList = $this->db->query(	'SELECT * FROM student_accounts
											LEFT JOIN applicant_accounts
											ON student_accounts.applicantID = applicant_accounts.applicantID
											LEFT JOIN course_table
											ON applicant_accounts.courseID = course_table.courseID
											WHERE student_accounts.sectionID ='.$id);
		return $getStudentList->result();									
	}

	public function getSectionData($subjectID,$class_code){
	
		$getSectionData = $this->db->query(	'SELECT * FROM class
											 LEFT JOIN subjects_table
											 ON class.subjectID = subjects_table.subjectID
											 LEFT JOIN course_table
											 ON class.courseID = course_table.courseID
											 WHERE class.subjectID ='.$subjectID.' AND
											 class.class_code ="'.$class_code.'"
		
		');
		return $getSectionData->row();									
	}


	public function login(){
		$data = array(
			'username' => $_POST['username']
			// ,
			// 'password' => $_POST['password']
		);	
		$this->db->select('*');
		$this->db->from('teacher_accounts');
		$this->db->where($data);
		$query= $this->db->get();
		if($query->num_rows()!=0){
			// return $query->row();
			$row = $query->row();
			if(password_verify($_POST['password'],$row->password))
				return $query->row();
			else
				return NULL;
		}	
		else 
			return NULL;
	}

	public function changePassword($id) #Changepassword
	{	
			if(password_verify($_POST['oldpass'],$this->session->userdata('auth_user')['password'])){ 
				$newPassword = $_POST['newpass'];
				$confirmPassword = $_POST['confirmpass'];
				if(password_verify($newPassword,$this->session->userdata('auth_user')['password'])){
					$this->session->set_flashdata('facultyError','Old and New passwords are the same'); 
					redirect('Faculty/changePassword');
				}
				else{
					if($newPassword==$confirmPassword){
						$newdata = array(
							'password' => password_hash($newPassword,PASSWORD_DEFAULT),
						);
						$this->db->where('teacherID',$id);
						$this->db->update('teacher_accounts',$newdata);
						$this->session->set_flashdata('successFaculty','Password changed successfully'); 
						redirect('Faculty/dashboard');
					}
					else
						$this->session->set_flashdata('facultyError','Passwords do not match, Please try again'); 
						redirect('Faculty/changePassword');	
				}
			}
			else{
				$this->session->set_flashdata('facultyError','Incorrect Old Password'); 
				redirect('Faculty/changePassword');	
			} 	
		}	
}