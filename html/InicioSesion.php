<div class="centro">
    <div>
        <h1>George Prada</h1>
    </div>
    <div class="contenedorPagina">
        <div class="imagen-user">
            <img src="img/user5.webp" alt="icono usuario">
        </div>
        <form class="formularioLogin" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/proceso_login.php" method="POST">
            <div class="cajaDatos">
                <div class="caja-datos-user">
                    <label for="nombreUsuario">
                        <img src="img/user15.png" alt="icono usuario">
                    </label>
                    <input class="datos datos-user" name="usuario" type="text" id="nombreUsuario" placeholder="Usuario">
                </div>
            </div>
            <div class="cajaDatos">
                <div class="caja-datos-contra">
                    <label for="contraUsuario">
                        <img src="img/candado1.png" alt="icono candado">
                    </label>
                    <input class="datos" name="contrasena" type="password" id="contraUsuario" placeholder="Contraseña">
                </div>
            </div>
            <input class="boton-inicio" name="boton-inicio" type="submit" value="Iniciar Sesion">
            <nav class="navegador">
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Registro">¿No tienes cuenta? <span>Crea una
                        ahora</span></a>
            </nav>
            <div>
                <p>Puedes ingresar con tus redes sociales:</p>
                <div class="ingresoEnlazado">
                    <a class="facebook-icono" href=#>
                        <img src="img/facebook-f-brands.svg" alt="">
                    </a>
                    <a class="google-icono" href=#>
                        <img src="img/google-brands.svg" alt="">
                    </a>
                </div>
                <a class="contacto" href=#>Ponte en contacto con nosotros</a>
            </div>
        </form>
        <div id="mensaje" class="mensaje-error-login">
        </div>
    </div>
</div>