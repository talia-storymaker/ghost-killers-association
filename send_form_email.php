<?php
	$email = $_POST["email"];
	$name = $_POST["name"];
	$body = $_POST["body"];
	$msg = "GKA Contact Form\r\n----------------------------\r\nName: $name\r\nEmail: $email\r\nBody:\r\n$body";
	$headers .= "From: $name <$email>\r\n";  // your email client will show the person's email address like normal
	$headers .= "Content-Type: text/plain; charset=iso-8859-1\r\n"; // sets the mime type
	$recipient = "tdegisi@stumail.jccc.edu"; // enter YOUR email address here
	$subject = "GKA Web Contact Form";
	$msg = wordwrap( $msg, 1024 );
	mail($recipient, $subject, stripslashes($msg), $headers); // the mail() function sends the message to you
?>