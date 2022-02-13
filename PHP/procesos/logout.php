<?php

if (isset($_POST['salir'])) {
    session_start();
    session_destroy();
    header('Location: http://localhost/maquetacion-M09/PHP/formularios/login.php');
    exit;
}
