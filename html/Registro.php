<div class="centro">
    <div class="centro-part1">
        <div class="imagen-george-prada">
        <img src="img/Group2.png" alt="group2">
        </div>
        <div class="contenedorPagina detalles">
            <div class="primeraImg">
                <img src="img/user5.webp" alt="icono usuario">
            </div>
            <form class="formulario" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/registrar.php" method="POST">
                <div class="cajaDatos usuario">
                    <p>
                        Username
                    </p>
                    <input class="datos" type="text" name="usuario" placeholder="Enter your username">
                </div>
                <div class="cajaDatos contraseña1">
                    <p>
                        Password
                    </p>
                    <input class="datos contrasena " type="password" name="contrasena" placeholder="Enter your password">
                </div>
                <div class="cajaDatos contrasena2">
                    <p>
                        Confirm Password
                    </p>
                    <input class="datos" type="password" name="contrasena2" placeholder="Confirm Password">
                </div>
                <div class="cajaDatos correo">
                    <p>
                            Email
                    </p>
                    <input class="datos" type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="formulario-btn">
                    <button class="boton" type="submit" name="registrar">Register</button>
                </div>

                <div id="mensaje-error" class="mensaje-error">
                </div>
                <!-- Esta session trae el tipo de error al enviar los datos, pero con ajax ya no hace falta -->
            </form>
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