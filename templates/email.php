<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $sRoot.'plugins/PHPMailer/Exception.php';
require $sRoot.'plugins/PHPMailer/PHPMailer.php';
require $sRoot.'plugins/PHPMailer/SMTP.php';




function sendEmail($Subject, $Message){

  // fails silently if missing inputs, so as not to interrupt whatever process calls it
  if(!empty($To) and !empty($From) and !empty($Subject) and !empty($Message)){
    $smtp_host = 'smtp.gmail.com';
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    // 465 for ssl
    $smtp_port = 587;
    $smtp_usr = getenv("SMTP_USR");
    $smtp_pwd = getenv("SMTP_PWD");

    $mail = new PHPMailer();
    try{
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // 3 for extra details

        // $mail->Host = $smtp_host;
        // use
        $mail->Host = $smtp_host;
        // if your network does not support SMTP over IPv6

        $mail->Port = $smtp_port;
        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        $mail->CharSet   = "UTF-8";
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = $smtp_usr;

        //Password to use for SMTP authentication
        $mail->Password = $smtp_pwd;
        // Sender
        $mail->setFrom($smtp_usr, "Web Contact");
        
        // Recipient
        $mail->addAddress($smtp_usr);

      // -- Content
      $mail->isHTML(true);
      $mail->Subject = $Subject;
      $mail->Body = $Message;
      $mail->send();
      return true;
    }
    catch (Exception $exc) {
      return false;
    }
  }
}
?>