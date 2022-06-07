<?php

if (!isset($_SESSION['datosUsuario'])) {
    header('Location: ' . $_SESSION['RUTA_BASE'] . '/index.php?page=InicioSesion');
    exit;
}
include 'procesos/conexionBD.php';
$id_rol = $_SESSION['datosUsuario']['id'];
$consulta_id = $baseDatos->prepare("SELECT * FROM usuario INNER JOIN persona ON usuario.persona_id = persona.id INNER JOIN rol ON usuario.rol_id = rol.id  WHERE usuario.id =:rol");
$consulta_id->bindParam(':rol', $id_rol);
$consulta_id->execute();
$rol_tabla = $consulta_id->fetch(PDO::FETCH_ASSOC);
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
                <input class="cancelarInfoCuenta " type="button" value="Cancelar" name="cancel">
                <input class="actualizarCuenta" type="submit" value="Actualizar">
                <input class="editatInfoCuenta" type="button" value="Editar" name="update">
            </div>
            <input name="form" type="hidden" value="formInfoCuenta">
        </form>
        <div class="mensaje-error-cuenta">
        </div>
    </div>
    <div class="caja-nombre divContraseñas caja">
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
        <form class="caja formContacto " action="">
            <label for="">Nombre: </label>
            <input type="text" name="nombre" value="<?php echo ($rol_tabla['nombre'] == null) ? ' ' : $rol_tabla['nombre']; ?>" disabled>
            <label for="">Primer Apellido: </label>
            <input type="text" name="priApellido" value="<?php echo ($rol_tabla['apellido_1'] == null) ? ' ' : $rol_tabla['apellido_1']; ?>" disabled>
            <label for="">Segundo Apellido: </label>
            <input type="text" name="seApellido" value="<?php echo ($rol_tabla['apellido_2'] == null) ? ' ' : $rol_tabla['apellido_2']; ?>" disabled>
            <label for="">Telefono: </label>
            <input type="text" name="telefono" value="<?php echo ($rol_tabla['telefono'] == null) ? ' ' : $rol_tabla['telefono']; ?>" disabled>
            <div>
                <input class="cancelarformUpdateContact mostrar" type="button" value="Cancelar" name="cancel">
                <input class="actualizarInfoContact" type="submit" value="Actualizar">
                <input class="enviarformUpdateContact" type="button" value="Editar" name="update">
            </div>
            <input name="form" type="hidden" value="formContacto">
        </form>
    </div>

    <div class="cajaDatosComplemetarios caja caja-nombre">
        <h2>Datos Complementarios</h2>
        <form class="caja formDatsComplementarios">
            <label for="">Fecha nacimiento: </label>
            <input class="fechaNacimientoInput" name="fechaNacimiento" type="date" value="<?php echo ($rol_tabla['fecha_nacimiento'] == null) ? ' ' : $rol_tabla['fecha_nacimiento']; ?>" disabled>
            <label for="">Pais: </label>
            <input class="paisInput" name="pais" type="text" value="<?php echo ($rol_tabla['pais'] == null) ? ' ' : $rol_tabla['pais']; ?>" disabled>
            <label for="">Ciudad: </label>
            <input class="ciudadInput" name="ciudad" type="text" value="<?php echo ($rol_tabla['ciudad'] == null) ? ' ' : $rol_tabla['ciudad']; ?>" disabled>
            <div>
                <input class="cancelarDatsComplement" type="button" value="Cancelar" name="Cancelar">
                <input class="actualizarDatsComplement" type="submit" value="Actualizar">
                <input class="enviarInputDatsComplementarios" type="button" value="Editar" name="Editar">
            </div>
            <input name="form" type="hidden" value="formDatsComplementarios">
        </form>
    </div>
    <!--PENDIENTE A TERMINAR FORM DIRECCIONES -->
    <div class="cajaDireccionesRegistradas caja caja-nombre">
        <h2>Direcciones registradas</h2>
        <form class="caja formDireccionesRegistro">
            <label for="">Nombre Completo: </label>
            <input class="inputNombreCompleto1" type="text" value="" disabled>
            <label for="">Telefono: </label>
            <input class="inputTelefono1" type="number" value="" disabled>
            <label for="">Calle direccion: </label>
            <input class="inputLineaDireccion1" type="text" disabled>
            <label for="">Numero Apartamento: </label>
            <input class="inputPiso1" type="text" disabled>
            <label for="">Codigo postal: </label>
            <input class="inputCodPostal1" type="number" disabled>
            <label for="">Ciudad:</label>
            <input class="inputCiudad1" type="text" disabled>
            <label for="">Provincia</label>
            <input class="inputProvincia1" type="text" disabled>
            <div>
                <input class="cancelarDireccionInput1" type="button" value="Cancelar" name="cancel">
                <input class="actualizarDirecciones" type="submit" value="Actualizar">
                <input class="enviarInputDatsDireccion1" type="button" value="Editar" name="update">
            </div>
            <input type="hidden" name="form" value="formDireccionesRegistro">
        </form>
    </div>
    <div class="caja-nombre caja">
        <h2>Eliminar Cuenta</h2>
        <button class="btn-eliminar-cuenta">Eliminar Cuenta</button>
        <!-- capa para mensaje de confirmacion eliminacion ccuenta-->
        <div id="modal-overlay" class="overlay">
            <div id="modal-content">
                <form class=" formEliminarCuenta">
                    <label for="">Confirmacion eliminacion de cuenta</label>
                    <div>
                        <input class="cancelarEliminarCuenta" type="submit" name="cancelar" value="Cancelar">
                        <input class="confirmarEliminarCuenta" type="button" name="confirmar" value="Confirmar">
                    </div>
                    <input type="hidden" name="form" value="formEliminarCuenta">
                </form>
            </div>
        </div>
    </div>
    <div id="error" class="error">
    </div>
</div>