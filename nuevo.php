<?php
    include "mysqlaux.php";


    if (isset($_POST["nombre"]) && $_POST["precio"]) {
      //Sigo con la inserción
      $nombre = $_POST["nombre"];
      $precio = $_POST["precio"];
      $descripcion = $_POST["descripcion"] ?? "";

      $query = "INSERT into productos (nombre, precio, descripcion) values ('$nombre',$precio,'$descripcion')";
      $id = insertar(["localhost", "root", "a62926292M", "tiendita"], $query);

      if ($id !=0) {
        echo "<h1>Exito. Registro insertado correctamente</h1>";
      } else {
        echo "<h1>Error. Contacta con el admon</h1>";
      }
    } else {
      echo "<h1>Error en la consistencia de datos</h1>";
      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Resultado</h2>
        <?php
            // Los mensajes se muestran aquí
        ?>
        <a href='lista.php' class='btn btn-secondary'>Regresar</a>
    </div>
</body>
</html>
