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


        $smt = $baseDatos->prepare("UPDATE usuario SET usuario = :usuario, email = :email WHERE id = :id");
        $smt->bindParam(':usuario', $usuario);
        $smt->bindParam(':email', $email);
        // $smt->bindParam(':rol', $rol);
        $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
        $result = $smt->execute();

        // actualizamos session del menu nav , para que se cambie el nombre del usuario en la sesion
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

        try{
            $smt = $baseDatos->prepare("SELECT contrasena FROM usuario WHERE id = :id");
            $smt->bindParam(':id', $_SESSION['datosUsuario']['id']);
            $result = $smt->execute();
            $resultado = $smt->fetch();
        }catch(PDOException $e){
            throw new Exception('Hubo un error' . $e->getMessage());
        }
        
        $iguales = password_verify($contraActual, $resultado['contrasena']);
        
        // comprobacion si las contraseña que inserta en actual coincide con la de su cuenta
        if (!$iguales) {
            $response['actual'] = 'error';
            break;
        }

        if($contraNueva != $confirmContra){
            $response['status'] = 'error';
            break;
        }
        
        try{
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
        }catch(PDOException $e){
            throw new Exception('Hubo un error al actualizar los datos' . $e->getMessage());
        }
    break;
};

echo json_encode($response);

?>