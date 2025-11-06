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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 150px;
            background-color: #e3e2e2ff;
            color: white;
        }

        div {
            background-color: #8081e2ff;
            height: 40vh;
            width: 30vw;
            text-align: center;
            border-radius: 20px;
            padding-top: 30px;
        }

        .usuario {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            background-color: #f0f0ff;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
        }

        .texto {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            font-weight: 500;
            display: block;
            margin-bottom: 6px;
            padding-bottom: 5px;
        }

        .btn-iniciar {
            background-color: #4a4aff; 
            color: white;               
            border: none;               
            padding: 10px 20px;         
            border-radius: 8px;         
            font-size: 16px;            
            font-weight: 600;           
            cursor: pointer;            
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
    </style>
</head>

<body>
    <div id="contenedor">
        <form method="POST" action="">
            <h1>Iniciar Sesión</h1>

            <?php
            echo "<span class='texto'>Usuario:</span> 
                  <input type='text' name='usuario' class='usuario' required><br>";

            echo "<span class='texto'>Contraseña:</span> 
                  <input type='password' name='contrasena' required><br>";
            ?>

            <input type="checkbox" name="Recordar" value="1"> Recuerdame<br>
            <input type="submit" name="Iniciar" value="Iniciar" class="btn-iniciar">

            <?php
            if (isset($_POST['Iniciar'])) {
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                if ($usuario == 'Max' && $contrasena == '1234') {
                    $_SESSION['user'] = $usuario;

                    if (isset($_POST['Recordar'])) {
                        setcookie('user', $usuario, time() + 40);
                    } else {
                        setcookie('user', $usuario, time() - 40, "/");
                    }

                    header("Location: lista.php");
                } else {
                    header("Location: error.php");
                }
            }
            ?>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        </body>
</html>
