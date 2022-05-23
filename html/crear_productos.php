<?php 
    include 'procesos/conexionBD.php';
    $productos = ($baseDatos->query('SELECT * FROM productos'))->fetchAll();

?>

<div class="contenedor">
    <div>
        <h1>Panel de productos</h1>
    </div>

    <div>
        <button class="crear-producto-button">Crear producto</button>

        <form class="hide crear-producto-form">
            <input type="text" name="nombre">
            <input type="text" name="marca">
            <input type="text" name="precio">
            <input type="text" name="categoria">
            <input type="text" name="cantidad">
            <input type="text" name="genero">
            <input type="text" name="descripcion">
        </form>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Cantidad</th>
                    <th>Genero</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
                <tbody>
                    <?php foreach($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['marca']; ?></td>
                        <td><?php echo $producto['precio']; ?></td>
                        <td><?php echo $producto['categoria']; ?></td>
                        <td><?php echo $producto['cantidad']; ?></td>
                        <td><?php echo $producto['genero']; ?></td>
                        <td><?php echo $producto['descripcion']; ?></td>
                        <td>
                            <form class="formProductos">
                                <button class="producto-button" data-id="<?php echo $producto['id'] ?>" data-action="update">Editar</button>
                                <button class="producto-button" data-id="<?php echo $producto['id'] ?>" data-action="delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    </div>

</div>