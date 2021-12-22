<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventsController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('eventsModel');
    }
    public function create($id){
        $this->eventsModel->createData($id);
        redirect("admincontroller/announcement");
    }
    public function view(){
        $eventData = $this->input->post('eventData');
        $records = $this->eventsModel->getData($eventData);
            $output = '
                <div class="row mb-3">
                <div class="col">
                    <label>Title: </label> '
                    .$records->title.
                '</div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label>Date: </label> '
                        .$records->date.
                    '</div>
                    <div class="col-6">
                        <label>Time: </label> '
                        .$records->time.
                    '</div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label>Details:</label> '
                        .$records->details.
                    '</div>
                </div> 
            ';
        echo $output;
    }
    
    public function edit(){
        $eventData = $this->input->post('id');
        $records = $this->eventsModel->getData($eventData);
        $output='
            <form method="POST" action="../eventsController/updateData/'.$records->eaID.'" id="addAnnouncementForm">
                <div class="row mb-3">
                    <div class="col-6"> <!--Title-->
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="'.$records->title.'">
                    </div>
                      <div class="col-6"> <!--Creator ID-->
                          <label class="form-label">Creator ID</label>
                          <input type="text" class="form-control" name="creatorID" value="'.$records->creatorID.'">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-6"> <!--Date-->
                          <label class="form-label">Date</label>
                          <input type="date" class="form-control" name="date" value="'.$records->date.'">
                      </div>
                      <div class="col-6"> <!--Time-->
                          <label class="form-label">Time</label>
                          <input type="time" class="form-control" name="time" value="'.$records->time.'">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col"> <!--Details-->
                          <label class="form-label">Details</label>
                          <textarea class="form-control" name="details" rows="4">'.$records->details.'</textarea>
                      </div>
                  </div> 
                  <div class="editAnnouncementButton d-flex justify-content-end"> <!--Buttons-->
                    <button class="btn btn-default" id="save" type="submit" value="save">Save Changes</button>
                    <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                  </div>                                                                          
            </form>
        ';
        echo $output;
    }

    public function updateData($id){
        $data['row'] = $this->eventsModel->updateData($id);
        redirect("admincontroller/announcement");
    }
    public function deactivate($eaID){
        $this->eventsModel->deactivateData($eaID);
        redirect("admincontroller/announcement");
    }
    public function activate($eaID){
        $this->eventsModel->activateData($eaID);
        redirect("admincontroller/announcement");
    }
}