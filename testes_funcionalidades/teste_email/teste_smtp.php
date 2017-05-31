<?php

require_once 'PHPMailerAutoload.php';
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host      = 'smtp.gmail.com';
$mail->SMTPAuth  = true;
$mail->Username  = 'envio.contato@tanger.com.br';
$mail->Password  = "&envioLj01&";
$mail->SMTPSecure = 'tls';
$mail->setFrom("envio.contato@tanger.com.br", 'Tanger');
$mail->addReplyTo("envio.contato@tanger.com.br", 'Kazue');
$mail->addAddress("envio.contato@tanger.com.br", 'Kazue');
$mail->Subject   = "E-mail de teste!!!";
$mail->msgHTML("<h4>Email enviado pelo site!</h4>");
$mail->AltBody = 'This is a plain-text message body';

$mail->Port      = 587;
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

if(!$mail->Send()) {
	echo '<pre>';
    print_r($mail->ErrorInfo);
    echo '</pre>';
} else {
   echo 'Email enviado!';
}

?>
