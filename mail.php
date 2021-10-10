<?php
// get data from form

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'lesloaby@gmail.com';
$subject = 'Mail from mybakery.com';
$txt = "Name = ". $name . "\r\n Email=" . $email . "\r\n Message =" . $message;
$headers = "From: noreply@mybakery.com";

if($email!=NULL) {
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");
?>