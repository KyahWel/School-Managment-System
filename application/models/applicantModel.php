<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class applicantModel extends CI_Model {

	public function __construct(){	
		$this->load->database();
	}

	public function insertData() #Create
	{	
		$this->load->library('upload');
		$digits = 4;
		$year = 22;
		do{
			$holder = "TUPM-APPL".$year."-".rand(pow(10, $digits-1), pow(10, $digits)-1);
			$this->db->select('*');
			$this->db->from('applicant_accounts');
			$this->db->where('applicantNumber',$holder);
			$query=$this->db->get();
		}while($query->num_rows()>0);
		$max_size = 1250000;

                $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                                .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                                .'0123456789'); 
                shuffle($seed);
                $rand = '';
                foreach (array_rand($seed, 8) as $k) $rand .= $seed[$k];

                $mr_name = $_FILES['medical_record']['name'];
                $mr_size = $_FILES['medical_record']['size'];
                $mr_tmp = $_FILES['medical_record']['tmp_name'];
                $mr_error = $_FILES['medical_record']['error'];  
                
                $f137_name = $_FILES['form_137']['name'];
                $f137_size = $_FILES['form_137']['size'];
                $f137_tmp = $_FILES['form_137']['tmp_name'];
                $f137_error = $_FILES['form_137']['error'];

                $gm_name = $_FILES['good_moral']['name'];
                $gm_size = $_FILES['good_moral']['size'];
                $gm_tmp = $_FILES['good_moral']['tmp_name'];
                $gm_error = $_FILES['good_moral']['error'];

                if( (($mr_error && $f137_error) && $gm_error) == 0){
                    if((($mr_error > $max_size  && $f137_error > $max_size) && $gm_error > $max_size) ) {
                        print_r("File is too large.");
                        $error = array('error' => $this->upload->display_errors());
                    } 
                    else {
                        $mr_extension = pathinfo($mr_name, PATHINFO_EXTENSION);
                        $mr_extension_lower = strtolower($mr_extension);

                        $f137_extension = pathinfo($f137_name, PATHINFO_EXTENSION);
                        $f137_extension_lower = strtolower($f137_extension);

                        $gm_extension = pathinfo($gm_name, PATHINFO_EXTENSION);
                        $gm_extension_lower = strtolower($gm_extension);
            
                        $allowed_exs = array("jpg","jpeg","png");

                        if((in_array($mr_extension_lower, $allowed_exs) && in_array($f137_extension_lower, $allowed_exs) ) && in_array($gm_extension_lower, $allowed_exs)) {

                            $mr_newimgname = 'MR-'.$rand.'.'.$mr_extension_lower;
                            $mr_uploadpath = './application/uploads/'.$mr_newimgname;
                            move_uploaded_file($mr_tmp, $mr_uploadpath);

                            $f137_newimgname = 'F137-'.$rand.'.'.$mr_extension_lower;
                            $f137_uploadpath = './application/uploads/'.$f137_newimgname;
                            move_uploaded_file($f137_tmp, $f137_uploadpath);

                            $gm_newimgname = 'GM-'.$rand.'.'.$gm_extension_lower;
                            $gm_uploadpath = './application/uploads/'.$gm_newimgname;
                            move_uploaded_file($gm_tmp, $gm_uploadpath);

                            $data = array(
								'applicantID' => NULL,
								'applicantNumber' => $holder,
								'courseID' => $_POST['course_chosen'],
								'firstname' => $_POST['firstname'],
								'middlename' => $_POST['middlename'],
								'lastname' => $_POST['lastname'],
								'extname' => $_POST['extname'],
								'LRN' => $_POST['LRN'],
								'gender' => $_POST['gender'],
								'age' => $_POST['age'],
								'birthday' => $_POST['birthday'],
								'birthplace' => $_POST['birthplace'],
								'contactnum' => $_POST['contactnum'],
								'landline' => $_POST['landline'],
								'email' => $_POST['email'],
								'unit' => $_POST['unit'],
								'street' => $_POST['street'],
								'barangay' => $_POST['barangay'],
								'city' => $_POST['city'],
								'province' => $_POST['province'],
								'zipcode' => $_POST['zipcode'],
								'last_school_attended' => $_POST['school'],
								'track' => $_POST['track'],
								'school_address' => $_POST['school_address'],
								'year_level' => $_POST['year_level'],
								'year_graduated' => $_POST['year_graduated'],
								'category' => $_POST['category'],
								'gpa' => $_POST['gpa'],
								'applicant_result' => "Applied",
                                'medical_record' => $mr_newimgname,
                                'form_137' => $f137_newimgname,
                                'good_moral' => $gm_newimgname
                            ); 
							$this->db->insert('applicant_accounts',$data);
							unset($_POST);
                        } 
                    } 
                } 
	}
	
	public function viewData() #Read
	{
		$query = $this->db->query('	SELECT * FROM applicant_accounts 
									LEFT JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID');
		return $query->result();
	}

	public function viewAppliedData($fname,$lname) #Read
	{
		$query = $this->db->query('	SELECT * FROM applicant_accounts 
									LEFT JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID
									WHERE applicant_accounts.firstname= "'.$fname.'" AND applicant_accounts.lastname="'.$lname.'"');
		return $query->row();
	}

	public function getData($id)
	{	
		$query = $this->db->query('	SELECT * FROM applicant_accounts 
									LEFT JOIN course_table 
									ON applicant_accounts.courseID = course_table.courseID 
									WHERE applicant_accounts.applicantID ='.$id);
		return $query->row();
	}

	public function updateData($id)
	{
		$data = array(
			'applicant_result' =>  $_POST['result']
		);
		$this->db->where('applicantID',$id);
		$this->db->update('applicant_accounts',$data);
	}

	public function login(){
		$data = array(
			'applicantNumber' => $_POST['username']
		);
		
		$this->db->select('*');
		$this->db->from('applicant_accounts');
		$this->db->where($data);
		$query=$this->db->get();
		if($query->num_rows()!=0)
			return $query->row();
		else 
			return NULL;
	}	


}
