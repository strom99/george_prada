<div class="contenedor">
    <div class="title-header">
        <h1>Panel de productos</h1>
        <button type="button" class="producto-button btnProducto btn-general" data-action="insert">Crear producto</button>
    </div>

    <div class="contenedor-2">
        <form id="formProductos">
            <!-- FORM CON INFO DE PRODUCTOS (CREAR, EDITAR) -->
            <div class="hide inputsContainer">
                <input type="hidden" name="id">
                <input type="hidden" name="action">

                <div>
                    <span>Nombre</span>
                    <input type="text" name="nombre">
                </div>
                <div>
                    <span>Marca</span>
                    <input type="text" name="marca">
                </div>
                <div>
                    <span>Precio</span>
                    <input type="number" name="precio">
                </div>
                <div>
                    <span>Imagen</span>
                    <input type="file" name="imagen">
                </div>
                <div>
                    <span>Categoría</span>
                    <input type="text" name="categoria">
                </div>
                <div>
                    <span>Cantidad</span>
                    <input type="number" name="cantidad">
                </div>
                <div>
                    <select name="genero">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
                <div>
                    <span>Descripción</span>
                    <input type="text" name="descripcion">
                </div>
                <div class="btns-form-productos">
                    <button class="producto-button main-form-submit-button btn-general" data-action="insert" type="submit">Crear / Actualizar producto</button>
                    <button type="button" class="producto-button btn-general" data-action="cerrar">Cerrar</button>
                </div>
            </div>
            
            <?php include 'tarjetas-productos.php'?>
        </form>
    </div>
</div>