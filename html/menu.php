<header class="barra-menu">
    <div class="mobile-menu_logo">
        <button class="hamburguesa">
            <i class=" menu fas fa-bars"></i>
        </button>

        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
    </div>

    <nav class="nav-desktop">
        <?php include('html/menu-nav.php') ?>
    </nav>

    <nav class="nav-mobile">
        <?php include('html/menu-nav.php') ?>
    </nav>
    <div class="user_btns">
        <div class="user-div">
            <h3 class="nombre-usuario"><?php echo $_SESSION['datosUsuario']['usuario'] ?></h3>
            <nav class="user-icon">
                <i class="user fas fa-user-circle"></i>
            </nav>
        </div>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=mostrarCarrito">
            <i class="bolsa fas fa-shopping-bag"><span> <?php 
                if(empty($_SESSION['CARRITO'])){
                    echo 0;
                }else{
                    echo count($_SESSION['CARRITO']);
                }                
            ?></span></i>
        </a>
    </div>
    <div class="menu-user-general">
        <nav class="nav-user-desktop">
            <?php include('html/menu-user.php') ?>
        </nav>
        <nav class="nav-user-mobile">
            <?php include('html/menu-user.php') ?>
        </nav>
    </div>
</header>