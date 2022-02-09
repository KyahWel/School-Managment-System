<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class sectionModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData() #Create
	{	
		$this->db->select('*');
		$this->db->from('section_table');
		$this->db->where('sectionName',$_POST['sectionName']);
		$query=$this->db->get();	
		if($query->num_rows()==0){
			$data = array(
				'sectionID' => NULL,
				'sectionName' => $_POST['sectionName'],
				'class_code' => $_POST['classID'],
				'courseID' => $_POST['courseID'],
				'schoolyear' => $_POST['schoolyear'],
				'capacity' => $_POST['capacity'],
				'studCount' => 0,
				'yearlevel' => $_POST['yearlevel'],
			);
			$this->db->insert('section_table',$data);
			$query=$this->db->query('SELECT * FROM class WHERE class_code = "'.$_POST['classID'].'"');	
			$query = $query->row();
			$classdata = array(
				'isTaken' => 1,
			);
			$this->db->where('class_code',$query->class_code);
			$this->db->update('class',$classdata);
			unset($_POST);
			$this->session->set_flashdata('successAdmin','Added section successfully'); 
		
		}else{
			$this->session->set_flashdata('adminError','Section already exists'); 
			redirect('Admin/section');
		}
	}

	public function viewData() #Read
	{
		$query = $this->db->query('SELECT * FROM section_table JOIN class ON class.class_code = section_table.class_code JOIN course_table ON class.courseID = course_table.courseID GROUP BY class.class_code');
		return $query->result();
	}

	public function addStudents($id,$sectionID,$count){
		$data = array(
			'sectionID' => $sectionID
		);
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
		$dataB = array(
			'studCount' => $count
		);
		$this->db->where('sectionID',$sectionID);
		$this->db->update('section_table',$dataB);
	}	

	public function addStudentGrades($id){

		// Get Student Section
		$queryStudent = $this->db->query(' SELECT * from student_accounts WHERE studentID ='.$id);
		$queryStudent = $queryStudent->row();

		// Get specific section
		$querySection = $this->db->query(' SELECT * from section_table WHERE sectionID = '.$queryStudent->sectionID);
		$querySection = $querySection->row();

		// Get Class
		$queryClass = $this->db->query(' SELECT * from class WHERE class_code ="'.$querySection->class_code.'"');
		$queryClass = $queryClass->result();

		foreach($queryClass as $queryClass){
			$data = array(
				'studentGradesID' => NULL,
				'studentID' => $queryStudent->studentID,
				'teacherID' => $queryClass->teacherID,
				'subjectID' => $queryClass->subjectID,
				'schoolyear' => $querySection->schoolyear,
				'class_code' => $queryClass->class_code,
				'grade' => 0,
			);
			$this->db->insert('student_grades',$data);
		}
	}	


	public function viewSectionList($courseID,$yearlevel) #Read
	{
		$query = $this->db->query('SELECT * FROM section_table WHERE courseID ='.$courseID.' AND yearlevel ='.$yearlevel );
		return $query->result_array();
	}

	public function yearlevelBasedSection($id) #Read
	{
		$query = $this->db->query('SELECT * FROM section_table WHERE yearlevel ='.$id );
		return $query->result_array();
	}

	public function courseBasedSection($id) #Read
	{
		$query = $this->db->query('SELECT * FROM section_table WHERE courseID ='.$id );
		return $query->result_array();
	}


	public function getData($id) #Edit
	{
		$query = $this->db->query('	SELECT * FROM section_table 
									JOIN class ON class.class_code = section_table.class_code
									JOIN course_table ON class.courseID = course_table.courseID
									WHERE `sectionID` ='.$id) ;
		return $query->row();
	}

	public function getDataName($id) #Edit
	{	
		$this->db->select('*');
		$this->db->from('section_table');
		$this->db->where('sectionName',$id);
		$query=$this->db->get();	
		$query = $query->row();
		// $query = $this->db->query('SELECT * FROM section_table WHERE sectionName = '.$this->db->escape($id)) ;
		return $query->sectionID ;
	}

	public function updateData($id) #Edit
	{
		$data = array(
			
		);
		$this->db->where('adminID',$id);
		$this->db->update('admin_accounts',$data);
	}

}
