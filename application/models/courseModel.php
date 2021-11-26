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
			'totalUnits' => $_POST['totalUnits'],
			'status' => 1
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

	public function updateData($id)
	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'course' => $_POST['course']
			# Add Year Level
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('courseID',$id);
		$this->db->update('course_table',$data);
	}

}