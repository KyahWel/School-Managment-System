<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GradesController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gradesModel');
	}

    public function index()
    {
        $this->load->view('gradesCRUD/mainGrades');
    }

    public function add()
    {
        
        $this->load->view('gradesCRUD/addGrades');
    }

    public function edit($id)
    {
        $data['class'] = $this->gradesModel->getClassData($id);
        $data['grades'] = $this->gradesModel->getGradesData($id);
        $data['student'] = $this->gradesModel->getStudentData($id);
        $this->load->view('gradesCRUD/editGrades',$data);
    }

    public function view($id)
    {
        $data['grades'] = $this->gradesModel->getStudentGrades($id);
        $this->load->view('gradesCRUD/viewGrades',$data);
    }

    public function insert($id)
    {
        $this->gradesModel->createData($id);
        echo "Successfully added";
        redirect("GradesController/addGrades");
    }
    public function update($id)
    {
        $this->gradesModel->updateData($id);
    }

    public function deactivate($id){
        $this->gradesModel->deactivateData($id);
        redirect("GradesController/addGrades");
    }
    public function activate($id){
        $this->gradesModel->activateData($id);
        redirect("GradesController/addGrades");
    }
    /*
    public function addGrades($teacherID)
    {
        $data['class'] = $this->gradesModel->getClassData($teacherID);
        $this->load->view('gradesCRUD/addGradesView', $data);
    }*/
}