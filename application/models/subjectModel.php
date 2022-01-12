<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subjectModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
	
		$data = array(
			'subjectID' => NULL,
			'courseID' => $_POST['courseID'],
			'yearlevel' => $_POST['yearlevel'],
			'semester' => $_POST['semester'],
			'subjectCode' => $_POST['subjectCode'],
			'name' => $_POST['name'],
			'units' => $_POST['units'],
			'status' => 1
		);
		$this->db->insert('subjects_table',$data);
		unset($_POST);
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM subjects_table');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT * FROM subjects_table  WHERE subjects_table.subjectID ='.$id);
		return $query->row();
	}

	public function updateData($id)
	{
		$data = array(
			'degree' => $_POST['degree'],
			'major' => $_POST['major'],
			'college' => $_POST['college'],
		);
		$this->db->where('subjectID',$id);
		$this->db->update('subjects_table',$data);
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('subjectID',$id);
		$this->db->update('subjects_table',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('subjectID',$id);
		$this->db->update('subjects_table',$data);
	}

}