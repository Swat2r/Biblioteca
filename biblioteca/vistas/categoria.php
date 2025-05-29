<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "referencia.php";

?>
    <div class="container">
        <h2>Formulario Categoría</h2>
        <div class=row>
            <div class="col-md-6">
                <form  method="POST" action="../controladores/crearCategoria.php">
                    <div class="form-group">
                        <label for="">ID Categoría:</label>
                        <input class="form-control" name="categoria_id" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de la categoría:</label>
                        <input class="form-control" name="nombre_categoria" type="text">
                    </div>
                   
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary"  type="submit"> Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>
