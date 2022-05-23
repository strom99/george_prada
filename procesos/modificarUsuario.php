<?php

session_start();
include_once '../procesos/conexionBD.php';

$response = [];

switch ($_POST['form']) {
    case 'formInfoCuenta':
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];


        $smt = $baseDatos->prepare("UPDATE usuario SET usuario = :usuario, email = :email WHERE id = :id");
        $smt->bindParam(':usuario', $usuario);
        $smt->bindParam(':email', $email);
        // $smt->bindParam(':rol', $rol);
        $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
        $result = $smt->execute();

        $_SESSION['datosUsuario']['usuario'] = $usuario;
        $_SESSION['datosUsuario']['email'] = $email;

        if ($result) {
            $response['status'] = 'ok';
            $response['usuario'] = $usuario;
        } else {
            $response['status'] = 'error';
        }
    break;
    case 'formContrasenas':
        $contraActual = $_POST['contraActual'];
        $contraNueva = $_POST['contraNueva'];
        $confirmContra = $_POST['confirmContra'];

        $smt = $baseDatos->prepare("SELECT contrasena FROM usuario WHERE id = :id");
        $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
        $result = $smt->execute();
        $resultado = $smt->fetch();

        $iguales = password_verify($contraActual, $resultado['contrasena']);

        if ($result) {
            $response['status'] = 'ok';
            
        } else {
            $response['status'] = 'error';
        }

    break;
};

echo json_encode($response);

?>