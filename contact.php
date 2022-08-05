<?php 

include_once "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$email = "info@visustrust.com";
$name = "Visus Trust Limited";

$subject = $_POST['subject'];
$email1 = $_POST['email'];
$message = $_POST['message'];
$name1 = $_POST['name'];

$body = "<p><b>Name: </b> $name1 </p><br>";
$body .= "<p><b>Email: </b> $email1 </p><br>";
$body .= "<p><b>Message: </b> $message </p><br>";

//Typical mail data
$mail->addAddress($email, $name);
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->Subject = $subject;
$mail->Body = "Mail contents";

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail - " . $mail->ErrorInfo;
}
