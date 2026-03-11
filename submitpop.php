<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['name'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$pincode = $_POST['pincode'];
$bill = $_POST['bill'];

$to = "customersupport@corvelsolar.com";
$subject = "New Solar Enquiry";

$message = "Name: $name \n";
$message .= "Phone: $phone \n";
$message .= "Pincode: $pincode \n";
$message .= "Electricity Bill: $bill";

$headers = "From: customersupport@corvelsolar.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$result = mail($to,$subject,$message,$headers);
if(!$result){
    print_r(error_get_last());
}


}