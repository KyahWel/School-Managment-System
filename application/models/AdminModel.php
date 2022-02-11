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
		} while($query->num_rows()>0);
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where('username',$_POST['username']);
		$query=$this->db->get();	
		if($query->num_rows()==0){
			$data = array(
				'adminID' => NULL,
				'adminNumber' => $holder,
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'email' => $_POST['email'],
				'status' => 1
			);
			$this->db->insert('admin_accounts',$data);
			unset($_POST);
			$this->session->set_flashdata('successAdmin','Added admin account successfully'); 
			redirect('Admin/dashboard');	
		}else{
			$this->session->set_flashdata('adminError','User already exists'); 
			redirect('Admin/dashboard');
		}
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
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'email' => $_POST['email'],
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
		);
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where($data);
		$query=$this->db->get();
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
		if ($this->session->userdata('auth_user')['adminID'] == '1'){
			$this->session->set_flashdata('adminError','Error Cannot change the password of main admin'); 
			redirect('Admin/changePassword');	
		}
		else{
			if(password_verify($_POST['oldpass'],$this->session->userdata('auth_user')['password'])){
				$newPassword = $_POST['newpass'];
				$confirmPassword = $_POST['confirmpass'];
				if($newPassword==$this->session->userdata('auth_user')['password']){
					$this->session->set_flashdata('adminError','Old and New passwords are the same'); 
					redirect('Admin/changePassword');
				}
				else{
					if($newPassword==$confirmPassword){
						$newdata = array(
							'password' => password_hash($newPassword,PASSWORD_DEFAULT)
						);
						$this->db->where('adminID',$id);
						$this->db->update('admin_accounts',$newdata);
						$this->session->set_flashdata('successAdmin','Password changed successfully'); 
						redirect('Admin/dashboard');
					}
					else
						$this->session->set_flashdata('adminError','Passwords do not match, Please try again'); 
						redirect('Admin/changePassword');	
				}
			}
			else{
				$this->session->set_flashdata('adminError','Incorrect Old Password'); 
				redirect('Admin/changePassword');	
			} 	
		}	
		
	}
	
}
