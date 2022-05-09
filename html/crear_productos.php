<div class="contenedor">
    <div>
        <h1>Información del producto</h1>
    </div>
    <div class="seccion-form-product">
        <form action="<?php echo $_SESSION['RUTA_BASE']?>/procesos/subir_producto.php" method="POST">
            <label for="nombre-producto">Nombre Producto</label>
            <input type="text" name="nombre_producto">
            <label for="descp-producto">Descripción del producto</label>
            <input type="text" name="desc_producto">
            <label for="valor-producto">Valor Producto</label>
            <input type="number" name="valor_producto">
            <label for="cantidad-producto">Cantidad</label>
            <input type="number" name="cantidad_producto">


            <div class="categories">
                <label for="select-categories">Categories</label>
                <select name="categorias">
                    <option value="calzado">Calzado</option>
                    <option value="ropa" selected>Ropa</option>
                    <option value="leggins">Pantalones</option>
                </select>

                <label for="select-genero">Genero</label>
                <select name="genero">
                    <option value="value1" selected>Masculíno</option>
                    <option value="value2">Femenino</option>
                </select>
            </div>

            <div class="input-file">
                <label for="imagen">Subir Imagen</label>
                <input type="file">
            </div>

            <input type="submit" value="Subir-Producto" class="botom-submit">
        </form>

        <div class="side-imagen">
            <img src="img/54402.png" alt="modelo_producto">
        </div>
    </div>

</div>