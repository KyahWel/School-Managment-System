<?php

class uploadController extends CI_Controller {
        public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url','file'));
                $this->load->model('uploadModel');
        }

        public function index(){
            
                $this->load->view('upload_form');
                if (isset($_POST['submit']) && (isset($_FILES['medical_record']) && (isset($_FILES['form_137']) && isset($_FILES['form_137'])) )){
                    $this->uploadModel->upload_files();
                }
        }
        
        public function view(){
            $data['result'] = $this->uploadModel->getAllData();
		    $this->load->view('upload_success', $data);
        }
        
}
?>