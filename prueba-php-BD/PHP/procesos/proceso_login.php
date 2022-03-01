<?PHP
session_start();
include('conexionBD.php');
$_SESSION['error'] = '';

if (isset($_POST['boton-inicio'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {

        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        //$usuario = $_POST['usuario'] ?? null;
        $consultaLogin = $baseDatos->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
        $numResult = $consultaLogin->num_rows;

        $datosUsuario = $consultaLogin->fetch_assoc();
        $userContrasena = $datosUsuario['contrasena'];

        if ($numResult > 0 && password_verify($contrasena, $userContrasena)) {
            $_SESSION['datosUsuario'] = $datosUsuario;
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/paginaInicio.php');
            exit;
        } else {
            $_SESSION['error'] = "usuario o contraseña incorrectos";
            header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/InicioSesion.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "rellena todos los campos";
        header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/paginaInicio.php');
        exit;
    }
}
