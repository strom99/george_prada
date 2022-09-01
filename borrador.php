<div class="listadeProductos tabla-mobile">
                <!-- LISTADO PRODUCTOS -->
                <?php if (count($productos) === 0) : ?>
                    <p>No hay productos</p>
                <?php else : ?>
                    <table class="head-table">
                        <thead>
                        <?php foreach ($productos as $producto) : ?>
                            <tr colspan="1">
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                <th>Cantidad</th>
                                <th>Genero</th>
                                <th>Descripción</th>
                                <th class="imagen-th">Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        <?php endforeach; ?>    
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
                                    <td class="imagen-th">
                                        <img style="width: 100px" src="uploads/productos/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre'] ?>">
                                    </td>
                                    <td>
                                        <!-- BOTÓN EDITAR PRODUCTO (RELLENA FORMULARIO CON INFO DE PRODUCTO) -->
                                        <button class="producto-button btn-general" type="button" data-id="<?php echo $producto['id'] ?>" data-producto='<?php echo json_encode($producto) ?>' data-action="edit">Editar</button>
                                        <!-- BOTÓN ELIMINAR PRODUCTO -->
                                        <button class="producto-button btn-general" type="submit" data-id="<?php echo $producto['id'] ?>" data-action="delete">Eliminar</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </div>