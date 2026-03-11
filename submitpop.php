<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);




if(mail("customersupport@corvelsolar.com","Test","Mail Test")){
echo "Mail working";
}else{
echo "Mail not working";
}


?>