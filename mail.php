<?php
require("PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();    // set mailer to use SMTP
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";    // specify main and backup server
$mail->SMTPAuth = true;    // turn on SMTP authentication
$mail->Username = "lukeaday1990@gmail.com";    // SMTP username -- CHANGE --
$mail->Password = "{REMOVED}";    // SMTP password -- CHANGE --
$mail->Port = "465";    // SMTP Port

$mail->From = "lukeaday1990@gmail.com";    //From Address -- CHANGE --
$mail->FromName = "GambleCraft";    //From Name -- CHANGE --
$mail->AddAddress("lukeday1990@hotmail.co.uk", "Example");    //To Address -- CHANGE --
$mail->AddReplyTo("lukeaday1990@gmail.com", "Your Company Name"); //Reply-To Address -- CHANGE --

$mail->WordWrap = 50;    // set word wrap to 50 characters
$mail->IsHTML(false);    // set email format to HTML

$mail->Subject = "AuthSMTP Test";
$mail->Body    = "AuthSMTP Test Message!";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>