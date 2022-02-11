<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotpass extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function verifyStudentUsername($username){
		$this->db->select('*');
		$this->db->from('student_accounts');
		$this->db->join('applicant_accounts','student_accounts.applicantID = applicant_accounts.applicantID','left');
		$this->db->where('studentNumber',$username);
		$query=$this->db->get();
		if($query->num_rows()>0){
			$query = $query->row();
			return $query->email;
		}
		else{
			return 0;
		}
	}

	public function verifyAdminUsername($username){
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where('adminNumber',$username);
		$query=$this->db->get();
		if($query->num_rows()>0){
			$query = $query->row();
			if($query->adminID==1){
				return 2;
			}
			else{
				return $query->email;	
			}
		}
		else{
			return 0;
		}
		
	}

	public function verifyFacultyUsername($username){
		$this->db->select('*');
		$this->db->from('teacher_accounts');
		$this->db->where('teacherNumber',$username);
		$query=$this->db->get();
		if($query->num_rows()>0){
			$query = $query->row();
			return $query->email;
		}
		else{
			return 0;
		}
	}

	public function changePassAdmin($username,$password){
		$newdata = array(
			'password' => password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->where('adminNumber',$username);
		$this->db->update('admin_accounts',$newdata);
		$this->session->set_flashdata('successForgotAdmin','Password changed successfully'); 
		
	}

	public function changePassStudent($username,$password){
		$newdata = array(
			'password' => password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->where('studentNumber',$username);
		$this->db->update('student_accounts',$newdata);
		$this->session->set_flashdata('successForgotStudent','Password changed successfully'); 
		
	}

	public function changePassFaculty($username,$password){
		$newdata = array(
			'password' => password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->where('teacherNumber',$username);
		$this->db->update('teacher_accounts',$newdata);
		$this->session->set_flashdata('successForgotFaculty','Password changed successfully'); 
	}

}