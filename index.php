<?php

session_start();
// Modificar esto para estructura de cada uno cuando clone el repositorio
$_SESSION['RUTA_BASE'] = 'http://localhost/maquetacion-M09';
$page = $_GET['page'] ?? 'paginaInicio';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/<?php echo $page ?>.css">
    <link rel="stylesheet" href="estilos/global.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="https://kit.fontawesome.com/6f213ce53f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php if (isset($_SESSION['datosUsuario'])) {
        include "html/menu.php";
    } ?>
    <?php include "html/$page.php"; ?>
    <script src="js/index.js"></script>

    <!--Añadir mi Scrtipt-->
    <script src="js/Contacto.js"></script>

    <script src="js/menu.js"></script>
    <script src="js/Registro.js"></script>
</body>
<?php
if (isset($_SESSION['datosUsuario'])) {
    include "html/footer.php";
} ?>

</html>