<ul class="lista-menu">
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Main</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=about-us">About Us</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=productos">Products</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contact</a></li>
   <?php
    $email = $_SESSION['datosUsuario']['email'];
    if (preg_match('/.*@stucom.com/', $email) == 1) { ?>
        <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=crear_productos">Upload Products</a></li>
    <?php }
    ?>
</ul>