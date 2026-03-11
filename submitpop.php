<?php

// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $pincode = $_POST['pincode'];
// $bill = $_POST['bill'];

// $to = "customersupport@corvelsolar.com";
// $subject = "New Solar Enquiry";

// $message = "
// Name: $name
// Phone: $phone
// Pincode: $pincode
// Electricity Bill: $bill
// ";

// $headers = "From: customersupport@corvelsolar.com";

// mail($to,$subject,$message,$headers);

// header("Location: thank-you.php");
// exit();





?>


<?php

$to = "customersupport@corvelsolar.com";
$subject = "Mail Test";
$message = "Testing PHP mail function";
$headers = "From: customersupport@corvelsolar.com";

if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent Successfully";
}else{
    echo "Mail Failed";
}

?>