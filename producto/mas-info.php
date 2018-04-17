
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
$id_producto = $_POST["id_producto"];
$longitud = $_POST["longitud"];
$latitud = $_POST["latitud"];
//$nombre_producto = $_POST["nombre_producto"];
$producto = getProducto($id_producto, $conexion);

//Validar las variables. Todas tienen que tener valor

if($datos["nombre"] == '' || $datos["telefono"] == '' || $datos["email"] == '' || $datos["asunto"] == '' || $datos["observaciones"] == ''  || $id_producto== '' ){
   die();
}

if(!filter_var($datos["email"] , FILTER_VALIDATE_EMAIL)){
   die();
}

$resultado = insertarMasInfo(
        $conexion, 
        $datos, 
        $id_producto, 
        $latitud, 
        $longitud 
        );

$asunto_email = 'Nuevo solicitud de mas informacion de '. $producto["nombre"];
$mensaje = "nombre:" . $datos["nombre"]  . "<br>telefono:" . $datos["telefono"]  ."<br>e-mail:" . $datos["email"] ;
enviarEmail($asunto_email, $mensaje);

$titulo="Productos | Puertas";
$template_seccion = "../templates/mensaje.php";
include('../templates/main.php')

?>



