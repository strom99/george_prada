<?php

session_start();
$_SESSION['incompleto'] = '';
$_SESSION['yaexiste'] = '';
//Incluimos la base de datos para traer toda la informacion

include("conexionBD.php");
if (isset($_POST['registrar'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contraseña']) && !empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['edad'])) {
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
        $verificar_correo = $baseDatos->query("SELECT * FROM persona WHERE email = '$email'");

        if ($verificar_usuario && $verificar_correo) {
            if ($verificar_usuario->num_rows > 0) {
                $_SESSION['yaexiste'] = "el usuario ya existe";
                header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
                exit;
            }

            if ($verificar_correo->num_rows > 0) {

                // Haremos la verificacion dcel dominio del correo para que en el rol sea administrador o no de la tabla roles
                if(){

                }

                $_SESSION['yaexiste'] = "el correo ya existe";
                header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
                exit;
            }

            $resultadoConsulta = $baseDatos->query($registrarUsuario);
            // verificacion si la consulta fue exitosa
            if ($resultadoConsulta) {
                //recoleccion datos usuario registrado
                $usuarioInsertadoConsultado = $baseDatos->query("SELECT * FROM persona WHERE usuario = '$usuario'");
                // guardamos los datos del usuario insertado en un array asociativo
                $datosUsuario = $usuarioInsertadoConsultado->fetch_assoc();
                if (!isset($_SESSION['datosUsuario'])) {
                    $_SESSION['datosUsuario'] = $datosUsuario;
                    header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/paginaInicio.php');
                    exit;
                }
            }
        }
    } else {
        $_SESSION['incompleto'] = "falta rellenar";
        header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
        exit;
    }
}
