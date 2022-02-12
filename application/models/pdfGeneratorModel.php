<?php
defined('BASEPATH') || exit('No direct script access allowed');

class pdfGeneratorModel extends CI_Model {

	public function __construct()
    {
		$this->load->database();
	}

    public function generateTestPermit($id)
    {
        //get applicant data from applicant_accounts
        $this->db->select('*');
        $this->db->from('applicant_accounts');
        $this->db->join('course_table',"course_table.courseID = applicant_accounts.courseID", 'left');
        $this->db->where('applicant_accounts.applicantID = ' . $id);
        $query=$this->db->get();
        $applicant=$query->row();

        $applicant_number = $applicant->applicantNumber;
        $applicant_name = $applicant->firstname . " " . $applicant->middlename . " " . $applicant->lastname;
       
         //get exam schedule details
         $this->db->select('*');
         $this->db->from('examination_table');
         $this->db->join('exam_schedule',"examination_table.schedID = exam_schedule.schedID", 'left');
         $this->db->where('applicantID = '.$id);
         $query=$this->db->get();
         $exam=$query->row();


        if($exam != NULL){

            $examination_date = date("F j, Y",strtotime($exam->date));
            $examination_time = date("h:i:s a",strtotime($exam->time));
            $building = $exam->building;
            $room = $exam->room_no;
            $exam_date = $examination_date . " at ". $examination_time;
            $location = $building . " -  " . $room;
        }
        else{
            $examination_date = "To be updated";
            $examination_time =  "To be updated";
            $building =  "To be updated";
            $room =  "To be updated";
            $exam_date =  "To be updated";
            $location =  "To be updated";
        }

        $pdf = new FPDF();
        $pdf->AddPage();
        
        /* HEADER */
        $pdf->Image("./assets/images/logo.png",15,1,23,23);
        $pdf->SetFont("Helvetica","B",11);
        $pdf->Text(90,5,"Republic of the Philippines");
        $pdf->SetFont("Helvetica","B",12);
        $pdf->Text(60,10,"Technological University of the Philippines Manila");
        $pdf->SetFont("Helvetica","B",11);
        $pdf->Text(91.5,15,"OFFICE OF ADMISSIONS");
        $pdf->Text(107.5,20,"Manila");
        $pdf->SetFont("Helvetica","B",13);
        $pdf->Text(90,30,"EXAMINATION PERMIT");

        /* BASIC APPLICANT INFORMATION */
        
        $pdf->SetFont("Helvetica","",11);
        $pdf->Rect(160,45,30,30);
        $pdf->Text(15,50,"Applicant No.");
        $pdf->Text(60,50,":  " . $applicant_number);
        $pdf->Text(15,55,"Applicant Name");
        $pdf->Text(60,55,":  " . $applicant_name);
        $pdf->Text(15,60,"Course Chosen ");
        $pdf->Text(60,60,":  ".$applicant->degree." ".$applicant->major );
        $pdf->Text(15,65,"Date/Time of Examination");
        $pdf->Text(60,65,":  " . $exam_date);
        $pdf->Text(15,70,"Building and Room ");
        $pdf->Text(60,70,":  " . $location);
        $pdf->Rect(35,90,135,15);
        $pdf->Text(172.5,55,"ID");
        $pdf->Text(167.5,60,"PICTURE");
        $pdf->Text(170,65,"HERE");
        $pdf->Text(40,95,"This is to certify that the above mentioned applicant is allowed to take the");
        $pdf->Text(40,100,"TUP Scholastic and Technical Aptitude Test (TUPSTAT) at TUP - Manila. ");
        
        $pdf->Text(80,110,"This is a sample permit.");
        $pdf->Output($applicant_number.' Test Permit.pdf','d');
    }

    public function attachTestPermit($id)
    {
        //get applicant data from applicant_accounts
        $this->db->select('*');
        $this->db->from('applicant_accounts');
        $this->db->join('course_table',"course_table.courseID = applicant_accounts.courseID", 'left');
        $this->db->where('applicant_accounts.applicantID = ' . $id);
        $query=$this->db->get();
        $applicant=$query->row();

        $applicant_number = $applicant->applicantNumber;
        $applicant_name = $applicant->firstname . " " . $applicant->middlename . " " . $applicant->lastname;
       
         //get exam schedule details
         $this->db->select('*');
         $this->db->from('examination_table');
         $this->db->join('exam_schedule',"examination_table.schedID = exam_schedule.schedID", 'left');
         $this->db->where('applicantID = '.$id);
         $query=$this->db->get();
         $exam=$query->row();


        if($exam != NULL){

            $examination_date = date("F j, Y",strtotime($exam->date));
            $examination_time = date("h:i:s a",strtotime($exam->time));
            $building = $exam->building;
            $room = $exam->room_no;
            $exam_date = $examination_date . " at ". $examination_time;
            $location = $building . " -  " . $room;
        }
        else{
            $examination_date = "To be updated";
            $examination_time =  "To be updated";
            $building =  "To be updated";
            $room =  "To be updated";
            $exam_date =  "To be updated";
            $location =  "To be updated";
        }

        $pdf = new FPDF();
        $pdf->AddPage();
        
        /* HEADER */
        $pdf->Image("./assets/images/logo.png",15,1,23,23);
        $pdf->SetFont("Helvetica","B",11);
        $pdf->Text(90,5,"Republic of the Philippines");
        $pdf->SetFont("Helvetica","B",12);
        $pdf->Text(60,10,"Technological University of the Philippines Manila");
        $pdf->SetFont("Helvetica","B",11);
        $pdf->Text(91.5,15,"OFFICE OF ADMISSIONS");
        $pdf->Text(107.5,20,"Manila");
        $pdf->SetFont("Helvetica","B",13);
        $pdf->Text(90,30,"EXAMINATION PERMIT");

        /* BASIC APPLICANT INFORMATION */
        
        $pdf->SetFont("Helvetica","",11);
        $pdf->Rect(160,45,30,30);
        $pdf->Text(15,50,"Applicant No.");
        $pdf->Text(60,50,":  " . $applicant_number);
        $pdf->Text(15,55,"Applicant Name");
        $pdf->Text(60,55,":  " . $applicant_name);
        $pdf->Text(15,60,"Course Chosen ");
        $pdf->Text(60,60,":  ".$applicant->degree." ".$applicant->major );
        $pdf->Text(15,65,"Date/Time of Examination");
        $pdf->Text(60,65,":  " . $exam_date);
        $pdf->Text(15,70,"Building and Room ");
        $pdf->Text(60,70,":  " . $location);
        $pdf->Rect(35,90,135,15);
        $pdf->Text(172.5,55,"ID");
        $pdf->Text(167.5,60,"PICTURE");
        $pdf->Text(170,65,"HERE");
        $pdf->Text(40,95,"This is to certify that the above mentioned applicant is allowed to take the");
        $pdf->Text(40,100,"TUP Scholastic and Technical Aptitude Test (TUPSTAT) at TUP - Manila. ");
        
        $pdf->Text(80,110,"This is a sample permit.");
        return $pdf->Output($applicant_number.' Test Permit.pdf','S');
    }

}