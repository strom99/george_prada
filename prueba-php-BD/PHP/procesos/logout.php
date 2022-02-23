<?php

if (isset($_POST['salir'])) {
    session_start();
    session_destroy();
    header('Location: http://localhost/maquetacion-M09/prueba-php-BD/html/InicioSesion.php');
    exit;
}
