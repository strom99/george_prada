<ul class="lista-menu">
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Inicio</a></li>
    <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contacto</a></li>
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=ChatBot">ChatBot</a>
    </li>
</ul>
<ul class="lista-menu-acciones">
    <li>
        <a href="">
            <i class="user fas fa-user-circle"></i>
        </a>
    </li>
    <li>
        <a href="">
            <i class="bolsa fas fa-shopping-bag"></i>
        </a>
    </li>
    <li>
        <form action="./procesos/logout.php" method="POST">
            <input type="submit" value="salir">
        </form>
    </li>
</ul>