<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>PHPMailer</title>
		<meta charset="UTF-8" />
	</head>
	<body>
	<?php
	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.triatahost.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = false;                               // Enable SMTP authentication
	$mail->Username = 'no-reply6@triatahost.com';                 // SMTP username
	$mail->Password = 'no1910triata';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to$mail->isSMTP();

	$mail->From = 'mauro.nunes@triata.com.br';
	$mail->FromName = 'Mauro Nunes';
	$mail->addAddress('mauro.nunes@triata.com.br', 'Mauro Nunes');     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

	?>
	</body>
</html>
