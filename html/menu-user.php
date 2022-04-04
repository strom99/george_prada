<div class="nombre_usuario">
    <h4>Cuenta de <?php echo $_SESSION['datosUsuario']['usuario'] ?></h4>
</div>
<ul class="lista-opcion-user">
    <li>
        <a href="">Mi perfil</a>
    </li>
    <li>
        <a href="">Mis pedidos</a>
    </li>
    <li>
        <a href="">Mis notificaciones</a>
    </li>
    <li>
        <a href="">Lista de deseo</a>
    </li>
</ul>
<ul class="lista-menu-acciones">
    <li class="btn-salir">
        <form action="./procesos/logout.php" method="POST">
            <input type="submit" value="salir">
        </form>
    </li>
</ul>