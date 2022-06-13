<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];
$to = "kumar.baral57@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Mobile = " . $number . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@kumarbaral.com.np" . "\r\n" .
"CC: kumar.baral572@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>