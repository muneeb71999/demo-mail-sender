<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = `
  <p> <b>Name:</b> $name </p> <br>
  <p> <b>Email:</b> $email </p> <br>
  <p> <b>Subject:</b> $subject </p> <br>
  <p> <b>Message:</b> $message </p> <br>
`;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail("muneebakram71999@gmail.com", $subject, $body, $headers)){
  echo 'Your mail has been sent successfully.';
} else{
  echo 'Unable to send email. Please try again.';
}