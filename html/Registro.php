<div class="centro">
    <div>
        <h4>George Prada</h4>
    </div>
    <div class="contenedorPagina">
        <div class="primeraImg">
            <img src="img/user-circle-solid.svg" alt="">
        </div>
        <form class="formulario" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/registrar.php" method="POST">
            <div class="cajaDatos usuario">
                <p>
                    Nombre de usuario*
                </p>
                <input class="datos" type="text" name="usuario" placeholder="Ingresa tu usuario">
            </div>
            <div class="cajaDatos contraseña1">
                <p>
                    Contraseña*
                </p>
                <input class="datos" type="password" name="contrasena" placeholder="Ingresa tu contraseña">
            </div>
            <div class="cajaDatos contrasena2">
                <p>
                    Confirmar Contraseña*
                </p>
                <input class="datos" type="password" name="contrasena2" placeholder="Confirmar contraseña">
            </div>
            <div class="cajaDatos correo">
                <p>
                    Correo*
                </p>
                <input class="datos" type="email" name="email" placeholder="Ingresa tu correo">
            </div>
            <div class="formulario-footer">
                <p class="terminos">Al registrarte aceptos nuestros términos</p>
                <button class="boton" type="submit" name="registrar">Registrar</button>
            </div>


            <?php

            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
            }

            ?>
        </form>
    </div>
</div>