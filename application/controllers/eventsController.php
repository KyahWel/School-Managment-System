<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventsController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('eventsModel');
    }
    public function create(){
        $this->eventsModel->createData();
        redirect("admincontroller/announcement");
    }
    public function view($eaID){
        $data['viewAnnouncement'] = $this->eventsModel->getData($eaID);
        $this->load->view('adminpanel/announcement',$data);
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