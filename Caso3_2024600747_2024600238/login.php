<?php
    session_start();

    if (isset($_SESSION['user'])) {
    header("Location: lista.php");
    }


    if (isset($_COOKIE['user']) && !isset($_GET['logout'])) {
        $_SESSION['user'] = $_COOKIE['user'];
        header("Location: lista.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <style>

        body{
            display: flex;
            justify-content: center;
            align-items: center; 
        }
        div{
            background-color: #cfcfcfff;
            height: 32vh;
            width: 30vw;
            text-align: center;
            border-radius: 20px;
        }

        .usuario{
            margin-bottom:10px;
        }

    </style>

</head>
<body>
    <div>
        <form method="POST" action="">
            <h1>Iniciar Sesión</h1> 

            <?php 
                echo "Usuario: <input type='text' name='usuario' class='usuario' required><br>";
                echo "Contraseña: <input type='password' name='contrasena' required><br>";
            ?> 

            <input type="checkbox" name="Recordar" value="1" >Recuerdame</input><br>
            <input type="submit" name="Iniciar" value="Iniciar">

            <?php
                if (isset($_POST['Iniciar'])) {
                    $usuario = $_POST['usuario'];
                    $contrasena = $_POST['contrasena'];

                if ($usuario == 'Max' && $contrasena == '1234') {
                        $_SESSION['user'] = $usuario;

                        if(isset($_POST['Recordar'])){
                        setcookie('user', $usuario, time() + (40));
                        } 
                        
                        header("Location: lista.php");

                    } else {
                        header("Location: error.php");
                    }
                }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>