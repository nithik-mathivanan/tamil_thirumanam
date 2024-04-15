<?php

session_start();

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])) {
    // Retrieve form data
    echo "Entering successfully.";
    $fname = $_POST['name'];
    //$cname = $_POST['cname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP server settings
        $mail->isSMTP();
        $mail->Host = 'sg2plcpnl0098.prod.sin2.secureserver.net';
        //$mail->SMTPAuth = true;
        $mail->Username = 'test@TamilThirumanam.com'; // Your Office 365 email
        $mail->Password = 'Testmail@Tamil21'; // Your Office 365 password
              
        $mail->SMTPSecure = 'TLS';
        $mail->Port = 587;
      
        $mail->setFrom($email, $fname);
        $mail->addAddress('test@purplesofts.com');
        
        $email_message = "Name: $fname\n";
        $email_message .= "Country: $cname\n";
        $email_message .="Phone: $phone\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Message:\n$message";
        
        $subject ="Contact form from WEBSITE";
        // Email content
        //$mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $email_message;

        
        // Send email
        $mail->send();
        echo "Email sent successfully.";
        $_SESSION['c_submitted'] = 'c_submitted';
        header("Location: contact_form");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>