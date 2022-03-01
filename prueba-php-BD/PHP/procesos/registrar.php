<?php

session_start();
$_SESSION['error'] = '';
//Incluimos la base de datos para traer toda la informacion

include("conexionBD.php");
if (isset($_POST['registrar'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasena']) && !empty($_POST['contrasena2']) && !empty($_POST['email'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $email = $_POST['email'];
        $contrasena2 = $_POST['contrasena2'];
        $contraseña_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
        //Para encriptar la contraseña

        // Comprobamos contraseñas sean iguales, si no, salimos del flujo.
        if ($contrasena !== $contrasena2) {
            $_SESSION['error'] = "las contraseñas no son iguales";
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
            exit;
        }

        /*Es para verificar que no haya un usuario con el mismo nombre*/
        $verificar_usuario = $baseDatos->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
        $verificar_correo = $baseDatos->query("SELECT * FROM usuario WHERE email = '$email'");

        // Si existe un usuario en la base de datos salimos con error.
        if ($verificar_usuario && $verificar_usuario->num_rows > 0) {
            $_SESSION['error'] = "el usuario ya existe";
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
            exit;
        }

<<<<<<< HEAD
            if ($verificar_correo->num_rows > 0) {

                // Haremos la verificacion dcel dominio del correo para que en el rol sea administrador o no de la tabla roles
                if(){

                }

                $_SESSION['yaexiste'] = "el correo ya existe";
                header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
                exit;
            }
=======
        // Si existe un email en la base de datos salimos con error.
        if ($verificar_correo && $verificar_correo->num_rows > 0) {
            $_SESSION['error'] = "el correo ya existe";
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
            exit;
        }
>>>>>>> 9ea5be20ca4e203cc9ab139b90bd9262ffdf8496

        // creamos persona antes de usuario vacia
        $personaQuery = $baseDatos->query('INSERT INTO persona() VALUES ()');

        if (!$personaQuery) {
            $_SESSION['error'] = "Error al crear la persona " . $baseDatos->error;
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
            exit;
        }

        $idPersonaCreada = $baseDatos->insert_id;

        // Si el email tiene @stucom.com será admin, si no, será usuario;
        if (preg_match('/.*@stucom.com/', $email) === 1) {
            $rol = 1;
        } else {
            $rol = 2;
        }

        $usuarioQuery = $baseDatos->query("INSERT INTO usuario (usuario, contrasena, email, rol_id, persona_id) VALUES('$usuario' , '$contraseña_encriptada', '$email', '$rol', '$idPersonaCreada')");

        // Si la query del usuario no sale bien, salimos del flujo.
        if (!$usuarioQuery) {
            $_SESSION['error'] = "Error al crear el usuario " . $baseDatos->error;
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
            exit;
        }

        // recoleccion datos usuario registrado
        $usuarioInsertadoConsultado = $baseDatos->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
        // guardamos los datos del usuario insertado en un array asociativo
        $datosUsuario = $usuarioInsertadoConsultado->fetch_assoc();
        if (!isset($_SESSION['datosUsuario'])) {
            $_SESSION['datosUsuario'] = $datosUsuario;
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/paginaInicio.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "falta rellenar";
        header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/Registro.php');
        exit;
    }
}
