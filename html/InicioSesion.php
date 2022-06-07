<div class="box-login" >
    <div class="centro">
        <div class="imagen-george-prada">
            <img src="img/gplogo2.png" alt="" srcset="">
        </div>
        <div class="formularioLogin">
            <div>
                <button class="btn-sencill">Register with Facebook</button>
                <button class="btn-sencill">Register with Google</button>
            </div>
            <form class="formularioLogin" action="<?php echo $_SESSION['RUTA_BASE'] ?>/procesos/proceso_login.php" method="POST">
                <div class="cajaDatos">
                    <div class="caja-datos-user">
                        <label for="nombreUsuario">
                            <img src="img/user15.png" alt="icono usuario">
                        </label>
                        <input class="datos datos-user" name="user" type="text" id="nombreUsuario" placeholder="Usuario">
                    </div>
                </div>
                <div class="cajaDatos">
                    <div class="caja-datos-contra">
                        <label for="contraUsuario">
                            <img src="img/candado1.png" alt="icono candado">
                        </label>
                        <input class="datos" name="password" type="password" id="contraUsuario" placeholder="Contraseña">
                    </div>
                </div>
                <input class="boton-inicio" name="boton-inicio" type="submit" value="Log in">
            </form>
            <div id="mensaje" class="mensaje-error-login">
            </div>
        </div>
    </div>
    <div class="box-information">
        <div>
            <img src="img/verano-girl.jpg" alt="">
        </div>
        <section>
            <h3>Are you ready dor this summer??</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat fugit rem labore voluptate aspernatur, repellendus ea quam dolores quisquam in consectetur est provident mollitia. Iusto quis provident delectus veniam rem!</p>
        </section>
    </div>
</div>