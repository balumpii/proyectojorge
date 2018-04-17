<?php

$root = "/proyecto_jorgeruiz/";
$carpeta_fotos = $root . "images/fotos_tienda/";

$titulo_inicio = "Proyecto tienda 2";
$titulo_catalogo = "Catalogo de productos";


/** CARGAR LIBRERIAS NECESARIAS PARA NUESTRO PROYECTO */

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';
require 'libs/funciones.php';


/** CONECTAR A BASE DE DATOS */

define("HOST_BBDD","localhost");
define("USER_BBDD","root");
define("PASS_BBDD","");
define("NAME_BBDD","demo_tienda");

$conexion = mysqli_connect(HOST_BBDD, USER_BBDD, PASS_BBDD, NAME_BBDD);
// Comprobar conexión
if($conexion === false){
    die("ERROR: Error de conexión " . mysqli_connect_error());
    
    
}

//conexion A SQL_SERVER
/*
$serverName = "localhost"; 
$connectionInfo = array( "Database"=>"MiTienda", "UID"=>"appLogin", "PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);*
 * 
 * 
 * 
 */