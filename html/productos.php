<?php

include 'procesos/conexionBD.php';
$number = $baseDatos->prepare("SELECT * FROM productos");
$number->execute();
$array = $number->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="contenedor">
    <header>
        <div class="main-info">
            <h2>Comprar camisetas de gimnasios Online de marcas de confianza</h2>
            <p>Si estas buscando camisetas gym baratas, estas en lugar adecuado. Los mejores modelos y precios, solo de
                la mejor calidad. Comprueba nuestros modelos.</p>
        </div>
        <div class="content-cards">
            <?php foreach ($array as $producto => $valor) {
            ?>
            <div class="card">
                <img src="./img/<?php echo $valor['imagen'] ?>" alt="imagen-modwelo-gym">
                <div class="min-info">
                    <span><?php echo $valor['genero'] ?></span>
                    <a
                        href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=producto_detalle&id=<?php echo $valor['id'] ?>"><?php echo $valor['nombre']  ?></a>
                    <img src=" ./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio"><?php echo $valor['precio']?>€</span>
                </div>
            </div>
            <?php }  ?>
        </div>
    </header>
    <aside>
        <h3>Filtrar por</h3>
        <div class="content-info">
            <p>Haz tú busqueda....</p>
            <input type="search" id="search">
        </div>
        <div class="categories">
            <ul id="menu">
                <li class="ui-widget-header">
                    <div>Category 1</div>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
                <li class="ui-widget-header">
                    <div>Category 2</div>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
                <li>
                    <a href="#">Special Leggins</a>
                </li>
            </ul>
        </div>
        <div class="productos">
            <p>Productos</p>
            <div>
                <input type="checkbox"><label for="leggins">Leggins</label>
            </div>
            <div>
                <input type="checkbox"><label for="shorts">Shorts</label>
            </div>
            <div>
                <input type="checkbox"><label for="camisas">Camisas</label>
            </div>
            <div>
                <input type="checkbox"><label for="oversize">Oversize</label>
            </div>
        </div>
        <div class="ratings">
            <p>Ratings</p>
            <div>
                <img src="./img/card26.png" alt="">
            </div>
        </div>
        <div class="precios">
            <p>Precios</p>
            <div>
                <input type="checkbox"><label for="precio">20€</label>
            </div>
            <div>
                <input type="checkbox"><label for="precio">10€</label>
            </div>
            <div>
                <input type="checkbox"><label for="precio">30€</label>
            </div>
            <div>
                <input type="checkbox"><label for="precio">40€</label>
            </div>
        </div>
    </aside>
</div>
<div class="products-features">
    <div>
        <h2>Mejores Productos</h2>
    </div>
    <div class="container-imagenes">
        <div>
            <img src="./img/image1.jpg" alt="">
            <p>Custom OverSize</p>
            <span class="precio"><?php echo $valor['precio']  ?>€</span>
        </div>
        <div>
            <img src="./img/image2.jpg" alt="">
            <p>Custom OverSize</p>
            <span class="precio"><?php echo $valor['precio']  ?>€</span>
        </div>
        <div>
            <img src="./img/image3.jpg" alt="">
            <p>Custom OverSize</p>
            <span class="precio"><?php echo $valor['precio']  ?>€</span>
        </div>
        <div>
            <img src="./img/image4.webp" alt="">
            <p>Custom OverSize</p>
            <span class="precio"><?php echo $valor['precio']  ?>€</span>
        </div>
    </div>
    <div>
</div>