<?php 
require("class.phpmailer.php"); 
$mail = new PHPMailer(); 
$address = $_POST['address']; 
$mail->IsSMTP(); // set mailer to use SMTP 
$mail->Host = "mail.songzi.org"; // specify main and backup server 
$mail->SMTPAuth = true; // turn on SMTP authentication 
$mail->Username = "phpmailer@songzi.org"; // SMTP username 
$mail->Password = "******"; // SMTP password 
$mail->From = "phpmailer@songzi.org"; 
$mail->FromName = "songzi"; 
$mail->AddAddress("$address", ""); 
//$mail->AddAddress(""); // name is optional 
//$mail->AddReplyTo("", ""); 
//$mail->WordWrap = 50; // set word wrap to 50 characters 
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // add attachments 
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // optional name 
//$mail->IsHTML(true); // set email format to HTML 
$mail->Subject = "PHPMailer测试邮件"; 
$mail->Body = "Hello,这是松子的测试邮件"; 
$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; 
if(!$mail->Send()) 
{ 
echo "Message could not be sent. <p>"; 
echo "Mailer Error: " . $mail->ErrorInfo; 
exit; 
} 
echo "Message has been sent"; 
?> 


<html> 
<body> 
<h3>phpmailer Unit Test</h3> 
请你输入<font color="#FF6666">收信</font>的邮箱地址: 
<form name="phpmailer" action="send.php" method="post"> 
<input type="hidden" name="submitted" value="1"/> 
邮箱地址: <input type="text" size="50" name="address" /> 
<br/> 
<input type="submit" value="发送"/> 
</form> 
</body> 
</html>
