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

    public function sendkey($key,$email){
       
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
        $mail -> Subject = "Forgot Password";

        // Set Sender Email
        $mail -> setFrom("TUPFormSender@gmail.com", "TUP Form Sender");

        // Enable HTML
        $mail -> isHTML(true);

        // Email Body
        $email_template = base_url("application/third_party/forgotpasstemplate.php");
        $message = file_get_contents($email_template);
        $message .= '
            <table border="0" cellpadding="0" cellspacing="0"
            class="heading_block" role="presentation"
            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
            width="100%">
            <tr>
                <td style="width:100%;text-align:center;">
                    <h1
                        style="margin: 0; color: #555555; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
                        <strong>'.$key.'</strong></h1>
                </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0"
                class="text_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                width="100%">
                <tr>
                    <td>
                        <div style="font-family: sans-serif">
                            <div
                                style="font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
                                <p
                                    style="margin: 0; font-size: 14px; text-align: center;">
                                    Please enter the key shown above to continue resetting your password.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0"
                class="divider_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                width="100%">
                <tr>
                    <td>
                        <div align="center">
                            <table border="0" cellpadding="0" cellspacing="0"
                                role="presentation"
                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                width="100%">
                                <tr>
                                    <td class="divider_inner"
                                        style="font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;">
                                        <span> </span></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0"
                class="heading_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                width="100%">
                <tr>
                    <td style="width:100%;text-align:center;">
                        <h2
                            style="margin: 0; color: #555555; font-size: 18px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;">
                            <strong>Social Links</strong></h2>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="5" cellspacing="0"
                class="social_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                width="100%">
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0"
                            cellspacing="0" class="social-table"
                            role="presentation"
                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                            width="36px">
                            <tr>
                                <td style="padding:0 2px 0 2px;"><a
                                        href="https://www.facebook.com/TUPian"
                                        target="_blank"><img alt="Facebook"
                                            height="32"
                                            src="https://i.imgur.com/L719NNh.png"
                                            style="display: block; height: auto; border: 0;"
                                            title="Facebook" width="32" /></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="5" cellspacing="0" class="text_block"
                role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                width="100%">
                <tr>
                    <td>
                        <div style="font-family: sans-serif">
                            <div
                                style="font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
                                <p
                                    style="margin: 0; font-size: 14px; text-align: center;">
                                    Technological University of the Philippines
                                    - Official Page</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0"
                class="divider_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                width="100%">
                <tr>
                    <td>
                        <div align="center">
                            <table border="0" cellpadding="0" cellspacing="0"
                                role="presentation"
                                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                width="100%">
                                <tr>
                                    <td class="divider_inner"
                                        style="font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;">
                                        <span> </span></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3"
        role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
        <tbody>
        <tr>
        <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0"
        class="row-content stack" role="presentation"
        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 590px;"
        width="590">
        <tbody>
        <tr>
        <td class="column"
            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
            width="100%">
            <table border="0" cellpadding="0" cellspacing="0"
                class="icons_block" role="presentation"
                style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                width="100%">
                <tr>
                    <td
                        style="color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;">
                        <table cellpadding="0" cellspacing="0"
                            role="presentation"
                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                            width="100%">
                            <tr>
                                <td style="text-align:center;">
                                    <!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                                    <!--[if !vml]><!-->
                                    <table cellpadding="0" cellspacing="0"
                                        class="icons-inner" role="presentation"
                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
                                        <!--<![endif]-->
                                        <tr>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table><!-- End -->
        </body>
        </html>';

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


