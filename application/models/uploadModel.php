<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploadModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


    public function upload_files(){
        $this->load->library('upload');
        
                /* for testing
                print_r($_FILES['medical_record']); 
                print_r("<br>");
                print_r($_FILES['form_137']);
                print_r("<br>");
                print_r($_FILES['good_moral']);
                print_r("<br>");
                */

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
                                'medical_record' => $mr_newimgname,
                                'form_137' => $f137_newimgname,
                                'good_moral' => $gm_newimgname
                            ); 
                            $this->db->insert('applicant_accounts',$data);

                            print_r("Successfully uploaded files");


                        } else {
                            print_r("File is not supported.");
                            $error = array('error' => $this->upload->display_errors());
                        }
                    } 
                } else {
                    print_r("Unknown error occured.");
                    $error = array('error' => $this->upload->display_errors());
                }
        
    }

    function getAllData(){
            $query = $this->db->query('SELECT * FROM applicant_accounts ');
            return $query->result();
    }
}