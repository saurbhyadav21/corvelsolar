<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "SMTP: ".ini_get("SMTP")."<br>";
echo "SMTP PORT: ".ini_get("smtp_port")."<br>";
echo "sendmail_path: ".ini_get("sendmail_path");


$to = "customersupport@corvelsolar.com";
$subject = "Test Mail";

$message = "Testing mail from website";

$headers  = "From: Corvel Solar <customersupport@corvelsolar.com>\r\n";
$headers .= "Reply-To: customersupport@corvelsolar.com\r\n";

if(mail($to,$subject,$message,$headers)){
    echo "Mail sent";
}else{
    echo "Mail failed";
}

?>