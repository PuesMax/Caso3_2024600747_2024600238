<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
<?php
    include "mysqlaux.php";
    $regs = []; // INICIALIZAR LA VARIABLE

    if (isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];

        $query = "SELECT * FROM Productos WHERE nombre = '$nombre' ";
                  // puerto, usuario, contraseña y name_BD
        $creds = ["localhost", "root", "a62926292M", "tiendita"];

        $regs = seleccionar ($creds, $query);
    }  
    
    // MOSTRAR TABLA SOLO SI HAY REGISTROS
    if (!empty($regs)): 
?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($regs as $producto) :?>
                <tr>
                    <td><?php echo $producto[0] ?></td>
                    <td><?php echo $producto[1] ?></td>
                    <td><?php echo $producto[2] ?></td>
                    <td><?php echo $producto[3] ?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <?php echo "<a href='lista.php'>Regresar</a>"; ?>
<?php 
    // MENSAJE CUANDO NO HAY RESULTADOS
    elseif (isset($_POST["nombre"])): 
?>
        <p>No se encontraron productos con el nombre "<?php echo $_POST["nombre"] ?>"</p>
            
        <?php echo "<a href='lista.php'>Regresar</a>"; ?>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>