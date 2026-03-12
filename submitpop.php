<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$to = "customersupport@corvelsolar.com";

$subject = "Hostinger Mail Test";

$message = "Testing email from server";

$headers = "From: customersupport@corvelsolar.com\r\n";

$result = mail($to,$subject,$message,$headers);

var_dump($result);

?>