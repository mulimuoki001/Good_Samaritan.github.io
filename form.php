<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@mulimuoki.tech';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'goodsamaritan845@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $subject, $email_body, $headers);
?>