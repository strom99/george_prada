<?php
//objeto 
$db_host = get_cfg_var("db_host");
$db_username = get_cfg_var("db_username");
$db_pass = get_cfg_var("db_pass");
$db_name = get_cfg_var("db_name");

try {
    // $baseDatos  = new mysqli($db_host, $db_username, $db_pass, $db_name);
    $dsn = "mysql:host=$db_host;dbname=$db_name";
    $baseDatos = new PDO($dsn, $db_username, $db_pass, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    throw new Exception('La conexión a la base de datos a fallado: ' . $e->getMessage());
}