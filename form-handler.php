<?php
$name = $_POST[''];
$client_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@sweetpaw.store';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $client_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
$to = 'chanreasmeyouk@gmail.com';
$header = "From: $email_form \r\n";
$header .= "Reply-To: $client_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("Location: Contact.html");
 ?>
