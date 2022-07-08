<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$program=$_POST['program'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];


$email_from='nishafatima.da031@gmail.com';
$email_subject="Registration Form - KFUEIT";
$email_body="firstname:".$fname."\n".
"lastname:".$lname."\n".
"program:".$program."\n".
"gender:".$gender."\n".
"email:".$email."\n".
"phone:".$phone."\n".


$to="nishafatima.da031@gmail.com";

$headers = "From: $email_from \r\n";

	$headers = "Reply-To:".$visitor_email ."\r\n";
	$email= mail($to, $email_subject, $email_body, $headers);
	
	if ($email) {
		header("Location: form.html");
		echo"email=sucess";
	}
	else{
		header("Location: form.html");
		echo"email=failed";
	}
    
    ?>