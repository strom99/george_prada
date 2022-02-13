<?PHP
session_start();
include('../procesos/conexionBD.php');


if (isset($_POST['btn_login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //$usuario = $_POST['usuario'] ?? null;
    $consultaLogin = $baseDatos->query("SELECT * FROM persona WHERE usuario = '$usuario'");
    $numResult = $consultaLogin->num_rows;
    $userContrasena = $consultaLogin->fetch_assoc()['Contrasena'];

    if ($numResult == 1 && password_verify($contrasena, $userContrasena)) {

        $_SESSION['bienvenido'] = "Bienvenido";
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: http://localhost/maquetacion-M09/PHP/formularios/paginaInicio.php');
        exit;
    } else {
        $_SESSION['error'] = "usuario o contraseña incorrectos";
        header('Location: http://localhost/maquetacion-M09/PHP/formularios/login.php');
        exit;
    }
}
