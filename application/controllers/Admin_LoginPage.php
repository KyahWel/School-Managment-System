<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_LoginPage extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_loginpage');
	}
}
