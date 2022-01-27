<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventsModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

    function createData() {
        $data = array (
            'title' => $this->input->post('title'),
            'details' => $this->input->post('details'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'creatorID' => $this->session->userdata('auth_user')['adminID'],
            'status' => 1
        );
        $this->db->insert('events_announcements',$data);
    }
    
    function getAllData() {
        $query = $this->db->query('SELECT * FROM events_announcements ORDER BY `date` DESC');
        return $query->result();
    }

    function getData($eaID) {
        $query = $this->db->query('SELECT * FROM events_announcements WHERE `eaID` =' .$eaID);
        return $query->row();
    }
    function updateData($eaID) {
        $data = array (
            'title' => $this->input->post('title'),
            'details' => $this->input->post('details'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'creatorID' => $this->input->post('creatorID'),
            'status' => 1
        );
        $this->db->where('eaID',$eaID);
        $this->db->update('events_announcements',$data);
    }
    function deactivateData($eaID){
        $data = array (
            'status' => 0
        );
        $this->db->where('eaID',$eaID);
        $this->db->update('events_announcements',$data);
    }
    function activateData($eaID){
        $data = array (
            'status' => 1
        );
        $this->db->where('eaID',$eaID);
        $this->db->update('events_announcements',$data);
    }
}