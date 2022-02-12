<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class courseModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
		$this->db->select('*');
		$this->db->from('course_table');
		$this->db->where('degree',$_POST['degree']);
		$this->db->where('major',$_POST['major']);
		$query=$this->db->get();
		if($query->num_rows()<=0){
			$data = array(
				'courseID' => NULL,
				'degree' => $_POST['degree'],
				'major' => $_POST['major'],
				'college' => $_POST['college'],
				'courseStatus' => 1
			);
			$this->db->insert('course_table',$data);
			$this->session->set_flashdata('successCourse','Added Course successfully'); 
			unset($_POST);
		}
		else{
			$this->session->set_flashdata('errorCourse','Error: Course already exists'); 
		}
		redirect('Admin/course');
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
		$this->session->set_flashdata('successCourse','Updated Course successfully'); 
		redirect('Admin/course');
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
