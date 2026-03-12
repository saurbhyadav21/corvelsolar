<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "SMTP: ".ini_get("SMTP")."<br>";
echo "SMTP PORT: ".ini_get("smtp_port")."<br>";
echo "sendmail_path: ".ini_get("sendmail_path");




$headers = "From: Corvel Solar <customersupport@corvelsolar.com>\r\n";
$headers .= "Reply-To: customersupport@corvelsolar.com\r\n";
$headers .= "Return-Path: customersupport@corvelsolar.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$to = "customersupport@corvelsolar.com";
$subject = "Test Mail";
$message = "This is test email from website.";

$headers = "From: customersupport@corvelsolar.com";

if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent";
}else{
    echo "Mail Failed";
}


?>