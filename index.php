<?php
session_start();
// Modificar esto para estructura de cada uno cuando clone el repositorio
$_SESSION['RUTA_BASE'] = get_cfg_var('ruta_base');
$page = $_GET['page'] ?? 'paginaInicio';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>George Prada</title>
    <link rel="stylesheet" href="estilos/<?php echo $page ?>.css">
    <link rel="stylesheet" href="estilos/global.css">
    <!-- Style Jquery Zoom -->
    <link rel="stylesheet" href="estilos/zoom.css">
     <!-- Style Jquery Zoom -->
    <script src="js/jquery.min.js"></script>
    <script src="js/global.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- Plugin Jquery Zoom -->
    <script src="js/zoom.min.js"></script>
    <!-- Plugin Jquery Zoom -->
    <script src="https://kit.fontawesome.com/6f213ce53f.js" crossorigin="anonymous"></script>
    <!--Plugin BxSlider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!--Plugin BxSlider -->
    <!-- Libreria Jquery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <!-- Libreria Jquery UI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap" rel="stylesheet">
</head>

<body>
    <?php if (isset($_SESSION['datosUsuario'])) {
        include "html/menu.php"; ?>
        <div class="banner-cookie">
            <div>
                <p>¿Permitir el uso de cookies en este navegador?</p>
                <button id="accept">Acceptar</button>
            </div>
        </div>
    <?php } ?>
    <?php include "html/$page.php"; ?>

    <!-- verificar si existe el archivo js-->
    <?php if (file_exists("js/$page.js")) { ?>
        <script src="js/<?php echo $page ?>.js"></script>
    <?php } ?>


    <?php if (isset($_SESSION['datosUsuario'])) {
        include "html/footer.php";
    } ?>

    <?php
    if (isset($_SESSION['datosUsuario'])) { ?>
        <script src="js/menu.js"></script>
    <?php } ?>

</body>

</html>