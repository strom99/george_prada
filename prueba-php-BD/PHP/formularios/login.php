<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="../procesos/proceso_login.php" method="POST">
        <label for="usuario">Usuario : </label>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contrasena">Contraseña : </label>
        <input type="password" id="contrasena" name="contrasena"><br>
        <input type="submit" value="Ingresar" name="btn_login">
        <a href="../formularios/registroUser.php">No estoy registrado </a>
    </form>

    <?php

    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }

    ?>


</body>

</html>