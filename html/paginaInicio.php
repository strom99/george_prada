    <?php
    if (!isset($_SESSION['datosUsuario'])) {
        header('Location: ' . $_SESSION['RUTA_BASE'] . '/index.php?page=InicioSesion');
        exit;
    }
?>