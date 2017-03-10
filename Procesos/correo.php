<?php
$nombre= $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['mensaje'];
$from_name = $nombre;
$from_email = "hamthony@hotmail.com"; //cambielo por su correo
$headers = "From: $from_name <$from_email>";
$body = "MENSAJE: \n$asunto.";
$subject = "Mensaje de: $nombre";
$to = "hamthony@hotmail.com"; //cambielo por el correo al que desea mandarlo
 
if (mail($to, $subject, $body, $headers)) {
	header('Location: contacto.php?mail=enviado');
	//header("Location:../index.php");
  echo "Enviado!";
} else {
	header('Location: contacto.php?mail=error');
  echo "Error…";
}
?>