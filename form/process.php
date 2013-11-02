<?php
  $dir = getcwd();  
	require_once($dir . '/phpmailer/class.phpmailer.php');
  $mail             = new PHPMailer(); // defaults to using php "mail()"
	
  $mail->IsSMTP();
	$mail->Host = "smtp.mimiedesign.com";
	$mail->SMTPAuth = true;
	$mail->Username = "info@mimiedesign.com";
	$mail->Password = "melina84";
  
	$webmaster_email = "info@mimiedesign.com";
	$mail->SetFrom($webmaster_email, "m.i.m.i eDesign");
	$mail->AddReplyTo($webmaster_email, "Webmaster");

	$address = "info@mimiedesign.com";
	$mail->AddAddress($address, "m.i.m.i eDesign");

	$mail->Subject    = "Order From Customer Form";
	$mail->WordWrap = 50;
	
	
	$Body = "Name: " . $_POST['_name'] . "\n\n" . "E-mail: " . $_POST['_email'] . "\n\n\n"; 
	
	$Text = $_POST['_text'];	
	
	$mail->Body = $Body . "Text from customer: " . nl2br($Text) . "\n";

	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}
 ?>