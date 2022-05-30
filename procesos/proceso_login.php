<?PHP
$respuestalogin = ["data" => $_POST, "error" => null];
session_start();

try{
    include 'conexionBD.php';

    if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {

        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        //$usuario = $_POST['usuario'] ?? null;
        // Para evitar ataques conocidos como SQL INJECTION
        $consultaLogin = $baseDatos->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
        $consultaLogin->bindParam(':usuario', $usuario);
        $resultadoConsultaLogin = $consultaLogin->execute();

        $numResult = $consultaLogin->rowCount(); // antes ->num_rows

        if ($numResult === 0) {
            $respuestalogin['error'] = "Usuario o contraseña incorrectos";
            echo json_encode($respuestalogin);
            exit;
        }

        $datosUsuario = $consultaLogin->fetch(); // antes -> fetch_assoc();
        $userContrasena = $datosUsuario['contrasena'];

        if (password_verify($contrasena, $userContrasena)) {
            $_SESSION['datosUsuario'] = $datosUsuario;
            $respuestalogin['error'] = null;
            $respuestalogin['url'] = $_SESSION["RUTA_BASE"] . '/index.php?page=paginaInicio';
            echo json_encode($respuestalogin);
            exit;
        } else {
            $respuestalogin['error'] = "Usuario o contraseña incorrectos";
            echo json_encode($respuestalogin);
            exit;
        }
    } else {
        $respuestalogin['error'] = "Falta rellenar";
        echo json_encode($respuestalogin);
        exit;
    }
}catch(Exception $e){
    $respuestalogin['error'] = "Ha ocurrido un error inesperado, intentalo de nuevo mas tarde";
    echo json_encode($respuestalogin);
    exit;
}

