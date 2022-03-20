<?php

session_start();
// Modificar esto para estructura de cada uno cuando clone el repositorio
$_SESSION['RUTA_BASE'] = 'http://localhost/george_prada';
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
    <script src="https://kit.fontawesome.com/6f213ce53f.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php if (isset($_SESSION['datosUsuario'])) {
        include "html/menu.php";
    } ?>
    <?php include "html/$page.php"; ?>
    <script src="js/index.js"></script>
</body>
<?php if (isset($_SESSION['datosUsuario'])) {
    include "html/footer.php";
} ?>

</html>