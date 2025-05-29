<?php
include('../modelos/conexiones.php');


$nat= $_POST['nombre'];
$na= $_POST['nacionalidad'];


$query="INSERT INTO `autores`(`nombre`, `nacionalidad`) VALUES('$nat','$na')";

$res=$conexion->query($query);
 header("location../vistas/listaAutor.php");
if($res){
  
       header("location../vistas/listaAutor.php");
}else{

    echo"no se guardo";
}

?>
