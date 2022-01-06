<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData()
	{	
		$digits = 4;
		$year = 21;
		do{
			$holder = "TUPM-".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('student_accounts');
			$this->db->where('studentNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);
		$data = array(
			'studentID' => NULL,
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'studentNumber' => $holder,
			'applicantID' => $_POST['applicantID'],
			'type' => $_POST['type'],
			'creatorID' => $_POST['creatorID'],
			'status' => 1
		);
		$this->db->insert('student_accounts',$data);
		unset($_POST);
	}

	public function viewData()
	{
		$query = $this->db->query('SELECT * FROM student_accounts LEFT JOIN applicant_accounts ON student_accounts.applicantID = applicant_accounts.applicantID');
		return $query->result();
	}

	public function getData($id)
	{	
		$query = $this->db->query('SELECT * FROM student_accounts LEFT JOIN applicant_accounts ON student_accounts.applicantID = applicant_accounts.applicantID WHERE student_accounts.studentID ='.$id);
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
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
	}

	public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('studentID',$id);
		$this->db->update('student_accounts',$data);
	}

	public function login(){
		$data = array(
			'username' => $_POST['username']
		);	
		$this->db->select('*');
		$this->db->from('student_accounts');
		$this->db->join('applicant_accounts','student_accounts.applicantID = applicant_accounts.applicantID','left');
		$this->db->where($data);
		$query= $this->db->get();
		if($query->num_rows()!=0){
			$row = $query->row();
			if(password_verify($_POST['password'],$row->password))
				return $query->row();
			else
				return NULL;
		}	
		else 
			return NULL;
	}

	public function changePassword($id) #Changepassword
	{	
			$data = array(
				'studentID' => $id,
				'password' => $_POST['oldpass']
			);
			$this->db->select('*');
			$this->db->from('student_accounts');
			$this->db->where($data);
			$query=$this->db->get();
			if($query->num_rows()!=0){
				$newPassword = $_POST['newpass'];
				$confirmPassword = $_POST['confirmpass'];
				if($newPassword==$data['password']){
					$this->session->set_flashdata('status','Old and New passwords are the same'); 
					redirect('Student/changePassword');
				}
				else{
					if($newPassword==$confirmPassword){
						$newdata = array(
							'password' => password_hash($newPassword,PASSWORD_DEFAULT),
						);
						$this->db->where('studentID',$id);
						$this->db->update('student_accounts',$newdata);
						$this->session->set_flashdata('success','Password changed successfully'); 
						redirect('Student/Dashboard');
					}
					else
						$this->session->set_flashdata('status','Passwords do not match, Please try again'); 
						redirect('Student/changePassword');	
				}
			}
			else{
				$this->session->set_flashdata('status','Incorrect Old Password'); 
				redirect('Student/changePassword');	
			} 	
		}	
		
}
