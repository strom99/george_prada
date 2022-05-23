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
        <h2 class="h2">Informacion cuenta</h2>
        <form class="caja formInfoCuenta">
            <label for="usuario">Usuario</label>
            <input name="usuario" type="text" value="<?php echo $rol_tabla['usuario'] ?>" disabled>
            <label for="correo">Correo</label>
            <input name="email" type="text" value="<?php echo $rol_tabla['email'] ?>" disabled>
            <label for="rol">Rol</label>
            <input name="rol" type="text" value="<?php echo $rol_tabla['etiqueta'] ?>" disabled>
            <div>
                <input class="cancelarInfoCuenta" type="button" value="Cancelar" name="cancel">
                <input class="actualizarCuenta" type="submit" value="Actualizar">
                <input class="editatInfoCuenta" type="button" value="Editar" name="update">
            </div>
            <input name="form" type="hidden" value="formInfoCuenta">
        </form>
    </div>
    <div class="caja-nombre caja">
        <h2>Contraseña</h2>
        <form class="caja formContrasenas" action="">
            <div class="formContraseña1">
                <p>Ultima entrada : </p>
                <input class="actualizarContraseña" type="button" value="Actualizar">
            </div>
            <div class="formContraseña2 ">
                <label for="">Contraseña actual</label>
                <input type="text" name="contraActual">
                <label for="">Contraseña nueva</label>
                <input type="text" name="contraNueva">
                <label for="">Confirmar Contraseña </label>
                <input type="text" name="confirmContra">
                <div class="btns-formContra2">
                    <input class="cancelarActContraseña" type="button" value="Cancelar">
                    <input class="guardarContraseña" type="submit" value="Guardar cambios">
                </div>
            </div>
            <input name="form" type="hidden" value="formContrasenas">
        </form>
    </div>
    <div class="caja-info-contacto caja caja-nombre">
        <h2>Informacion de contacto</h2>
        <form class="caja " action="">
            <label for="">Nombre: </label>
            <input type="text" value="<?php echo ($rol_tabla['nombre'] == null) ? 'vacio' : $rol_tabla['nombre']; ?>">
            <label for="">Primer Apellido: </label>
            <input type="text" value="<?php echo ($rol_tabla['apellido1'] == null) ? 'vacio' : $rol_tabla['apellido1']; ?>">
            <label for="">Segundo Apellido: </label>
            <input type="text" value="<?php echo ($rol_tabla['apellido_2'] == null) ? 'vacio' : $rol_tabla['apellido2']; ?>">
            <label for="">Telefono: </label>
            <input type="text" value="<?php echo ($rol_tabla['telefono'] == null) ? 'vacio' : $rol_tabla['telefono']; ?>">
            <div>
                <input class="cancelarformUpdateContact mostrar" type="submit" value="Cancelar" name="cancel">
                <input class="actualizarInfoContact" type="submit" value="Actualizar">
                <input class="enviarformUpdateContact" type="submit" value="Editar" name="update">
            </div>
        </form>
    </div>

    <div class="cajaDatosComplemetarios caja caja-nombre">
        <h2>Datos Complementarios</h2>
        <form class="caja">
            <label for="">Fecha nacimiento: </label>
            <input class="fechaNacimientoInput" type="text" value="<?php echo ($rol_tabla['fecha_nacimiento'] == null) ? 'vacio' : $rol_tabla['fecha_nacimiento']; ?>">
            <label for="">Pais: </label>
            <input class="paisInput" type="text" value="<?php echo ($rol_tabla['pais'] == null) ? 'vacio' : $rol_tabla['pais']; ?>">
            <label for="">Ciudad: </label>
            <input class="ciudadInput" type="text" value="<?php echo ($rol_tabla['ciudad'] == null) ? 'vacio' : $rol_tabla['ciudad']; ?>">
            <div>
                <input class="cancelarUpdateInput" type="submit" value="Cancelar" name="cancel">
                <input class="actualizarDatsComplement" type="submit" value="Actualizar">
                <input class="enviarInputDatsComplementarios" type="submit" value="Editar" name="update"> 
            </div>       
        </form>
    </div>
    <div class="cajaDireccionesRegistradas caja caja-nombre">
        <h2>Direcciones registradas</h2>
        <form class="caja">
            <label for="">Nombre Completo: </label>
            <input class="inputNombreCompleto1" type="text" value="">
            <label for="">Telefono: </label>
            <input class="inputTelefono1" type="text" value="">
            <label for="">Calle direccion: </label>
            <input class="inputLineaDireccion1" type="text">
            <label for="">Numero Apartamento: </label>
            <input class="inputPiso1" type="text">
            <label for="">Codigo postal: </label>
            <input class="inputCodPostal1" type="text">
            <label for="">Ciudad:</label>
            <input class="inputCiudad1" type="text">
            <label for="">Provincia</label>
            <input class="inputProvincia1" type="text">
            <div>
                <input class="cancelarDireccionInput1" type="submit" value="Cancelar" name="cancel">
                <input class="actualizarDirecciones" type="submit" value="Actualizar">
                <input class="enviarInputDatsDireccion1" type="submit" value="Editar" name="update">
            </div>
        </form>
    </div>
    <div id="error">
    </div>
</div>