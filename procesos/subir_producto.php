<?php
include("conexionBD.php");

if ($_POST['submit']) {
        $nombre_producto = $_POST['nombre_producto'];
        $desc_producto = $_POST['desc_producto'];
        $valor_producto = $_POST['valor_producto'];
        $cantidad_producto = $_POST['cantidad_producto'];
}



?>