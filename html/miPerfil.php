<?php

?>
<div class="contenedor">
    <div class="caja-presentacion-usuario">
        <img class="portada-usuario" src="img/moon.jpeg" alt="fondo perfil">
        <div class="presentacion-usuario">
            <img src="img/zorro.png" alt="perfil usuario">
            <section class="seccion-usuario">
                <h4>Laura Alison</h4>
                <span>Barcelona</span>
            </section>
        </div>
    </div>
    <div class="caja-info-contacto caja">
        <ul class="caja-nombre">
            <li>
                <h2>Informacion de contacto</h2>
            </li>
            <li class="boxNombre">
                <h3>Nombre :</h3>
                <span class="nombre">Laura</span>
            </li>
            <li class="boxPriApell">
                <h3>Primer apellido :</h3>
                <span class="priApellido">Esperanita</span>
            </li>
            <li class="boxSeApell">
                <h3>Segundo apellido :</h3>
                <span class="seApellido">mentiscola</span>
            </li>
            <li class="boxEmail">
                <h3>Email :</h3>
                <span class="email">alissoncc19@fgmail.com</span>
            </li>
            <li class="boxTelefono">
                <h3>Telefono :</h3>
                <span class="telefono">3232323232</span>
            </li>
            <div class="updateInfoContacto">
                <form class="formUpdateContact">
                    <input class="nameInput" type="text">
                    <input class="priApellInput" type="text">
                    <input class="seApellInput" type="text">
                    <input class="emailInput" type="text">
                    <input class="telefonoInput" type="text">
                    <div class="btns-editar">
                        <input class="cancelarformUpdateContact" type="submit" value="Cancelar" name="cancel">
                        <input class="enviarformUpdateContact" type="submit" value="Editar" name="update">
                    </div>
                </form>
            </div>
        </ul>
    </div>

    <div class="cajaDatosComplemetarios caja">
        <ul class="caja-nombre">
            <li>
                <h2>Datos Complementarios</h2>
            </li>
            <li class="boxFechaNacimiento">
                <h3>Fecha de nacimiento:</h3>
                <span class="fechaNacimiento">22/01/1999</span>
            </li>
            <li class="boxPais">
                <h3>Pais</h3>
                <span class="pais">España</span>
            </li>
            <li class="boxCiudad">
                <h3>Ciudad</h3>
                <span class="ciudad">Barcelona</span>
            </li>
            <div class="boxUpdateFormDatsComplementarios">
                <form class="formUpdateDatsComplementarios">
                    <input class="fechaNacimientoInput" type="text">
                    <input class="paisInput" type="text">
                    <input class="ciudadInput" type="text">
                    <div class="btns-editar-datsComplementarios">
                        <input class="cancelarUpdateInput" type="submit" value="Cancelar" name="cancel">
                        <input class="enviarInputDatsComplementarios" type="submit" value="Editar" name="update">
                    </div>
                </form>
            </div>
        </ul>
    </div>
    <div id="error">
    </div>
</div>