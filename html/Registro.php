<div class="centro">
    <div class="centro-part1">
        <div class="imagen-george-prada">
            <img src="img/gplogo.png" alt="group2">
        </div>
        <div class="contenedorPagina detalles">
            <div>
                <h3>Registrate en George Prada</h3>
            </div>
            <div>
                <button>Registrate con Facebook</button>
                <button>Registrate con Gmail</button>
            </div>
            <form class="formulario" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/registrar.php" method="POST">
                <div class="cajaDatos usuario">
                    <p for="usuario">
                        <i class="fa-solid fa-user"></i>
                    </p>
                    <input class="datos" type="text" name="usuario" placeholder="Username">
                </div>
                <div class="cajaDatos contraseña1">
                    <p>
                        <i class="fa-solid fa-lock"></i>
                    </p>
                    <input class="datos contrasena " type="password" name="contrasena" placeholder="Password">
                </div>
                <div class="cajaDatos contrasena2">
                    <p>
                        <i class="fa-solid fa-key"></i>
                    </p>
                    <input class="datos" type="password" name="contrasena2" placeholder="Confirm Password">
                </div>
                <div class="cajaDatos correo">
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                    </p>
                    <input class="datos" type="email" name="email" placeholder="Gmail">
                </div>
                <div class="formulario-btn">
                    <button class="boton" type="submit" name="registrar">Register</button>
                </div>
                <hr>
                <div>
                    <a>Log in</a>
                    <span>.</span>
                    <a>¿Did you forgotten your password?</a>
                </div>
            </form>
            
            <div id="mensaje-error" class="mensaje-error"></div>
            <!-- Esta session trae el tipo de error al enviar los datos, pero con ajax ya no hace falta -->
        </div>
    </div>
    <div class="contenedor-presentacion">
        <div class="caja-imagen-presentacion">
            <img src="img/card4.png" alt="conjunto ropa deportiva">
        </div>
        <div>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Comodidad al tacto</h2>
                </div>
            </section>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Encuentra tu mejor estilo</h2>
                </div>
            </section>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Personaliza tu vida deportiva</h2>
                </div>
            </section>
        </div>
    </div>
</div>