<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$bill = $_POST['bill'] ?? '';
$source = $_POST['source_url'] ?? '';

$mail = new PHPMailer(true);

try {

$mail->isSMTP();
$mail->Host       = 'smtp.hostinger.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'customersupport@corvelsolar.com';
    $mail->Password   = 'Support!@#12';  
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

$mail->setFrom('customersupport@corvelsolar.com','Corvel Solar');

$mail->addAddress('customersupport@corvelsolar.com');

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

$mail->send();

header("Location: thank-you.php");
exit();

} catch (Exception $e) {

echo "Mailer Error: ".$mail->ErrorInfo;

}

}

?>