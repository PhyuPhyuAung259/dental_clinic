<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
 

//Load Composer's autoloader
require '../vendor/autoload.php';

$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
 
$mail = new PHPMailer(true);

 

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "phyuphyuaung.dev@gmail.com";
$mail->Password = "phyupphyuaungdev@25";

$mail->setFrom($email, $username);
$mail->addAddress("phyuphyuaung.dev@gmail.com");

$mail->Subject = 'Contact From' . $username;
$mail->Body = $message;

$mail->send();

header("Location: index.php");