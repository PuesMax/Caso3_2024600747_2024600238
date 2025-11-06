
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
        <style>
        body{
            text-align: center;
            background-color: #cfcfcfff;
        }

        h1{
            color:red;
        }
    </style>
</head>
<body>

    <?php

        echo "<h1>ERROR</h1>";
        echo "No se pudo iniciar sesion correctamente, por favor vuelva al inicio de sesión". "<br><br>";

    ?>
        <form method="POST">
            <input type="submit" value=Regresar name="regresar">
        </form>

    <?php
        if (isset($_POST["regresar"])){
            session_start();
            unset($_SESSION['user']);
            header("Location: login.php");
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>