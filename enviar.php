<?php 
$destino = "jmillonestapia@yahoo.com.mx,reynier.nr@gmail.com";
$subject = "Enviado desde www.immunologyandreproduction.com/";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$mensaje = $_POST["mensaje"];
$contenido = "Mensaje: " . $subject .  "\nNombre: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $tel . "\nMensaje:" . $mensaje;
mail($destino, $subject, $contenido);
header("Location:enviado.php");

?>