<?php

session_start();
include_once '../procesos/conexionBD.php';

$response = [];
// formularios de actualizacion perfil
switch ($_POST['form']) {
    case 'formInfoCuenta':
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];

        // actualizamos session del menu nav , para que se cambie el nombre del usuario en la sesion
        $_SESSION['datosUsuario']['usuario'] = $usuario;
        $_SESSION['datosUsuario']['email'] = $email;

        $smt = $baseDatos->prepare("UPDATE usuario SET usuario = :usuario, email = :email WHERE id = :id");
        $smt->bindParam(':usuario', $usuario);
        $smt->bindParam(':email', $email);
        // $smt->bindParam(':rol', $rol);
        $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
        $result = $smt->execute();

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

        try {
            $smt = $baseDatos->prepare("SELECT contrasena FROM usuario WHERE id = :id");
            $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
            $result = $smt->execute();
            $resultado = $smt->fetch();
        } catch (PDOException $e) {
            throw new Exception('Hubo un error' . $e->getMessage());
        }

        $iguales = password_verify($contraActual, $resultado['contrasena']);

        // comprobacion si las contraseña que inserta en actual coincide con la de su cuenta
        if (!$iguales) {
            $response['actual'] = 'error';
            break;
        }

        if ($contraNueva != $confirmContra) {
            $response['status'] = 'error';
            break;
        }

        $response['dats'] = $resultado;
        try {
            $contraEncript = password_hash($contraNueva, PASSWORD_BCRYPT);
            $update = $baseDatos->prepare("UPDATE usuario SET contrasena = :contraNueva  WHERE id = :id");
            $update->execute(
                [
                    ':contraNueva' => $contraEncript,
                    ':id' => $_SESSION['datosUsuario']['id']
                ]
            );
            $resultUpdate = $update->execute();
            $response['status'] = "ok";
        } catch (PDOException $e) {
            throw new Exception('Hubo un error al actualizar los datos' . $e->getMessage());
        }
        break;
    case 'formContacto':
        $nombre = $_POST['nombre'];
        $primerApellido = $_POST['priApellido'];
        $segundoApellido = $_POST['seApellido'];
        $telefono = $_POST['telefono'];


        $smt = $baseDatos->prepare("UPDATE persona SET nombre = :nombre, apellido_1 = :priApellido, apellido_2 = :seApellido, telefono = :telefono WHERE id = :id");
        $smt->bindParam(':nombre', $nombre);
        $smt->bindParam(':priApellido', $primerApellido);
        $smt->bindParam(':seApellido', $segundoApellido);
        $smt->bindParam(':telefono', $telefono);
        // $smt->bindParam(':rol', $rol);
        $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
        $result = $smt->execute();

        $response['error_message'] = $smt->errorInfo();
        if ($result) {
            $response['status'] = 'ok';
            $response['nombre'] = $nombre;
        } else {
            $response['status'] = $result;
        }
        break;
        case 'formDatsComplementarios':
            $fechaNacimiento = $_POST['fechaNacimiento'];
            $pais = $_POST['pais'];
            $ciudad = $_POST['ciudad'];

            $smt = $baseDatos->prepare("UPDATE persona SET fecha_nacimiento = :fechaNacimiento, pais = :pais, ciudad = :ciudad  WHERE id = :id");
            $smt->bindParam(':fechaNacimiento', $fechaNacimiento);
            $smt->bindParam(':pais', $pais);
            $smt->bindParam(':ciudad', $ciudad);
            // $smt->bindParam(':rol', $rol);
            $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
            $result = $smt->execute();

            $response['error_message'] = $smt->errorInfo();
            if ($result) {
                $response['status'] = 'ok';
                $response['pais'] = $pais;
            } else {
                $response['status'] = $result;
            }
        break;
};

echo json_encode($response);
