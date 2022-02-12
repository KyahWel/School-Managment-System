<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentGrades extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function viewData($id)
	{
		$query = $this->db->query('	SELECT * FROM student_grades 
									LEFT JOIN teacher_accounts
									ON student_grades.teacherID = teacher_accounts.teacherID
									LEFT JOIN subjects_table
									ON subjects_table.subjectID = student_grades.subjectID
									WHERE student_grades.studentID ='.$id);
		return $query->result();
	}

	public function viewDataGrade($id,$tid,$sid)
	{
		$query = $this->db->query('	SELECT * FROM student_grades 
		
									WHERE student_grades.studentID ='.$id.'
									AND student_grades.teacherID='.$tid.'
									AND student_grades.subjectID='.$sid);
		return $query->row();
	}

	public function updateData($studentID,$teacherID,$subjectID)
	{
		$equivalent = 0;
		if($_POST['grade']==100 && $_POST['grade']>=99){
			$equivalent = 1.0;
		}
		elseif($_POST['grade']<99 && $_POST['grade']>=96){
			$equivalent = 1.25;
		}
		elseif($_POST['grade']<96 && $_POST['grade']>=93){
			$equivalent = 1.50;
		}
		elseif($_POST['grade']<93 && $_POST['grade']>=90){
			$equivalent = 1.75;
		}
		elseif($_POST['grade']<90 && $_POST['grade']>=87){
			$equivalent = 2.0;
		}
		elseif($_POST['grade']<87 && $_POST['grade']>=84){
			$equivalent = 2.25;
		}
		elseif($_POST['grade']<84 && $_POST['grade']>=81){
			$equivalent = 2.5;
		}
		elseif($_POST['grade']<81 && $_POST['grade']>=78){
			$equivalent = 2.75;
		}
		elseif($_POST['grade']<78 && $_POST['grade']>=75){
			$equivalent = 3.0;
		}
		elseif($_POST['grade']<75){
			$equivalent = 5.0;
		}
		$data = array(
			'grade' => $_POST['grade'],
			'equivalent' => $equivalent
		);
		$this->db->where('studentID',$studentID);
		$this->db->where('teacherID',$teacherID);
		$this->db->where('subjectID',$subjectID);
		$this->db->update('student_grades',$data);
		unset($_POST);
	}
	
	public function getGPA($id)
	{
		$total = 0;
		$totalUnits = 0;
		$query = $this->db->query('	SELECT * FROM student_grades 
									LEFT JOIN subjects_table
									ON subjects_table.subjectID = student_grades.subjectID
									WHERE student_grades.studentID ='.$id);
		$query = $query->result();
		if($query != NULL){
			foreach($query as $query){
				$total += ($query->equivalent * $query->units);
				$totalUnits += $query->units;
			}
			return ($total/$totalUnits);
		}
		else{
			return;
		}
	
	}

	public function getsem($id)
	{
		$total = 0;
		$totalUnits = 0;
		$query = $this->db->query('	SELECT * FROM student_grades 
									LEFT JOIN subjects_table
									ON subjects_table.subjectID = student_grades.subjectID
									WHERE student_grades.studentID ='.$id);
		$query = $query->row();
		if($query!=NULL)
			return ($query->semester);
		else
			return;
	}
}