<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventsController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('eventsModel');
    }
    public function index(){
        $data['result'] = $this->eventsModel->getAllData();
		$this->load->view('events_mainView', $data);
	}
    public function add(){
        $this->load->view('eventsCrud/eventsAdd');
    }
    public function create(){
        $this->eventsModel->createData();
        redirect("eventsController");
    }
    public function view($eaID){
        $data['row'] = $this->eventsModel->getData($eaID);
        $this->load->view('eventsCRUD/eventsView',$data);
    }
    public function edit($eaID){
        $data['row'] = $this->eventsModel->getData($eaID);
        $this->load->view('eventsCRUD/eventsEdit',$data);
    }
    public function deactivate($eaID){
        $this->eventsModel->deactivateData($eaID);
        redirect('eventsController');
    }
    public function activate($eaID){
        $this->eventsModel->activateData($eaID);
        redirect('eventsController');
    }
}