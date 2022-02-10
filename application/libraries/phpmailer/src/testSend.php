<?php

// Include required PHPMailer Files
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';

// Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

// Create instance of phpmailer
    $mail = new PHPMailer();

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
    $email_template = 'emailtemplate.html';
    $message = file_get_contents($email_template);

// Email Attachment
    $mail -> addAttachment('');

// Add Recipient
    $mail -> addAddress("");

// Send Email
    $mail -> MsgHTML($message);
    if ( $mail -> Send() ) {
        echo "Email Sent!";
    } 
    else {
        echo "Email Failed.";
        $mail -> ErrorInfo;
    }
?>