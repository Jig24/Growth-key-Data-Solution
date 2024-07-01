<?php
include('Mailer/PHPMailerAutoload.php');
echo smtp_mailer("chatimohammad51@gmail.com","Hello ","  hello Charmii From UniversalData Solution Girl How Are You doing?");
function smtp_mailer($to,$sub,$msg)
{
    $mail=new PHPMailer(); //CREATE NEW OBJECT
	$mail->IsSMTP(); //ENABLE SMTP
//$mail->SMTPDebug=0; //DEBUG :1=ERRORS AND MESSAGE ,2=MESSAGE ONLY
$mail->SMTPAuth=true; //AUTHENTICATION ENABLE
$mail->SMTPSecure='ssl'; //tls //SECURE TRANSFER ENABLED
$mail->Host='smtp.hostinger.com';
$mail->Port=465;
$mail->Username='my@universaldatasolution.in';
$mail->Password='Admin@123';
$mail->setFrom('my@universaldatasolution.in');
//$mail->addReplyTo('email','name');
$mail->Subject=$sub;
$mail->Body=$msg;

// $mail->Body="Your Request is Rejected. plz Contact to Our Administrator";

$mail->addAddress($to);

//$mail->addCC('');
//$mail->addBCC('');
// $mail->WordWrap=50;
//$mail->addAttachment('/file.doc');
//$mail->addAttachment('/img.jpg','new.jpg');
$mail->isHTML(true);
$mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
));
if(!$mail->send())
{
echo 'Mail error: '.$mail->ErrorInfo;
// die("error....");
}
else
{
echo "<script type=text/javascript>alert('Request is Updated');</script>";
}
}

?>