<?php

$to_email = "siddiquimarium148@gmail.com";
$subject = "simple email test via php";
$body = "hi, this is test email send by php script in 2021 from ";
$headers = "from: ghazalangle325@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
    echo "email succesfully sent to $to_email....";
}
else {
    echo "email sending failed...";
}
?>