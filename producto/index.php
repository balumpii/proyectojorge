<?php
include("../startApp.php");
$titulo = "Producto";
$template_seccion = "../templates/producto.php";

$id_producto = (!isset($_GET["id"]) ? "" : $_GET["id"]);



$producto = getProducto($id_producto, $conexion);

include ('../templates/main.php');