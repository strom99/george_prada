<div class="contenedor">
    <aside>
        <a href="#">hola</a>
        <a href="#">hola</a>
        <a href="#">hola</a>
        <a href="#">hola</a>
    </aside>

    <div class="galery">
        <?php
        for ($i = 1; $i <= 10; $i++) {
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