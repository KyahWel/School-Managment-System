<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData() #Create
	{	
		$digits = 4;
		do{
			$holder = "TUP-ADMIN-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('admin_accounts');
			$this->db->where('adminNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);
			
		$data = array(
			'adminID' => NULL,
			'adminNumber' => $holder,
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'status' => 1
		);
		$this->db->insert('admin_accounts',$data);
		unset($_POST);
	}

	public function viewData() #Read
	{
		$query = $this->db->query('SELECT * FROM admin_accounts');
		return $query->result();
	}

	public function getData($id) #Edit
	{
		$query = $this->db->query('SELECT * FROM admin_accounts WHERE `adminID` ='.$id) ;
		return $query->row();
	}

	public function updateData($id) #Edit
	{
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname']
		);
		$this->db->where('adminID',$id);
		$this->db->update('admin_accounts',$data);
	}

	public function deactivateData($id){ #Delete/Status
		$data = array(
			'status' => 0
		);
		$this->db->where('adminID',$id);
		$this->db->update('admin_accounts',$data);
	}

	public function reactivateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('adminID',$id);
		$this->db->update('admin_accounts',$data);
	}

	public function login(){
		$data = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);
		
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where($data);
		$query=$this->db->get();
		if($query->num_rows()!=0)
			return $query->row();
		else 
			return NULL;
	}

	public function changePassword($id) #Changepassword
	{	
		$data = array(
			'adminID' => $id,
			'password' => $_POST['oldpass']
		);
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where($data);
		$query=$this->db->get();
		if($query->num_rows()!=0){
			$newPassword = $_POST['newpass'];
			$confirmPassword = $_POST['confirmpass'];
			if($newPassword==$confirmPassword){
				$newdata = array(
					'password' => $newPassword,
				);
				$this->db->where('adminID',$id);
				$this->db->update('admin_accounts',$newdata);
			}
			else
				return NULL;
		}
		else 
			return NULL;
		
	}
}
