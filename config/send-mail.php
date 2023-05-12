<?php 
 ini_set("display_errors","1");
 error_reporting(E_ALL);
require "../vendor/autoload.php"; //PHPMailer Object
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../path/to/PHPMailer/src/Exception.php';
require '../path/to/PHPMailer/src/PHPMailer.php';
require '../path/to/PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true); 
$mail = new PHPMailer; //From email address and name 
$mail->From = "from@yourdomain.com"; 
$mail->FromName = "Full Name"; //To address and name 
$mail->addAddress("phyuphyuaung.dev@gmail.com", "Phyu Phyu Aung");//Recipient name is optional
$mail->addAddress("phyuphyuaung.dev@gmail.com"); //Address to which recipient will reply 

$mail->isHTML(true); 
$mail->Subject = "User contact from Dental_clinic"; 
$mail->Body = $_REQUEST['message'];
 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
 
?>