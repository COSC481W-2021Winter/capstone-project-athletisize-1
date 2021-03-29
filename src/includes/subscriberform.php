<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

//$mail-> SMTPDebug = 2;
$mail-> SMTPAuth = TRUE;
$mail-> SMTPSecure ="tls";
$mail-> Port = 587;
$mail-> Host ="smtp.gmail.com";
$mail-> Username ="athletisize@gmail.com";
$mail-> Password ="Cosc481W";

$mail->IsHTML(true);
$mail->AddAddress("athletisize@gmail.com", "recipient-name");
$mail->SetFrom("athletisize@gmail.com", "from-name");
$mail->AddReplyTo("athletisize@gmail.com", "reply-to-name");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = $_POST['subject'];

$mail->Body .= '<h1>customer\'s name: ';
$mail->Body .= $_POST['fname'];
$mail->Body .= $_POST['lname'];
$mail->Body .= '<br></h1>';
$mail->Body .= $_POST['message'];

//$mail->MsgHTML(\http\Message\Body::);
if(!$mail->Send()) {
    echo "Error while sending Email.";
    header("refresh:2;url=../contact.php");
    var_dump($mail);
} else {
    //echo "<script>alert('Email sent successfully');</script>";
    //echo "<script>location.href='index.php';</script>";
    echo "Email sent successfully";
    header("refresh:2;url=../index.php");
    //echo '<script language="javascript">setTimeout("location.href = index.php;", 10);</script>';
}


