<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "referencia.php"
 ?>
 <div class="container">
    <h1>Lista de Registro autores</h1>
    <div class="row">
     <table class="table">
        <thead>
        <tr>
            <th>Autor_id</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
           include ("../modelos/conexiones.php");
           $query="SELECT `autor_id`, `nombre`, `nacionalidad` FROM `autores`";
        $res=$conexion->query($query);
        while($row=$res->fetch_assoc())
        {
            ?>
            <tr>
            <td><?php echo $row['autor_id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['nacionalidad'];?></td>
            
            </tr>
        <?php
        }
        ?>
       
        </tbody>
     </table>
       
    </div>
 </div>
</body>
</html>