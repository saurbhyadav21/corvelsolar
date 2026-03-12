<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "SMTP: ".ini_get("SMTP")."<br>";
echo "SMTP PORT: ".ini_get("smtp_port")."<br>";
echo "sendmail_path: ".ini_get("sendmail_path");


$result = mail("customersupport@corvelsolar.com","Test","Mail Test");

if($result){
    echo "Mail Sent";
}else{
    echo "Mail Failed<br>";
    var_dump(error_get_last());
}

?>