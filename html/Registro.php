<div class="centro">
    <div>
        <h1>George Prada</h1>
    </div>
    <div class="contenedorPagina">
        <div class="primeraImg">
            <img src="img/user5.webp" alt="icono usuario">
        </div>
        <form class="formulario" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/registrar.php" method="POST">
            <div class="cajaDatos usuario">
                <p>
                    Nombre de usuario
                </p>
                <input class="datos" type="text" name="usuario" placeholder="Ingresa tu usuario">
            </div>
            <div class="cajaDatos contraseña1">
                <p>
                    Contraseña
                </p>
                <input class="datos contrasena " type="password" name="contrasena" placeholder="Ingresa tu contraseña">
            </div>
            <div class="cajaDatos contrasena2">
                <p>
                    Confirmar Contraseña
                </p>
                <input class="datos" type="password" name="contrasena2" placeholder="Confirmar contraseña">
            </div>
            <div class="cajaDatos correo">
                <p>
                    Correo Electronico
                </p>
                <input class="datos" type="email" name="email" placeholder="Ingresa tu correo">
            </div>
            <div class="formulario-btn">
                <button class="boton" type="submit" name="registrar">Registrar</button>
            </div>
            <!-- Esta session trae el tipo de error al enviar los datos -->
            <?php
            if (isset($_SESSION['error-registro'])) {
            ?> <div class="error-php"><?php echo $_SESSION['error-registro'] ?></div><?php } ?>
        </form>
    </div>
</div>