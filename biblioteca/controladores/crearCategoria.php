<?php
include('../modelos/conexiones.php');

$nom= $_POST['categoria_id'];
$nat= $_POST['nombre_categoria'];


$query="INSERT INTO `categorias`(`categoria_id`, `nombre_categoria`) VALUES('$nom','$nat')";

$res=$conexion->query($query);
if($res){
     header("location..vistas/crearcategoria.php");
}else{

    echo"no se guardo";
}

?>