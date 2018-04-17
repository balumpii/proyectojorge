<?php
require "../startApp.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

   //recoger las variables que me vienen por post. "name=blablaba en el input"

$datos = [];
$datos["nombre"] = $nombre = $_POST["nombre"];
$datos["telefono"] = $telefono = $_POST["telefono"];
$datos["email"] = $email = $_POST["email"];
$datos["asunto"] = $asunto = $_POST["asunto"];
$datos["observaciones"] = $observaciones = $_POST["observaciones"];

if($nombre == '' || $telefono == '' || $email == '' || $asunto == '' || $observaciones == ''){
   die();
}
   
if(!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
   die();
}
   
$resultado = insertarMasInfo(
        $conexion, 
        $datos
        );


$asunto_email = 'Nuevo contacto desde la web';
$mensaje = "nombre:" . $datos["nombre"] . "<br>telefono:" . $datos["telefono"];
enviarEmail($asunto_email, $mensaje);

$titulo="Contacto";
$template_seccion = "../templates/mensaje.php";


include '../templates/main.php';

?>
