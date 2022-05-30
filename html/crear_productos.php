<?php
include 'procesos/conexionBD.php';
$productos = ($baseDatos->query('SELECT * FROM productos'))->fetchAll();

?>

<div class="contenedor">
    <div class="title-header">
        <h1>Panel de productos</h1>
        <button type="button" class="producto-button" data-action="insert">Crear producto</button>
    </div>

    <div>
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

                <button class="producto-button main-form-submit-button" data-action="insert" type="submit">Crear / Actualizar producto</button>
                <button type="button" class="producto-button" data-action="cerrar">Cerrar</button>
            </div>
            

            <!-- LISTADO PRODUCTOS -->
            <?php if (count($productos) === 0) : ?>
                <p>No hay productos</p>
            <?php else : ?>
                <table class="head-table">
                    <thead>
                        <tr colspan="1">
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Cantidad</th>
                            <th>Genero</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <td><?php echo $producto['nombre']; ?></td>
                                <td><?php echo $producto['marca']; ?></td>
                                <td><?php echo $producto['precio']; ?></td>
                                <td><?php echo $producto['categoria']; ?></td>
                                <td><?php echo $producto['cantidad']; ?></td>
                                <td><?php echo $producto['genero']; ?></td>
                                <td><?php echo $producto['descripcion']; ?></td>
                                <td>
                                    <img style="width: 100px" src="uploads/productos/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre'] ?>">
                                </td>
                                <td>
                                    <!-- BOTÓN EDITAR PRODUCTO (RELLENA FORMULARIO CON INFO DE PRODUCTO) -->
                                    <button class="producto-button" type="button" data-id="<?php echo $producto['id'] ?>" data-producto='<?php echo json_encode($producto) ?>' data-action="edit">Editar</button>
                                    <!-- BOTÓN ELIMINAR PRODUCTO -->
                                    <button class="producto-button" type="submit" data-id="<?php echo $producto['id'] ?>" data-action="delete">Eliminar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif ?>
        </form>
    </div>
</div>