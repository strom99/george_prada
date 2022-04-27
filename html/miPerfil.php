<?php
$respuesta = ["data" => $_POST, "error" => null];
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
    <div class="caja-info-contacto">
        <ul>
            <li>
                <h3>Nombre :</h3>
                <div class="updateName">
                    <span>Laura</span>
                    <form class="formUpdateName" action="POST">
                        <input class="nameInput" type="text">
                        <input type="submit" value="Actualizar" name="update">
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div id="error">
        <?php echo json_encode($respuesta); ?>
    </div>
</div>