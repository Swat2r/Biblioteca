<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Biblioteca</title>
  <?php
     ///require_once "referencias.php";
     include "referencia.php";
   ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 50px;
    }
    h1 {
      margin-bottom: 40px;
    }
    a {
      display: block;
      margin: 10px;
      font-size: 18px;
      text-decoration: none;
      color: #333;
      padding: 10px 20px;
      border: 1px solid #333;
      width: 200px;
      margin-left: auto;
      margin-right: auto;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }
    a:hover {
      background-color: #333;
      color: white;
    }
  </style>
</head>
<body>

  <h1>Biblioteca</h1>

  <a href="autor.php">Formulario Autor</a>
  <a href="crearAutor.php">lista de autores</a>
  <a href="libro.html">Formulario Libro</a>
  <a href="editorial.html">Formulario Editorial</a>
  <a href="categoria.php">Formulario Categoría</a>
  <a href="crearcategoria.php">lista de categorias</a>

</body>
</html>