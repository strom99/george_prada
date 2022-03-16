<header class="barra-menu">
    <div class="menu-hamburguesa">
        <button>
            <i class=" menu fas fa-bars"></i>
        </button>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=paginaInicio">Inicio</a></li>
            <li><a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Contacto">Contacto</a></li>
            <li>
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=ChatBot">ChatBot</a>
            </li>
        </ul>
        <a href="">
                <i class="user fas fa-user-circle"></i>
            </a>
            <a href="">
                <i class="bolsa fas fa-shopping-bag"></i>
            </a>
    </nav>
    <form action="./procesos/logout.php" method="POST">
        <input type="submit" value="salir">
    </form>
</header>
