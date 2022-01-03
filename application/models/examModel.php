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
			'status' => 1
		);
		$this->db->insert('exam_schedule',$data);
		unset($_POST);
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
			'schedID' => NULL,
			'date' => $_POST['date'],
			'time' => $_POST['time'],
			'building' => $_POST['building'],
			'room_no' => $_POST['room_no'],
			'floor_no' => $_POST['floor_no']
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