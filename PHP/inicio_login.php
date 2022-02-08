<?php
$baseDatos  = new mysqli("localhost", "root", "", "transversal");

//comprobar si la conexion existe

if (!$baseDatos->connect_errno) {
    $result = $baseDatos->query('SELECT nombre FROM usuarios');

    if ($result) {
        /*while ($usuario = $result->fetch_assoc()) {
            echo $usuario['nombre'] . '<br>';
        }*/

        echo 'Usuarios en la base de datos: ' . $result->num_rows . '<br>';

        if ($result->num_rows > 0) {
            $usuarios = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($usuarios as $usuario) {
                echo $usuario['nombre'] . '<br >';
            }
        }
    } else {
        echo  "Error en la consulta";
    }
}
