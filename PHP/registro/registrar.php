<?php

session_start();

include("conexionBD.php");


if (isset($_POST['registrar'])) {
    if (isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['apellido1']) && isset($_POST['apellido2']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['edad'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $edad = $_POST['edad'];

        $consulta = "INSERT INTO persona(Usuario, Contraseña, Email,Nombre,Apellido1,Apellido2 , Telefono , Direccion ,Edad) VALUES('$usuario' , '$contraseña', '$email' , '$nombre' ,'$apellido1' , '$apellido2' ,'$telefono', '$direccion' , '$edad')";

        $verificar_usuario = mysqli_query($baseDatos, "SELECT * FROM persona WHERE usuario = '$usuario'");

        if (mysqli_num_rows($verificar_usuario) > 0) {
            echo "el usuario ya existe";
            exit;
        } else {
        }
        $resultadoConsulta = mysqli_query($baseDatos, $consulta);

        if ($resultadoConsulta) {

            if (!isset($_SESSION['usuario'])) {
                $_SESSION['usuario'] = $usuario;
            }
            header('Location: paginaInicio.php');
            exit;
        } else {
            header('Location: registroUser.php');
            exit;
        }
    }
}
