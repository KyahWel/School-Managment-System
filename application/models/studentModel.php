<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
		$digits = 4;
		$year = 19;
		do{
			$holder = "TUPM-".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('student_accounts');
			$this->db->where('studentNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);

		$data = array(
			'id' => NULL,
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'studentNumber' => $holder,
			'applicantID' => $_POST['applicantID'],
			'course' => $_POST['courseID'],
			'type' => $_POST['type'],
			'creatorID' => $_POST['creatorID'],
			'status' => 1
		);
		$this->db->insert('student_accounts',$data);
		unset($_POST);
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT student_accounts.id,student_accounts.studentNumber, applicant_details.firstname, applicant_details.lastname, student_accounts.status FROM student_accounts RIGHT JOIN applicant_details ON student_accounts.applicantID = applicant_details.id');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT * FROM student_accounts RIGHT JOIN applicant_details ON student_accounts.applicantID = applicant_details.id WHERE student_accounts.id ='.$id);
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
		$this->db->where('id',$id);
		$this->db->update('student_accounts',$data);
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('id',$id);
		$this->db->update('student_accounts',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('id',$id);
		$this->db->update('student_accounts',$data);
	}

}
