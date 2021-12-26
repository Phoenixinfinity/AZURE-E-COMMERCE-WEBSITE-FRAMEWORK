<?php
//get data from form  

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone= $_POST['phone'];
$mail= $_POST['mail'];
$address= $_POST['address'];
$message= $_POST['message'];
$to = "example@mail.com";
$subject = "Mail From Rymo";
$txt ="First-Name = ". $firstname . "\r\n Last-Name = ". $lastname . "\r\n Phone-No. = ". $phone ."\r\n  Email = " . $mail .  "\r\n Address = ". $address .  "\r\n Message =" . $message;
$headers = "From: noreply@rymoidc.com" . "\r\n" .
"CC: nobodyelse@example.com";
if($mail!=NULL){
    mail($to,$subject,$txt,$headers);
    header('Location:thankyou.php');
}

//redirect
