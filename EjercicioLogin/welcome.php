<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)

{
    header('location:login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Hola, <b> <?php echo htmlspecialchars($_SESSION['usuario']); ?>   </b> Bienvenid@ a nuestro sitio.</h1>
    <p>
        <a href="">Cambia tu contraseña</a>
        <a href="">Cierra la sesión</a>
    </p>
</body>
</html>