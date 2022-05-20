<?php
include 'procesos/conexionBD.php';
$id_rol = $_SESSION['datosUsuario']['id'];
$consulta_id = $baseDatos->prepare("SELECT * FROM usuario INNER JOIN persona ON usuario.persona_id = persona.id INNER JOIN rol ON usuario.rol_id = rol.id  WHERE usuario.id =:rol");
$consulta_id->bindParam(':rol', $id_rol);
$consulta_id->execute();
$rol_tabla = $consulta_id->fetch(PDO::FETCH_ASSOC);
var_dump($rol_tabla);
?>
<div class="contenedor">
    <div class="caja-presentacion-usuario">
        <img class="portada-usuario" src="img/moon.jpeg" alt="fondo perfil">
        <div class="presentacion-usuario">
            <img src="img/zorro.png" alt="perfil usuario">
            <section class="seccion-usuario">
                <h2><?php echo $rol_tabla['usuario'] ?></h2>
                <span><?php echo ($rol_tabla['ciudad'] == null) ? 'vacio' : $rol_tabla['ciudad']; ?></span>
            </section>
        </div>
    </div>
    <div class="cajaInformacionCuenta caja caja-nombre">
        <ul class="border">
            <li>
                <h2 class="h2">Informacion cuenta</h2>
            </li>
            <li class="boxNombreUser">
                <h3>Nombre Usuario </h3>
                <span class="nombreUser"><?php echo $rol_tabla['usuario'] ?></span>
            </li>
            <li class="boxCorreo">
                <h3>Correo </h3>
                <span class="correo"><?php echo $rol_tabla['email'] ?></span>
            </li>
            <li class="boxRol">
                <h3>Rol</h3>
                <span class="rol"><?php echo $rol_tabla['etiqueta'] ?></span>
            </li>
            <li>
                <div class="">
                    <form class="formInfoCuenta" method='POST'>
                        <input class="nombreUserInput" type="text">
                        <input class="correoInput" type="text">
                        <input class="rolInput" type="text">
                        <div class="divFormInfoCuenta">
                            <input class="cancelarInfoCuenta" type="submit" value="Cancelar" name="cancel">
                            <input class="actualizarCuenta" type="submit" value="Actualizar">
                            <input class="editatInfoCuenta" type="submit" value="Editar" name="update">
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div class="caja-nombre caja">
        <ul class="listActContraseña">
            <li>
                <h2>Actualizar Contraseña </h2>
            </li>
            <li class="">
                <h3>Contraseña </h3>
                <span class=""><?php echo $rol_tabla['contrasena'] ?></span>
            </li>
            <li>
                <form action="" class="formActualizarContraseñas">
                    <div class="boxContraseñas">
                        <label for="contraseñaActual">Contraseña Actual</label>
                        <input type="passwd" placeholder="*****">
                        <label for="contraseñaNueva">Contraseña Nueva</label>
                        <input type="passwd" placeholder="*****">
                    </div>
                    <div class="btns-form-contraseña">
                        <input class="cancelarActContraseña" type="submit" value="Cancelar">
                        <input class="actualizarContra" type="submit" value="Actualizar">
                        <input class="editarContra" type="submit" value="Actualizar contraseñas">
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <div class="caja-info-contacto caja caja-nombre">
        <ul class="">
            <li>
                <h2>Informacion de contacto</h2>
            </li>
            <li class="boxNombre">
                <h3>Nombre :</h3>
                <span class="nombre"><?php echo ($rol_tabla['nombre'] == null) ? 'vacio' : $rol_tabla['nombre']; ?></span>
            </li>
            <li class="boxPriApell">
                <h3>Primer apellido :</h3>
                <span class="priApellido"><?php echo ($rol_tabla['apellido_1'] == null) ? 'vacio' : $rol_tabla['apellido1']; ?></span>
            </li>
            <li class="boxSeApell">
                <h3>Segundo apellido :</h3>
                <span class="seApellido"><?php echo ($rol_tabla['apellido_2'] == null) ? 'vacio' : $rol_tabla['apellido2']; ?></span>
            </li>
            <li class="boxTelefono">
                <h3>Telefono :</h3>
                <span class="telefono"><?php echo ($rol_tabla['telefono'] == null) ? 'vacio' : $rol_tabla['telefono']; ?></span>
            </li>
            <div class="updateInfoContacto">
                <form class="formUpdateContact">
                    <input class="nameInput mostrar" type="text">
                    <input class="priApellInput mostrar" type="text">
                    <input class="seApellInput mostrar" type="text">
                    <input class="telefonoInput mostrar" type="text">
                    <div class="btns-editar">
                        <input class="cancelarformUpdateContact mostrar" type="submit" value="Cancelar" name="cancel">
                        <input class="actualizarInfoContact" type="submit" value="Actualizar">
                        <input class="enviarformUpdateContact" type="submit" value="Editar" name="update">
                    </div>
                </form>
            </div>
        </ul>
    </div>

    <div class="cajaDatosComplemetarios caja caja-nombre">
        <ul class="">
            <li>
                <h2>Datos Complementarios</h2>
            </li>
            <li class="boxFechaNacimiento">
                <h3>Fecha de nacimiento:</h3>
                <span class="fechaNacimiento"><?php echo ($rol_tabla['fecha_nacimiento'] == null) ? 'vacio' : $rol_tabla['fecha_nacimiento']; ?></span>
            </li>
            <li class="boxPais">
                <h3>Pais</h3>
                <span class="pais"><?php echo ($rol_tabla['pais'] == null) ? 'vacio' : $rol_tabla['pais']; ?></span>
            </li>
            <li class="boxCiudad">
                <h3>Ciudad</h3>
                <span class="ciudad"><?php echo ($rol_tabla['ciudad'] == null) ? 'vacio' : $rol_tabla['ciudad']; ?></span>
            </li>
            <div class="boxUpdateFormDatsComplementarios">
                <form class="formUpdateDatsComplementarios">
                    <input class="fechaNacimientoInput" type="text">
                    <input class="paisInput" type="text">
                    <input class="ciudadInput" type="text">
                    <div class="btns-editar-datsComplementarios">
                        <input class="cancelarUpdateInput" type="submit" value="Cancelar" name="cancel">
                        <input class="actualizarDatsComplement" type="submit" value="Actualizar">
                        <input class="enviarInputDatsComplementarios" type="submit" value="Editar" name="update">
                    </div>
                </form>
            </div>
        </ul>
    </div>
    <div class="cajaDireccionesRegistradas caja caja-nombre">
        <h2>Direcciones registradas</h2>
        <ul class="border">
            <li>
                <h3>Direccion 1</h3>
            </li>
            <li class="boxLiNombre1">
                <h3>Nombre Completo </h3>
                <span class="boxNombre1">Anselmo estocolmo</span>
            </li>
            <li class="boxLiTelefono">
                <h3>Numero de telefono </h3>
                <span class="boxTelefono1">631594977</span>
            </li>
            <li class="boxLiDireccion">
                <h3>Linea direccion </h3>
                <span class="boxCalle1">Calle Eduardo marquina 3</span>
            </li>
            <li class="boxLiPiso">
                <span class="boxPiso1">3ra 2da</span>
            </li>
            <li class="boxLiCodPostal">
                <h3>Codigo Postal</h3>
                <span class="boxCodPostal1">08225</span>
            </li>
            <li class="boxLiCiudad">
                <h3>Ciudad</h3>
                <span class="boxCiudad1">barcelona</span>
            </li>
            <li class="boxLiProvincia">
                <h3>Provincia</h3>
                <span class="boxProvincia1">terrassa</span>
            </li>
            <li>
                <div class="boxUpdateFormDirection1">
                    <form class="formUpdateDirection1">
                        <input class="inputNombreCompleto1" type="text">
                        <input class="inputTelefono1" type="text">
                        <input class="inputLineaDireccion1" type="text">
                        <input class="inputPiso1" type="text">
                        <input class="inputCodPostal1" type="text">
                        <input class="inputCiudad1" type="text">
                        <input class="inputProvincia1" type="text">
                        <div class="btns-editar-direcciones1">
                            <input class="cancelarDireccionInput1" type="submit" value="Cancelar" name="cancel">
                            <input class="actualizarDirecciones" type="submit" value="Actualizar">
                            <input class="enviarInputDatsDireccion1" type="submit" value="Editar" name="update">
                        </div>
                    </form>
                </div>
            </li>
        </ul>
        <form action="" class="formAñadirDireccion">
            <input type="submit" value="Añadir otra direccion">
        </form>
    </div>
    <div id="error">
    </div>
</div>