

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['name'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$pincode = $_POST['pincode'];
$bill = $_POST['bill'];

$mail = new PHPMailer(true);
//Support!@#12
try {

$mail->isSMTP();
$mail->Host       = 'smtp.hostinger.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'customersupport@corvelsolar.com';
$mail->Password   = 'Support!@#12';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

$mail->setFrom('customersupport@corvelsolar.com', 'Corvel Solar');
$mail->addAddress('customersupport@corvelsolar.com');

$mail->Subject = 'New Solar Enquiry';

$mail->Body = "xxx";

$mail->send();

header("Location: thank-you.php");
exit();

} catch (Exception $e) {

echo "Mailer Error: " . $mail->ErrorInfo;

}

}

?>