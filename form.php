<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$to = "ranjanadarsh@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email;
$headers = "From: noreply@.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:succes.html");
?>