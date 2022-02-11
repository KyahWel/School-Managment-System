<?php
defined('BASEPATH') || exit('No direct script access allowed');

class eventsController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('eventsModel');
    }
    public function create(){
        $this->eventsModel->createData();
        redirect("Admin/announcement");
    }
    public function view(){
        $eventData = $this->input->post('eventData');
        $records = $this->eventsModel->getData($eventData);
            $output = '
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="announcementTitle-view" class="form-label">Title</label>
                        <input type="text" class="form-control" id="announcementTitle-view" name="title" value="'.$records->title.'" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="announcementDate-view" class="form-label">Date</label>
                        <input type="date" class="form-control" id="announcementDate-view" name="date" value="'.$records->date.'" readonly>
                    </div>
                    <div class="col-6">
                        <label for="announcementTime-view" class="form-label">Time</label>
                        <input type="time" class="form-control" id="announcementTime-view" name="time" value="'.$records->time.'" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <!--Details-->
                        <label for="announcementDetails-view" class="form-label">Details</label>
                        <textarea class="form-control" name="details" id="announcementDetails-view" rows="5" cols="100" readonly>'.$records->details.'</textarea>
                    </div>
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
                        <label for="announcementTitle-edit" class="form-label">Title</label>
                        <input type="text" class="form-control" id="announcementTitle-edit" name="title" value="'.$records->title.'">
                    </div>
                    <div class="col-6"> <!--Creator ID-->
                        <label for="creatorID-edit" class="form-label">Creator ID</label>
                        <input type="text" class="form-control" id="creatorID-edit" name="creatorID" value="'.$records->creatorID.'">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6"> <!--Date-->
                        <label for="announcementDate-edit" class="form-label">Date</label>
                        <input type="date" class="form-control" id="announcementDate-edit" name="date" value="'.$records->date.'">
                    </div>
                    <div class="col-6"> <!--Time-->
                        <label for="announcementTime-edit" class="form-label">Time</label>
                        <input type="time" class="form-control" id="announcementTime-edit" name="time" value="'.$records->time.'">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <!--Details-->
                        <label for="announcementDetails-edit" class="form-label">Details</label>
                        <textarea class="form-control" name="details" id="announcementDetails-edit" rows="4">'.$records->details.'</textarea>
                    </div>
                </div> 
                <div class="editAnnouncementButton d-flex justify-content-end"> <!--Buttons-->
                    <button class="btn btn-default" id="saveEdit" type="submit" value="save">Save Changes</button>
                    <button class="btn btn-default" id="cancelEdit" type="button" data-bs-dismiss="modal">Cancel</button>
                </div>                                                                          
            </form>
        ';
        echo $output;
    }

	public function viewAnnouncement(){
		$eventData = $this->input->post('eventData');
        $records = $this->eventsModel->getData($eventData); 
		$output ='
		<div class="row">
			<div class="col mb-3">
			    <b>Title: </b>'.$records->title.'
			</div>
		</div>
        <div class="col  mb-3">
            <b>Date Posted: </b> '.$records->date.'
        </div>
		<div class="col  mb-3">
			<b>Time: </b> '.$records->time.'
		</div>
		<div class="col  mb-3">
			<b>Details: </b> <br>
			'.$records->details.'
		</div>';
		echo $output;
	}

    public function updateData($id){
        $data['row'] = $this->eventsModel->updateData($id);
        redirect("Admin/announcement");
    }
    public function deactivate($eaID){
        $this->eventsModel->deactivateData($eaID);
        redirect("Admin/announcement");
    }
    public function activate($eaID){
        $this->eventsModel->activateData($eaID);
        redirect("Admin/announcement");
    }
}