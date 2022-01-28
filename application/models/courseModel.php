<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class courseModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
	
		$data = array(
			'courseID' => NULL,
			'degree' => $_POST['degree'],
			'major' => $_POST['major'],
			'college' => $_POST['college'],
			'courseStatus' => 1
		);
		$this->db->insert('course_table',$data);
		unset($_POST);
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM course_table');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT * FROM course_table  WHERE course_table.courseID ='.$id);
		return $query->row();
	}

	public function getSubjects($id)
	{	
		$query = $this->db->query('SELECT * FROM subjects_table  WHERE subjects_table.courseID ='.$id);
		return $query->result_array();
	}

	public function updateData($id)
	{
		$data = array(
			'degree' => $_POST['degree'],
			'major' => $_POST['major'],
			'college' => $_POST['college'],
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

	public function deactivateData($id){
		$data = array(
			'courseStatus' => 0
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

	public function reactivateData($id){
		$data = array(
			'courseStatus' => 1
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

}
