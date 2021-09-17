<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sexo = $_POST['sexo'];
$label = $_POST['dni'];
$label = $_POST['¿Cúal es tu pedido?'];
$label = $_POST['Forma de Pago'];
$Ubicación = $_POST['Ubicación'];
$label2 = $_POST['message'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Su sexo  es: " . $sexo . " \r\n";
$message .= "Su dni es: " . $dni . " \r\n";
$message .= "Su pedido es: " . $label . " \r\n";
$message .= "Su forma de pago  es: " . $label . " \r\n";
$message .= "Su ubicación  es: " . $Ubicación . " \r\n";
$message .= "Su opinión es: " . $label2 . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'lucerocolmenaressocola@gmail.com';
$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->
