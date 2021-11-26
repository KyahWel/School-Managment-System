<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
		$digits = 4;
		$year = 19;
		do{
			$holder = "PROF-TUPM-".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('teacher_accounts');
			$this->db->where('teacherNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);

		$data = array(
			'teacherID' => NULL,
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'teacherNumber' => $holder,
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'college' => $_POST['college'],
			'department' => $_POST['department'],
			'creatorID' => $_POST['creatorID'],
			'status' => 1
		);
		$this->db->insert('teacher_accounts',$data);
		unset($_POST);
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM teacher_accounts');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT admin_accounts.adminNumber, teacher_accounts.* FROM teacher_accounts RIGHT JOIN admin_accounts ON teacher_accounts.creatorID = admin_accounts.adminID WHERE teacher_accounts.teacherID ='.$id);
		return $query->row();
	}

	public function updateData($id)
	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'college' => $_POST['college'],
			'department' => $_POST['department']
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

}