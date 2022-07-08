<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from='nishafatima.da031@gmail.com';
$email_subject="Registration Form - KFUEIT";
$email_body="name:".$name."\n".
"phone:".$phone."\n".
"email:".$email."\n".
"subject:".$subject."\n".
"message:".$message."\n".


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