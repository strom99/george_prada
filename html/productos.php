<?php

include 'procesos/conexionBD.php';
$number = $baseDatos->prepare("SELECT * FROM productos");
$number->execute();
$array = $number->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="contenedor">
    <header>
        <div class="main-info">
            <h2>Buy gym t-shirts Online from trusted brands</h2>
            <p>If you are looking for cheap gym shirts, you are in the right place. The best models and prices, only from
                The best quality. Check our models.</p>
        </div>
        <div class="content-cards">
            <?php foreach ($array as $producto => $valor) {
            ?>
            <div class="card">
                <img src="uploads/productos/<?php echo $valor['imagen'] ?>" alt="imagen-modwelo-gym">
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
        <h3>Filter by</h3>
        <div class="content-info">
            <p>Do your search...</p>
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
            <p>Products</p>
            <div>
                <input type="checkbox"><label for="leggins">Leggins</label>
            </div>
            <div>
                <input type="checkbox"><label for="shorts">Shorts</label>
            </div>
            <div>
                <input type="checkbox"><label for="camisas">T-Shirt</label>
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
            <p>Prices</p>
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
        <h2>Best Products</h2>
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