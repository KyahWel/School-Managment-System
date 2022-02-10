<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sendEmail extends CI_Model {
    public function __construct(){	
        $this->load->library('phpmailer_lib');
	}
    public function send($file,$email,$applicantNumber){
       
        // Create instance of phpmailer
        $mail = $this->phpmailer_lib->load();

        // Set Mailer to use SMTP
        $mail -> isSMTP();

        // Define SMTP Host
        $mail -> Host = "smtp.gmail.com";

        // Enable SMTP Authentication
        $mail -> SMTPAuth = "true";

        // Set type of encryption (ssl/tls)
        $mail -> SMTPSecure = "tls";

        // Set Port to connect to STMP
        $mail -> Port = "587";

        // Set Email Credentials

        $mail -> Username = "TUPFormSender@gmail.com";
        $mail -> Password = "allstarz023";

        // Set Email Subject
        $mail -> Subject = "TUP Test Permit Delivery po";

        // Set Sender Email
        $mail -> setFrom("TUPFormSender@gmail.com", "TUP Form Sender");

        // Enable HTML
        $mail -> isHTML(true);

        // Email Body
        $email_template = base_url('application/third_party/emailtemplate.html');
        $message = file_get_contents($email_template);

        $mail->AddStringAttachment($file, $applicantNumber.'Test Permit.pdf');
     
        // Add Recipient
        $mail -> addAddress($email);

        // Send Email
        $mail -> MsgHTML($message);

        if(!$mail->send()){
            return 0;
        }else{
            return 1;
        }
    }
}


