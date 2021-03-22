<?php
$to = "Athletisize@gmail.com";//收件人
$subject = "Test";//邮件主题
$message = "This is a test mail!";//邮件正文
ini_set('SMTP','smtp.gmail.com');//发件SMTP服务器
ini_set('smtp_port',25);//发件SMTP服务器端口
ini_set('sendmail_from',"Athletisize@gmail.com");//发件人邮箱
mail($to,$subject,$message);
?>