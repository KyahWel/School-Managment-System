<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SectionController extends CI_Controller {

	public function index()
	{
        $this->load->view('Admin_Panel/section');
	}
}
