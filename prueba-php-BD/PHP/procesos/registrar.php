<?php

session_start();

//Incluimos la base de datos para traer toda la informacion

include("conexionBD.php");

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
    $contraseña_encriptada = password_hash($contraseña, PASSWORD_BCRYPT);
    //Para encriptar la contraseña

    $registrarUsuario = "INSERT INTO persona(Usuario, Contrasena, Email,Nombre,Apellido1,Apellido2 , Telefono , Direccion ,Edad) VALUES('$usuario' , '$contraseña_encriptada', '$email' , '$nombre' ,'$apellido1' , '$apellido2' ,'$telefono', '$direccion' , '$edad')";

    /*Es para verificar que no haya un usuario con el mismo nombre*/
    $verificar_usuario = $baseDatos->query("SELECT * FROM persona WHERE usuario = '$usuario'");

    if ($verificar_usuario) {
        if ($verificar_usuario->num_rows > 0) {
            $_SESSION['usuario_existente'] = "el usuario ya existe";
            header('Location: http://localhost/maquetacion-M09/PHP/formularios/registroUser.php');
            exit;
        } else {
            $resultadoConsulta = $baseDatos->query($registrarUsuario);
            if ($resultadoConsulta) {
                //recoleccion datos usuario registrado
                $usuarioInsertadoConsultado = $baseDatos->query("SELECT * FROM persona WHERE usuario = '$usuario'");
                $datosUsuario = $usuarioInsertadoConsultado->fetch_assoc();
                if (!isset($_SESSION['datosUsuario'])) {
                    $_SESSION['datosUsuario'] = $datosUsuario;
                    header('Location: http://localhost/maquetacion-M09/PHP/formularios/paginaInicio.php');
                    exit;
                }
            }
        }
    }
}
