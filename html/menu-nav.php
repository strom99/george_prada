<ul class="lista-menu">
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Inicio</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=about-us">Quienes Somos</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=productos">Productos</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contacto</a></li>
   <?php
    $email = $_SESSION['datosUsuario']['email'];
    if (preg_match('/.*@stucom.com/', $email) == 1) { ?>
        <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=crear_productos">Subir Productos</a></li>
    <?php }
    ?>
</ul>