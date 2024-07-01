<?php
echo !extension_loaded('openssl')?'not available':'available';
echo "<br>";
require 'PHPMailerAutoload.php';
$mail=new PHPMailer(); //CREATE NEW OBJECT
$mail->IsSMTP(); //ENABLE SMTP
//$mail->SMTPDebug=0; //DEBUG :1=ERRORS AND MESSAGE ,2=MESSAGE ONLY
$mail->SMTPAuth=true; //AUTHENTICATION ENABLE
$mail->SMTPSecure='tls'; //tls //SECURE TRANSFER ENABLED
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->Username='atech.info123@gmail.com';
$mail->Password='mubaraka';
$mail->setFrom('atech.info123@gmail.com','Abbas Tukiwala');
//$mail->addReplyTo('email','name');
$mail->Subject="hello";
$mail->Body="Kem Cho";
$mail->addAddress('ab_love786@yahoo.com');
//$mail->addCC('');
//$mail->addBCC('');
$mail->WordWrap=50;
//$mail->addAttachment('/file.doc');
//$mail->addAttachment('/img.jpg','new.jpg');
//$mail->isHTML(true);
if(!$mail->send())
{
echo 'Mail error: '.$mail->ErrorInfo;
}
else
{
echo 'Message Sent!';
}
?>