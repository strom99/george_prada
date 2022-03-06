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
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
            exit;
        }

        /*Es para verificar que no haya un usuario con el mismo nombre*/
        $verificar_usuario = $baseDatos->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
        $verificar_correo = $baseDatos->query("SELECT * FROM usuario WHERE email = '$email'");

        // Si existe un usuario en la base de datos salimos con error.
        if ($verificar_usuario && $verificar_usuario->num_rows > 0) {
            $_SESSION['error'] = "el usuario ya existe";
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
            exit;
        }

        // Si existe un email en la base de datos salimos con error.
        if ($verificar_correo && $verificar_correo->num_rows > 0) {
            $_SESSION['error'] = "el correo ya existe";
            header('Location:' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
            exit;
        }

        // creamos persona antes de usuario vacia
        $personaQuery = $baseDatos->query('INSERT INTO persona() VALUES ()');

        if (!$personaQuery) {
            $_SESSION['error'] = "Error al crear la persona " . $baseDatos->error;
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
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
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
            exit;
        }

        // recoleccion datos usuario registrado
        $usuarioInsertadoConsultado = $baseDatos->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
        // guardamos los datos del usuario insertado en un array asociativo
        $datosUsuario = $usuarioInsertadoConsultado->fetch_assoc();
        if (!isset($_SESSION['datosUsuario'])) {
            $_SESSION['datosUsuario'] = $datosUsuario;
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=paginaInicio');
            exit;
        }
    } else {
        $_SESSION['error'] = "falta rellenar";
        header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=Registro');
        exit;
    }
}
