<div class="contenedor">
    <aside>
        <h3>Filtros Busqueda</h3>
        <a href="#">Nombre</a>
        <a href="#">Precio</a>
        <a href="#">Tallas</a>
        <a href="#">Tipo</a>
    </aside>
    <div class="galery">
        <?php
        for ($i = 1; $i <= 4; $i++) {
        ?>
            <article class="articulo">
                <img src="img/girl.jpeg" alt="">
                <div class="presentacion-producto">
                    <span>Categoria</span>
                    <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=producto_detalle&id=<?php echo $i ?>">Nombre producto</a>
                    <div class=" estre">
                        <i class="estrella fas fa-star"></i>
                        <i class="estrella fas fa-star"></i>
                        <i class="estrella fas fa-star"></i>
                        <i class="estrella fas fa-star"></i>
                        <i class="estrella fas fa-star"></i>
                    </div>
                    <h4>34€</h4>
                </div>
            </article>
        <?php } ?>
    </div>
</div>