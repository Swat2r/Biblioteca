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
            <th>categoria_id</th>
            <th>Nombre_categoria</th>
            
            
        </tr>
        </thead>
        <tbody>
        <?php
           include ("../modelos/conexiones.php");
           $query="SELECT `categoria_id`, `nombre_categoria` FROM `categorias`";
        $res=$conexion->query($query);
        while($row=$res->fetch_assoc())
        {
            ?>
            <tr>
            <td><?php echo $row['categoria_id'];?></td>
            <td><?php echo $row['nombre_categoria'];?></td>
            
            
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