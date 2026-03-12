<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$bill = $_POST['bill'] ?? '';
$source = $_POST['source_url'] ?? '';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//Support!@#12
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'customersupport@corvelsolar.com';                     //SMTP username
    $mail->Password   = 'Support!@#12';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('customersupport@corvelsolar.com', 'Mailer');
    $mail->addAddress('customersupport@corvelsolar.com', 'Joe User');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "New Solar Lead";
   $message = "
        New Solar Enquiry

        Name: $name
        Phone: $phone
        Pincode: $pincode
        Electricity Bill: $bill
        Source URL: $source
        IP Address: ".$_SERVER['REMOTE_ADDR']."
        Date: ".date("Y-m-d H:i:s")."
        ";

        $mail->Body = $message;

    // header("Location: thank-you.php");
exit();

} catch (Exception $e) {
    echo "Mailer Error: ".$mail->ErrorInfo;
}