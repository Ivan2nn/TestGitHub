<?php
/**
 * Setup mail server config
 */

require_once(dirname(__FILE__) . '/vendor/ctPHPMailer.php');

$debug = false; //if problems occur, set to true to view debug messages

$mail = new ctPHPMailer();

/**
For GMAIL configuration please use this values:

More configuration options available here: https://code.google.com/a/apache-extras.org/p/phpmailer/wiki/ExamplesPage
 */

/**
 * SERVER CONFIG
 */

/**
 * Config for SMTP

//$mail->Host = "smtp.gmail.com"; // sets the SMTP server
$mail->Username = "melina.kukkasela@gmail.com"; // SMTP account username
$mail->Password = "javasela"; // SMTP account password
$mail->SMTPAuth = true; // enable SMTP authentication - true if username and password required
$mail->Port = 465; // set the SMTP port (usually 587, or 465 when SSL)

$mail->IsSMTP();
$mail->SMTPDebug = $debug ? 2 : 0; // debug messages - set debug to false on production!
 */
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Username = "melina.kukkasela@gmail.com"; // SMTP account username
$mail->Password = "javasela"; // SMTP account password
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->SMTPSecure = "ssl";
 
/**
 * Config for simple mail() function
 * Just delete whole section (or just line $mail->IsSMTP();) "SMTP" above and mail will use default mail() function
 */


//to send mail from contact form or book a table table to a different email just copy those two lines and paste below
//require_once "config.php" in send.php or table.php

$mail->SetFrom('from@mail.com', 'First Last'); //from address
$mail->AddAddress("recipient@mail.com", "Recipient Name"); //where to send email