<div class="centro">
    <div class="centro-part1">
        <div>
            <h1>George Prada</h1>
        </div>
        <div class="contenedorPagina detalles">
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

                <div id="mensaje-error">
                </div>
                <!-- Esta session trae el tipo de error al enviar los datos, pero con ajax ya no hace falta -->
            </form>
        </div>
    </div>
    <div class="contenedor-presentacion">
        <div class="caja-imagen-presentacion">
            <img src="img/conjunto.webp" alt="conjunto ropa deportiva">
        </div>
        <div>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Comodidad al tacto</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis sint cumque nesciunt a deserunt reprehenderit perferendis eos quaerat exercitationem, recusandae eius qui placeat architecto, facere excepturi cum ad repellendus mollitia.</p>
            </section>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Encuentra tu mejor estilo</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis sint cumque nesciunt a deserunt reprehenderit perferendis eos quaerat exercitationem, recusandae eius qui placeat architecto, facere excepturi cum ad repellendus mollitia.</p>
            </section>
            <section>
                <div>
                    <i class="fa-solid fa-check"></i>
                    <h2>Personaliza tu vida deportiva</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis sint cumque nesciunt a deserunt reprehenderit perferendis eos quaerat exercitationem, recusandae eius qui placeat architecto, facere excepturi cum ad repellendus mollitia.</p>
            </section>
        </div>
    </div>
</div>