<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassController extends CI_Controller {

	public function index()
	{
        $this->load->view('Admin_Panel/class');
	}
}
