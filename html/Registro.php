<div class="centro">
    <div class="centro-part1">
        <header class="imagen-george-prada">
            <img src="img/gplogo2.png" alt="group2">
        </header>
        <div >
            <div class="detalles contenedorPagina">
                <div class="box-title">
                    <h3>Registrate en George Prada</h3>
                </div>
                <div class="detalles box-options-register">
                    <button class="btn-sencill">
                        <svg class="lg-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="DodgerBlue"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        <p> Registrate con Facebook</p>
                    </button>
                    <button class="btn-sencill">
                        <img src="./img/google.png" alt="">   
                        <p>Registrate con Gmail</p>    
                    </button>
                </div>
                <form class="formulario" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/registrar.php" method="POST">
                    <div class="cajaDatos usuario">
                        <p class="icono-user" for="usuario">
                            <i class="fa-solid fa-user"></i>
                        </p>
                        <input class="datos" type="text" name="usuario" placeholder="Username">
                    </div>
                    <div class="cajaDatos contraseña1">
                        <p class="icono-user">
                            <i class="fa-solid fa-lock"></i>
                        </p>
                        <input class="datos contrasena " type="password" name="contrasena" placeholder="Password">
                    </div>
                    <div class="cajaDatos contrasena2">
                        <p class="icono-user">
                            <i class="fa-solid fa-key"></i>
                        </p>
                        <input class="datos" type="password" name="contrasena2" placeholder="Confirm Password">
                    </div>
                    <div class="cajaDatos correo">
                        <p class="icono-user">
                            <i class="fa-solid fa-envelope"></i>
                        </p>
                        <input class="datos" type="email" name="email" placeholder="Gmail">
                    </div>
                    <div class="formulario-btn">
                        <button class="boton btn-general" type="submit" name="registrar">Register</button>
                    </div>
                    <hr>
                    <div>
                        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=InicioSesion">Log in</a>
                        <span>.</span>
                        <a href="#">¿Did you forgotten your password?</a>
                    </div>
                </form>
                
                <div id="mensaje-error" class="mensaje-error"></div>
                <!-- Esta session trae el tipo de error al enviar los datos, pero con ajax ya no hace falta -->
            </div>
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