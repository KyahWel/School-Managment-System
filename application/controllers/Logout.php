<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct() {
        parent:: __construct();

		$this->load->model('Authentication');
    }


	public function index(){
		// $this->session->unset_userdata('authenticated');
		// $this->session->unset_userdata('auth_user');
		// $this->session->set_flashdata('status',''); 
		$this->session->sess_destroy(); 
		redirect('Login');
	}
}
