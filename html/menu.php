<header class="barra-menu">
    <nav class="menu-hamburguesa">
        <ul>
            <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Inicio</a></li>
            <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contacto</a></li>
            <li>
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=ChatBot">ChatBot</a>
            </li>
        </ul>
    </nav>
    <form action="./procesos/logout.php" method="POST">
        <input type="submit" value="salir">
    </form>
</header>