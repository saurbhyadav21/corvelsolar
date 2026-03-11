<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);




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
        echo "Mail Failed<br>";
    var_dump(error_get_last());
    }
?>