<?php
$to = "customersupport@corvelsolar.com";
$subject = "New Solar Enquiry";
$message = "New Solar Lead\n\n";

$headers = "From: customersupport@corvelsolar.com\r\n";
$headers .= "Reply-To: customersupport@corvelsolar.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";



if(mail($to,$subject,$message,$headers)){
    echo 'y';
}
else
    {
         echo 'n';
    }
?>