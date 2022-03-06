<?php

session_start();
session_destroy();
header('Location: ' . $_SESSION["RUTA_BASE"] . '/index.php?page=InicioSesion');
exit;
