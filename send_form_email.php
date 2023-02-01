<?php
	$email = $_POST["email"];
	$name = $_POST["name"];
	$body = $_POST["body"];
	$msg = "GKA Contact Form\r\n----------------------------\r\nName: $name\r\nEmail: $email\r\nBody:\r\n$body";
	$headers .= "From: $name <$email>\r\n";
	$headers .= "Content-Type: text/plain; charset=iso-8859-1\r\n";
	$recipient = "talia.j.degisi@gmail.com";
	$subject = "GKA Web Contact Form";
	$msg = wordwrap( $msg, 1024 );
	mail($recipient, $subject, stripslashes($msg), $headers);
?>