<div class="box-login">
    <div class="centro">
        <div class="imagen-george-prada">
            <img src="img/gplogo2.png" alt="" srcset="">
        </div>
        <div class="formularioLogin margin">
            <div class="detalles box-options-register">
                <button class="btn-sencill">
                    <svg class="lg-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="DodgerBlue">
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                    </svg>
                    <p> Log in with Facebook</p>
                </button>
                <button class="btn-sencill">
                    <img src="./img/google.png" alt="">
                    <p>Log in with Gmail</p>
                </button>
            </div>
            <div class="hr-detalles">
                <hr>
                <span>o</span>
                <hr>
            </div>
            <form class="formularioLogin" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/proceso_login.php" method="POST">
                <div class="cajaDatos usuario caja-datos-user">
                    <p class="icono-user" for="usuario">
                        <i class="fa-solid fa-user"></i>
                    </p>
                    <input class="datos datos-user" type="text" id="nombreUsuario" name="user" placeholder="Username">
                </div>
                <div class="cajaDatos  caja-datos-contra">
                    <p class="icono-user" for="usuario">
                        <i class="fa-solid fa-lock"></i>
                    </p>
                    <input class="datos" type="password" id="contraUsuario" name="password" placeholder="Password">
                </div>
                <input class="boton-inicio" name="boton-inicio" type="submit" value="Log in">
            </form>
            <div id="mensaje" class="mensaje-error-login">
            </div>

            <div class="linksRegister">
                <hr>
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=Registro">Don't have an account yet???</a>
                <a href="#">Did you forget your password?</a>
            </div>
        </div>
    </div>
    <div class=" box-information">
                    <div>
                        <img src="img/verano-girl.jpg" alt="">
                    </div>
                    <section>
                        <h3>Are you ready dor this summer??</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugit rem labore voluptate aspernatur, repellendus ea quam dolores quisquam in consectetur est provident mollitia. Iusto quis provident delectus veniam rem!</p>
                    </section>
            </div>
        </div>