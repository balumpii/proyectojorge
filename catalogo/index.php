<?php

include("../startApp.php");
$titulo = "Catálogo de productos";
$template_seccion = "../templates/catalogo.php";


$sql = "SELECT * FROM categorias";
$resultado_categorias = mysqli_query($conexion,$sql);

$id_categoria = (isset($_GET["id"]))? $_GET["id"] : "";
if ($id_categoria!="") {

    $sql_productos = "SELECT * FROM productos where fkidcategoria=" . $id_categoria;

} else {

    $sql_productos = "SELECT * FROM productos";

}

$resultado_productos = mysqli_query($conexion, $sql_productos);

$template_seccion = "../templates/catalogo.php";
include ('../templates/main.php');
  
?>


        
