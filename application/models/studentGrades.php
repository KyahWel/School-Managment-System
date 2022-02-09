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

	public function updateData($studentID,$teacherID)
	{
		$data = array(
			'grades' => $_POST['grade'],
		);
		$this->db->where('studentID',$studentID);
		$this->db->where('teacherID',$teacherID);
		$this->db->update('student_grades',$data);
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
				$total += ($query->grade * $query->units);
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