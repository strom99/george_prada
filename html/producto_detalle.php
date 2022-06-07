<?php
include 'procesos/conexionBD.php';
include 'carrito.php';
define("KEY","DEVELOTECA");
define("COD","AES-128-ECB");

$producto_id = $_GET['id'] ?? null;
$consulta_producto = $baseDatos->prepare("SELECT * FROM productos WHERE id = :id");
$consulta_producto->bindParam(':id', $producto_id);
$consulta_producto->execute();
$producto = $consulta_producto->fetch(PDO::FETCH_ASSOC);
?>
<main>
    <?php if ($producto): ?>
    <section class="presentacion-producto">
        <div>
            <header class="header-presentacion-producto cambio">
                <h2><?php echo $producto['nombre'];?></h2>
                <button>
                    <i class="fas fa-share-alt"></i>
                </button>
            </header>
            <div class="aside">
                <section class="banner-container">
                    <div class="imagenes-secundarias">
                        <img src="img/girl.jpeg" alt="modelo-fitness">
                        <img src="img/girl.jpeg" alt="modelo-fitness">
                        <img src="img/girl.jpeg" alt="modelo-fitness">
                        <img src="img/girl.jpeg" alt="modelo-fitness">
                    </div>
                    <div class="carousel-container">
                        <div class="flecha flecha-anterior fas fa-chevron-left"></div>
                        <div class="carousel-container-inner jzoom">
                            <img data-action="zoom" src="img/<?php echo $producto['imagen'] ?>"
                                alt="<?php echo $producto['nombre'] ?>">
                        </div>
                        <div class="flecha flecha-siguiente fas fa-chevron-right"></div>
                    </div>
                </section>
            </div>
        </div>

        <div class="detalles-container">
            <header class="header-presentacion-producto cambio2">
                <h2><?php $producto['nombre'] ?></h2>
                <button>
                    <i class="fas fa-share-alt"></i>
                </button>
            </header>
            <div class="valoracion-principal-producto">
                <h3></h3>
                <div class="estrellas-producto">
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                </div>
    </section>
    </div>
    </div>

    <div class="detalles-container">

        <div class="valoracion-principal-producto">
            <h3>Custom</h3>
            <h3><?php echo $producto['precio'] ?>€</h3>
        </div>
        <div class="formularios">
            <form action="" class="form-seleccionar-tallas">
                <label for="talla">Size:</label>
                <select name="seleccionar-talla" class="button-seleccionar-talla">
                    <option value="Talla1" selected>M</option>
                    <option value="Talla2">S</option>
                    <option value="Talla3">L</option>
                    <option value="Talla4">XL</option>
                    <option value="Talla5">XXL</option>
                </select>
            </form>     
            <form action="" method="post" class="form-seleccion-botones">
                <?php  ?>
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                    <input type="hidden" name="marca" id="marca" value="<?php echo openssl_encrypt($producto['marca'],COD,KEY);?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                    <input type="hidden" name="categoria" id="categoria" value="<?php echo openssl_encrypt($producto['categoria'],COD,KEY);?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt($producto['cantidad'],COD,KEY);?>">
                    <input type="hidden" name="genero" id="genero" value="<?php echo openssl_encrypt($producto['genero'],COD,KEY);?>">
                    <input type="hidden" name="descripcion" id="descripcion" value="<?php echo openssl_encrypt($producto['descripcion'],COD,KEY);?>">
                    <button class="btn-general" type="submit" id="btnProducto" name="btnProducto" value="Agregar">Add to cart</button>
            </form>
        </div>
    </div>

    <section class="descripcion-producto">
        <h3>Product Information</h3>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, adipisci mollitia ducimus quisquam repellat
            soluta nulla consequatur fugiat, nostrum saepe, praesentium nihil ullam omnis vitae animi fugit libero. Id,
            cum?
        </p>
    </section>
    </section>
    <section class="dejarComentario">
        <form action="productos.html">
            <h4>Leave your comment</h4>
            <div class="caja-comentario">
                <textarea>Enter your comment...</textarea>
                <input type="submit" value="Send comment">
            </div>
        </form>
    </section>
    <section class="valoraciones-producto">
        <h3>Products reviews</h3>
        <div class="comentarios">
            <article class="usuario-comentario">
                <div class="valoracion-cliente-estrellas">
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                </div>
                <div class="informacion-valoracion">
                    <p>Carlos C.</p>
                    <p>Hace 10 meses</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                    praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                    et ratione voluptatem a!
                    Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                    vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                    soluta totam consequatur consequuntur at? Nemo.
                </p>
            </article>
            <article class="usuario-comentario">
                <div class="valoracion-cliente-estrellas">
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                </div>
                <div class="informacion-valoracion">
                    <p>Cristian J.</p>
                    <p>Hace 10 meses</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                    praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                    et ratione voluptatem a!
                    Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                    vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                    soluta totam consequatur consequuntur at? Nemo.
                </p>
            </article>
            <article class="usuario-comentario">
                <div class="valoracion-cliente-estrellas">
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                </div>
                <div class="informacion-valoracion">
                    <p>Lucia L.</p>
                    <p>Hace 10 meses</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                    praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                    et ratione voluptatem a!
                    Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                    vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                    soluta totam consequatur consequuntur at? Nemo.
                </p>
            </article>
        </div>
    </section>
    <?php else : ?>
    <section>
    The product has not been found
    </section>
    <?php endif; ?>
</main>