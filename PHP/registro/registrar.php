<?php

include("conexionBD.php");

if ($baseDatos) {
    echo "correcto";
} else {
    echo "incorrecto";
}
/*
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
*/



if (isset($_POST['registrar'])) {
    if (isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['apellido1']) && isset($_POST['apellido2']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['edad'])) {
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contraseña']);
        $email = trim($_POST['email']);
        $nombre = trim($_POST['nombre']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $edad = trim($_POST['edad']);

        $consulta = "INSERT INTO persona(Usuario, Contraseña, Email,Nombre,Apellido1,Apellido2 , Telefono , Direccion ,Edad) VALUES('$usuario' , '$contraseña', '$email' , '$nombre' ,'$apellido1' , '$apellido2' ,'$telefono', '$direccion' , '$edad')";

        $resultadoConsulta = mysqli_query($baseDatos, $consulta);

        if ($resultadoConsulta) {
            echo "inscrito!!!!";
        } else {
            echo "inscrito no";
        }
    } else {
        echo "completa todos los datos";
    }
}
