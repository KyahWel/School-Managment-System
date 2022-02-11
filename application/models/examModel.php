<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class examModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

    public function insertData()
	{	
		$data = array(
			'schedID' => NULL,
			'date' => $_POST['date'],
			'time' => $_POST['time'],
			'building' => $_POST['building'],
			'room_no' => $_POST['room_no'],
            'floor_no' => $_POST['floor_no'],
			'capacity' => $_POST['capacity'],
			'status' => 1
		);
		$this->db->insert('exam_schedule',$data);
		unset($_POST);
	}

	public function applicantSched($id)
	{
		$queryApplicant = $this->db->query('SELECT * FROM applicant_accounts WHERE applicantID ='.$id);
		$queryApplicant = $queryApplicant->row();
		$queryBuilding = $this->db->query('SELECT * FROM course_table WHERE courseID ='.$queryApplicant->courseID);
		$queryBuilding = $queryBuilding->row();
		$querySched = $this->db->query('SELECT * FROM exam_schedule WHERE building ="'.$queryBuilding->college.'" AND capacity != 0 AND `status` != 0');
		$querySched = $querySched->row();
		if($querySched==NULL){
			$data = array(
				'examID' => NULL,
				'applicantID' => $id,
				'schedID' => NULL
			);
		}
		else{
			$data = array(
				'examID' => NULL,
				'applicantID' => $id,
				'schedID' => $querySched->schedID
			);
			$this->db->query(' UPDATE exam_schedule SET capacity = capacity-1 WHERE schedID='.$querySched->schedID);
		}
		
		$this->db->insert('examination_table',$data);
		
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM exam_schedule');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT * FROM exam_schedule WHERE exam_schedule.schedID ='.$id);
		return $query->row();
	}

	public function updateData($id)
	{
		$data = array(
			'date' => $_POST['date'],
			'time' => $_POST['time'],
			'room_no' => $_POST['room_no'],
			'floor_no' => $_POST['floor_no'],
			'capacity' => $_POST['capacity'],
		);
		$this->db->where('schedID',$id);
		$this->db->update('exam_schedule',$data);
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('schedID',$id);
		$this->db->update('exam_schedule',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('schedID',$id);
		$this->db->update('exam_schedule',$data);
	}
}