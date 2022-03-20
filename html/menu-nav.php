<ul class="lista-menu">
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Inicio</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=about-us">Quienes Somos</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=productos">Productos</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contacto</a></li>
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=ChatBot">ChatBot</a>
    </li>
</ul>
<ul class="lista-menu-acciones">
    <li>
        <div class="user-div">
            <a href="">
                <i class="user fas fa-user-circle"></i>
            </a>
            <h3 class="nombre-usuario"><?php echo $_SESSION['datosUsuario']['usuario'] ?></h3>
        </div>
    </li>
    <li class="btn-salir">
        <form action="./procesos/logout.php" method="POST">
            <input type="submit" value="salir">
        </form>
    </li>
</ul>