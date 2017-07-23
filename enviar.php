<?php 
$destino = "jmillonestapia@yahoo.com.mx";
$subject = "Mensaje Enviado desde www.immunologyandreproduction.com/";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$mensaje = $_POST["mensaje"];
$contenido = "Mensaje_desde" . $subject .  "\nNombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $tel . "\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:enviado.php");

?>