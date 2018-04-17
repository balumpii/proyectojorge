<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function insertarMasInfo(
        $conexion,
        $datos,
        $id_producto="NULL",
        $latitud="NULL",
        $longitud="NULL"){
   $sql = "INSERT INTO mas_info(nombre,email,telefono,asunto,observaciones,fkidproducto, Latitud, Longitud) "
           . "VALUES ('{$datos["nombre"]}','{$datos["email"]}','{$datos["telefono"]}','{$datos["asunto"]}','{$datos["observaciones"]}',$id_producto,$latitud,$longitud)"; 
   
   $resultado = mysqli_query($conexion, $sql);
    
   if ($resultado){
       return true;
   } else {
       return false;
   }
   
    
}


function enviarEmail ($asunto, $cuerpo) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = gethostbyname('smtp.gmail.com');
        //$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'experimentocodespace@gmail.com';                 // SMTP username
        $mail->Password = 'codespace2018';                            // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;    

        $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

        //Recipients
        $mail->setFrom('balumpii@gmail.com', 'Jorge');     // Add a recipient
        $mail->addAddress('balumpii@gmail.com', 'Jorge');       // Add a recipient


        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = $cuerpo;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

function getProducto($id,$conexion){
   $sql = "SELECT p.*,c.nombre AS categoria FROM productos p INNER JOIN categorias c ON p.fkidcategoria=c.id WHERE p.id =" . $id;
   $resultado = mysqli_query($conexion,$sql);
   $producto = mysqli_fetch_assoc($resultado);
   return $producto;
}