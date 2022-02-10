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
    <?php
    include('conexionBD.php');

    if (isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['apellido1']) && isset($_POST['apellido2']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['edad'])) {
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contraseña']);
        $email = trim($_POST['email']);
        $nombre = trim($_POST['nombre']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $edad = trim($_POST['edad']);

        $consulta = "INSERT INTO persona(Usuario, Contraseña, Email,Nombre,Apellido1,Apellido2 , Telefono , Direccion ,Edad) VALUES('$usuario' , '$contraseña', '$email' , '$nombre' ,'$apellido1' , '$apellido2' ,'$telefono', '$direccion' , '$edad')";

        $verificar_usuario = mysqli_query($baseDatos, "SELECT * FROM persona WHERE usuario = '$usuario'");

        if (mysqli_num_rows($verificar_usuario) > 0) {
            echo "el usuario ya existe";
        } else {
            $resultadoConsulta = mysqli_query($baseDatos, $consulta);
            if ($resultadoConsulta) {
                if (!isset($_SESSION['usuario'])) {
                    $_SESSION['usuario'] = $usuario;
                }
                header('Location: paginaInicio.php');
                exit;
            }
        }
    }
    ?>

    <form action="" method="POST">
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


</body>

</html>