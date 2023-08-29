<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['emailaddress'];
$emailsub = $_POST['emailsub']; // Corrected field name
$message = $_POST['message'];
$number = $_POST['mobile'];



$to = "mrbangladesh19521971@gmail.com";
$subject = "Mail From Amad uddin osama";
$txt ="Name = ". $name . "\r\n  
Email = " . $email . "\r\n 
Message =" . $message ."\r\n 
Mobile Number = ". $number; 

$headers = "From: noreply@amadzone.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>