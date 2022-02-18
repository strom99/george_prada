<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
</head>

<body>
    <form action="../procesos/registrar.php" method="POST">
        <label for="usuario">Usuario : </label>
        <input type="text" id="usuario" name="usuario"><br>

        <label for="contraseña">Contraseña : </label>
        <input type="password" id="contraseña" name="contraseña"><br>

        <label for="email">Email : </label>
        <input type="email" id="email" name="email"><br>

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellido1">Primer Apellido</label>
        <input type="text" id="apellido1" name="apellido1"><br>

        <label for="apellido2">Segundo Apellido</label>
        <input type="text" id="apellido2" name="apellido2"><br>

        <label for="telefono">Telefono</label>
        <input type="number" id="telefono" name="telefono"><br>

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion"><br>

        <label for="edad">edad</label>
        <input type="number" id="edad" name="edad"><br>

        <input type="submit" value="Registrar" name="registrar">
    </form>

    <?php
    if (isset($_SESSION['usuario_existente'])) { ?>
        <p><?php echo $_SESSION['usuario_existente']; ?></p>
    <?php
    }
    ?>

</body>
</html>