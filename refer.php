<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$friend_name = $_POST['friend_name'] ?? '';
$friend_mobile = $_POST['friend_mobile'] ?? '';

$mail = new PHPMailer(true);

try{

$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'customersupport@corvelsolar.com';                     //SMTP username
    $mail->Password   = 'Support!@#12';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;     

$mail->setFrom('customersupport@corvelsolar.com','Corvel Solar');

$mail->addAddress('customersupport@corvelsolar.com');

$mail->Subject = "New Referral Lead";

$message = "New Referral Lead\n\n";
$message .= "Your Name: $name\n";
$message .= "Your Phone: $phone\n\n";
$message .= "Friend Name: $friend_name\n";
$message .= "Friend Phone: $friend_mobile\n\n";
$message .= "IP Address: ".$_SERVER['REMOTE_ADDR']."\n";
$message .= "Date: ".date("Y-m-d H:i:s")."\n";

$mail->Body = $message;

$mail->send();

header("Location: thank-you.php");
exit();

}catch(Exception $e){

echo "Mailer Error: ".$mail->ErrorInfo;

}

}


?>