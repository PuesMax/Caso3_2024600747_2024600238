<?php  
include "mysqlaux.php";

if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $query = "UPDATE productos 
              SET Precio = '$precio', Descripcion = '$descripcion' 
              WHERE Nombre = '$nombre'";

    $res = actualizar(["localhost", "root", "a62926292M", "tiendita"], $query);

    if ($res) {
        echo "<div class='alert alert-success'>Producto actualizado correctamente</div>";
    } else {
        echo "<div class='alert alert-warning'>No se encontró el producto '$nombre'</div>";
    }

} else {
    echo "Por favor ingresa un nombre válido.";
    echo "<br><a href='lista.php'>Regresar</a>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Actualización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <a href='lista.php' class='btn btn-secondary'>Regresar</a>
    </div>
</body>
</html>