<div class="content-cards">
    <?php
        include 'procesos/conexionBD.php';
        $number = $baseDatos->prepare("SELECT * FROM productos");
        $number->execute();
        $array = $number->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array as $producto => $valor) {   ?>
        <div class="card">
            <div class="circle-icon-productos">
                <button type="button">
                    <i class="fa-sharp fa-solid fa-heart "></i>
                </button>
                <button type="button" class="producto-button" data-id="<?php echo $valor['id'] ?>" data-producto='<?php echo json_encode($valor) ?>' data-action="edit">
                    <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                </button>
                <button class="producto-button" data-id="<?php echo $valor['id'] ?>" data-action="delete" type="submit">
                    <i class="fa-sharp fa-solid fa-trash"></i>
                </button>
            </div>
            <img src="uploads/productos/<?php echo $valor['imagen'] ?>" alt="imagen-modwelo-gym">
            <div class="min-info">
                <span><?php echo $valor['genero'] ?></span>
                <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=producto_detalle&id=<?php echo $valor['id'] ?>"><?php echo $valor['nombre']  ?></a>
                <img src=" ./img/clasi1.png" alt="estrellas" class="estrella">
                <span class="precio"><?php echo $valor['precio']?>€</span>
            </div>
        </div>
    <?php }  ?>
</div>