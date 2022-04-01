<?PHP
session_start();
include 'conexionBD.php';
$_SESSION['error'] = '';

if (isset($_POST['boton-inicio'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {

        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        //$usuario = $_POST['usuario'] ?? null;
        // Para evitar ataques conocidos como SQL INJECTION
        $consultaLogin = $baseDatos->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
        $consultaLogin->bindParam(':usuario', $usuario);
        $consultaLogin->execute();

        $numResult = $consultaLogin->rowCount(); // antes ->num_rows

        $datosUsuario = $consultaLogin->fetch(); // antes -> fetch_assoc();
        $userContrasena = $datosUsuario['contrasena'];

        if ($numResult > 0 && password_verify($contrasena, $userContrasena)) {
            $_SESSION['datosUsuario'] = $datosUsuario;
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=paginaInicio');
            exit;
        } else {
            $_SESSION['error'] = "usuario o contraseña incorrectos";
            header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=InicioSesion');
            exit;
        }
    } else {
        $_SESSION['error'] = "rellena todos los campos";
        header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=paginaInicio');
        exit;
    }
}
