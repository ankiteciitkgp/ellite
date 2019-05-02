<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_sender = 'contact@ellitecolorants.com';

	$email_subject = 'New Contact form submission';

	$email_body = "Name: $fname $lname\n\n";
	$email_body .="Phone: $phone\n\n";
	$email_body .="Email: $email\n\n";
	$email_body .= "Subject: $subject\n\n";
	$email_body .= "Message: $message\n\n";

	$email_to = 'sales.ellitecolorants@gmail.com';

	$headers = "From: $email_sender \r\n";
	$headers .= "Reply-To: $email \r\n";

	mail($email_to, $email_subject, $email_body, $headers);

	header("Location: contact.php?mailsent");

?>		