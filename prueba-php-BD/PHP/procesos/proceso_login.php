<?PHP
session_start();
include('conexionBD.php');

if (isset($_POST['boton-inicio'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //$usuario = $_POST['usuario'] ?? null;
    $consultaLogin = $baseDatos->query("SELECT * FROM persona WHERE usuario = '$usuario'");
    $numResult = $consultaLogin->num_rows;

    $datosUsuario = $consultaLogin->fetch_assoc();
    $userContrasena = $datosUsuario['Contrasena'];

    if ($numResult == 1 && password_verify($contrasena, $userContrasena)) {

        $_SESSION['bienvenido'] = "Bienvenido";
        $_SESSION['datosUsuario'] = $datosUsuario;
        header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/paginaInicio.php');
        exit;
    } else {
        $_SESSION['error'] = "usuario o contraseña incorrectos";
        header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/InicioSesion.php');
        exit;
    }
} else {
    echo "fallo";
}
