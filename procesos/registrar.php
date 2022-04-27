<?php
$respuesta = ["data" => $_POST, "error" => null];

session_start();
$_SESSION['error-registro'] = '';
//Incluimos la base de datos para traer toda la informacion

include("conexionBD.php");
if (!empty($_POST['usuario']) && !empty($_POST['contrasena']) && !empty($_POST['contrasena2']) && !empty($_POST['email'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    $contrasena2 = $_POST['contrasena2'];
    $contraseña_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
    //Para encriptar la contraseña

    // Comprobamos contraseñas sean iguales, si no, salimos del flujo.
    if ($contrasena !== $contrasena2) {
        $respuesta['error'] = "Las contraseñas no son iguales";
        echo json_encode($respuesta);
        exit;
    }

    /*Es para verificar que no haya un usuario con el mismo nombre*/
    $verificar_usuario = $baseDatos->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
    $verificar_usuario->bindParam(':usuario', $usuario);
    $confirmacion_usuario = $verificar_usuario->execute();

    $verificar_correo = $baseDatos->prepare("SELECT * FROM usuario WHERE email = :email");
    $verificar_correo->bindParam(':email', $email);
    $confirmacion_correo = $verificar_correo->execute();

    // Si existe un usuario en la base de datos salimos con error.
    if ($confirmacion_usuario && $verificar_usuario->rowCount() > 0) {
        $respuesta['error'] = "El usuario ya existe";
        echo json_encode($respuesta);
        exit;
    }

    // Si existe un email en la base de datos salimos con error.
    if ($confirmacion_correo && $verificar_correo->rowCount() > 0) {
        $respuesta['error'] = "El correo ya existe";
        echo json_encode($respuesta);
        exit;
    }

    // creamos persona antes de usuario vacia
    $personaQuery = $baseDatos->query('INSERT INTO persona() VALUES ()');

    if (!$personaQuery) {
        $respuesta['error'] = "Error al crear la persona " . $baseDatos->errorInfo()[2];
        echo json_encode($respuesta);
        exit;
    }

    $idPersonaCreada = $baseDatos->lastInsertId();

    // Si el email tiene @stucom.com será admin, si no, será usuario;
    if (preg_match('/.*@stucom.com/', $email) === 1) {
        // admin
        $rol = 1;
    } else {
        $rol = 2;
    }

    $usuarioQuery = $baseDatos->prepare("INSERT INTO usuario (usuario, contrasena, email, rol_id, persona_id) VALUES(:usuario, :contrasenaEncrip, :email, :rol, :idPersonaCreada)");
    $usuarioInserted = $usuarioQuery->execute([
        ':usuario' => $usuario,
        ':contrasenaEncrip' => $contraseña_encriptada,
        ':email' => $email,
        ':rol' => $rol,
        ':idPersonaCreada' => $idPersonaCreada
    ]);

    // Si la query del usuario no sale bien, salimos del flujo.
    if (!$usuarioInserted) {
        $respuesta['error'] = "Error al crear el usuario" . $usuarioQuery->errorInfo()[2];
        echo json_encode($respuesta);
        exit;
    }

    // recoleccion datos usuario registrado
    $usuarioInsertadoConsultado = $baseDatos->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
    $usuarioInsertadoConsultado->bindParam(':usuario', $usuario);
    $usuarioInsertadoConsultado->execute();
    // guardamos los datos del usuario insertado en un array asociativo
    $datosUsuario = $usuarioInsertadoConsultado->fetch();
    if (!isset($_SESSION['datosUsuario'])) {
        $_SESSION['datosUsuario'] = $datosUsuario;
        $respuesta['error'] = null;
        $respuesta['url'] = $_SESSION["RUTA_BASE"] . '/index.php?page=paginaInicio';
        echo json_encode($respuesta);
        exit;
    }
} else {
    $respuesta['error'] = "Falta rellenar";
    echo json_encode($respuesta);
    exit;
}
