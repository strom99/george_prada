<div class="nombre_usuario">
    <h4>Cuenta de <?php echo $_SESSION['datosUsuario']['usuario'] ?></h4>
</div>
<ul class="lista-opcion-user">
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=miPerfil">Mi perfil</a>
    </li>
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=miPerfil">Mis pedidos</a>
    </li>
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=miPerfil">Mis notificaciones</a>
    </li>
    <li>
        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=miPerfil">Lista de deseo</a>
    </li>
</ul>
<ul class="lista-menu-acciones">
    <li class="btn-salir">
        <form action="./procesos/logout.php" method="POST">
            <input class="salir-usuario" type="submit" value="salir">
        </form>
    </li>
</ul>