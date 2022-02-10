<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData($applicantID,$lastname)
	{	
		$digits = 4;
		$year = 22;
		do{
			$holder = "TUPM-".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('student_accounts');
			$this->db->where('studentNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);
		$data = array(
			'studentID' => NULL,
			'username' => $holder,
			'password' => password_hash($lastname,PASSWORD_DEFAULT),
			'studentNumber' => $holder,
			'applicantID' => $applicantID,
			'sectionID' => NULL,
			'yearlevel' => 1,
			'creatorID' => $this->session->userdata('auth_user')['adminID'],
			'status' => 1
		);
		$this->db->insert('student_accounts',$data);
		
		//Changed the status of applicant to Student
		$applicant = array(
			'applicant_result' => "Student"
		);
		$this->db->where('applicantID',$applicantID);
		$this->db->update('applicant_accounts',$applicant);
		unset($_POST);
	
	}



	public function viewData()
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									LEFT JOIN section_table 
									ON student_accounts.sectionID = section_table.sectionID 
									LEFT JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID' );
		return $query->result();
	}

	public function viewDataYearlevelBased($id)
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE sectionID IS NULL
									AND student_accounts.yearlevel ='.$id);
		return $query->result();
	}

	public function viewDataCourseBased($id)
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									LEFT JOIN course_table
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE sectionID IS NULL
									AND applicant_accounts.courseID ='.$id);
									
		return $query->result();
	}

	public function viewFiltered($courseID, $yearlevel)
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									LEFT JOIN course_table
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE sectionID IS NULL
									AND student_accounts.yearlevel ='.$yearlevel.'
									AND applicant_accounts.courseID ='.$courseID);
									
		return $query->result();
	}

	public function viewNoSection()
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									LEFT JOIN course_table
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE sectionID IS NULL');
		return $query->result();
	}

	public function viewSection($id)
	{
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID
									LEFT JOIN course_table
									ON applicant_accounts.courseID = course_table.courseID  
									WHERE sectionID ='.$id);
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('	SELECT * FROM student_accounts 
									LEFT JOIN applicant_accounts 
									ON student_accounts.applicantID = applicant_accounts.applicantID 
									LEFT JOIN section_table 
									ON student_accounts.sectionID = section_table.sectionID 
									LEFT JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE student_accounts.studentID ='.$id);
		return $query->row();
	}

	public function getSchedule($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
			$query2 = $this->db->query("SELECT * FROM `class` 
										JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
										JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
										WHERE `class_code` = '$class_code->class_code'
										ORDER BY `day` ASC ");
			return $query2->result();
		}
		else{
			return NULL;
		}
		
	}

	public function getScheduleMonday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Monday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}
	public function getScheduleTuesday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Tuesday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}

	public function getScheduleWednesday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Wednesday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}

	public function getScheduleThursday($id){
			$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Thursday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
			}
			else{
				return NULL;
			}
	}

	public function getScheduleFriday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Friday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}

	public function getScheduleSaturday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Saturday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}

	public function getScheduleSunday($id){
		$query = $this->db->query("SELECT class.class_code FROM `class` 
									JOIN `section_table` ON class.class_code = section_table.class_code 
									JOIN `student_accounts` ON section_table.sectionID = student_accounts.sectionID 
									WHERE `studentID` = ".$id);
		$class_code = $query->row();
		if($class_code != NULL){
		$query2 = $this->db->query("SELECT * FROM `class` 
									JOIN `subjects_table` ON class.subjectID = subjects_table.subjectID
									JOIN `teacher_accounts` ON class.teacherID = teacher_accounts.teacherID
									WHERE `class_code` = '$class_code->class_code' AND class.day='Sunday' 
									ORDER BY `start_time` ASC ");
		return $query2->result();
		}
		else{
			return NULL;
		}
	}

	public function updateData($id)
	{
		$data = array(
			'contactnum' => $_POST['contactnum'],
			'landline' => $_POST['landline'],
			'email' => $_POST['email'],
			'unit' => $_POST['unit'],
			'street' => $_POST['street'],
			'barangay' => $_POST['barangay'],
			'city' => $_POST['city'],
			'zipcode' => $_POST['zipcode'],
			'province' => $_POST['province'],
			# Add Year Level
		);
		$this->db->where('applicantID',$id);
		$this->db->update('applicant_accounts',$data);
	
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
	}

	public function login(){
		$data = array(
			'username' => $_POST['username']
			// ,
			// 'password' => $_POST['password']
		);	
		$this->db->select('*');
		$this->db->from('student_accounts');
		$this->db->join('applicant_accounts','student_accounts.applicantID = applicant_accounts.applicantID','left');
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
					$this->session->set_flashdata('studentError','Old and New passwords are the same'); 
					redirect('Student/changePassword');
				}
				else{
					if($newPassword==$confirmPassword){
						$newdata = array(
							'password' => password_hash($newPassword,PASSWORD_DEFAULT),
						);
						$this->db->where('studentID',$id);
						$this->db->update('student_accounts',$newdata);
						$this->session->set_flashdata('successStudent','Password changed successfully'); 
						redirect('Student/Dashboard');
					}
					else
						$this->session->set_flashdata('studentError','Passwords do not match, Please try again'); 
						redirect('Student/changePassword');	
				}
			}
			else{
				$this->session->set_flashdata('studentError','Incorrect Old Password'); 
				redirect('Student/changePassword');	
			} 	
		}	
		
}
