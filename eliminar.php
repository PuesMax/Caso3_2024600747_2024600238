<?php 
    include "mysqlaux.php";

    if (isset($_POST["nombre"]) && $_POST["nombre"] != ""){
        $nombre = $_POST["nombre"];
        $query = "DELETE FROM productos WHERE Nombre = '$nombre'";
        $res = eliminar(["localhost", "root", "a62926292M", "tiendita"], $query);
        $resultado = $res['res'];
        $filasAfectadas = $res['filas'];

        if ($resultado != false && $filasAfectadas > 0){
            echo "<div class='alert alert-success'>El producto se borró exitosamente</div>";
        } else {
            echo "<div class='alert alert-danger'>No se encontró el producto, por favor ingresa un producto válido</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Por favor ingresa un nombre de producto para eliminar</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Los mensajes se muestran aquí
        ?>
        <a href='lista.php' class='btn btn-secondary'>← Regresar</a>
    </div>
</body>
</html>