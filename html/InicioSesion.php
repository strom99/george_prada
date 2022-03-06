<div class="centro">
    <div>
        <h4>George Prada</h4>
    </div>
    <div class="contenedorPagina">
        <div class="imagen-user">
            <img src="img/user-circle-solid.svg" alt="icono usuario">
        </div>
        <form class="formulario" action="procesos/proceso_login.php" method="POST">

            <div class="cajaDatos">
                <label for="nombreUsuario">
                    <img src="img/user-circle-solid.svg" alt="icono usuario">
                </label>
                <input class="datos" name="usuario" type="text" id="nombreUsuario" placeholder="Usuario">
            </div>
            <div class="cajaDatos">
                <label for="contraUsuario">
                    <img src="img/lock-solid.svg" alt="icono candado">
                </label>
                <input class="datos" name="contrasena" type="password" id="contraUsuario" placeholder="Contraseña">
            </div>
            <input class="boton-inicio" name="boton-inicio" type="submit" value="Iniciar Sesion">
            <nav class="navegador">
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Registro">¿No tienes cuenta? Crea una ahora</a>
            </nav>
            <div>
                <p> O ingresa con ...</p>
                <div class="ingresoEnlazado">
                    <a href=#>
                        <img src="img/facebook-f-brands.svg" alt="">
                    </a>
                    <a href=#>
                        <img src="img/google-brands.svg" alt="">
                    </a>
                </div>
                <a class="contacto" href=#>Ponte en contacto con nosotros</a>
            </div>
        </form>
        <?php

        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }

        ?>


    </div>
</div>