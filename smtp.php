<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
try{
$mail = new PHPMailer(true);
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com'; 
 $mail->Port = 587; 
 $mail->SMTPSecure = 'tls';
 $mail->SMTPAuth = true; 
 $mail->Username = "manassehrhemalimited@gmail.com";
 $mail->Password = "Today+25*";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
				
//dassay77@yahoo.com

$mail->setFrom('manassehrhemalimited@gmail.com', $name);
$mail->addAddress('info@manassehrhema.com'); 
$mail->addReplyTo($email);
$mail->Subject = $subject; 
$email_body = 
'Dear Admin,
You have one new message from '.$name.'
Email:   '.$email.'
Subject: '.$subject.'
Message: '.$message.'';
           
			
 
$mail->Body = $email_body;
if($mail->send()){
echo "1";
}

}catch(Exception $e){
echo "Mailer Error: " . $mail->ErrorInfo;
}
 

			
				
				
?>