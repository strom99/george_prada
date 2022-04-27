<?php
include 'procesos/conexionBD.php';
$producto_id = $_GET['id'] ?? null;
$consulta_producto = $baseDatos->prepare("SELECT * FROM productos WHERE id = :id");
$consulta_producto->bindParam(':id', $producto_id);
$consulta_producto->execute();
$producto = $consulta_producto->fetch(PDO::FETCH_ASSOC);
?>
<main>
    <?php if ($producto) : ?>
<<<<<<< HEAD
    <section class="presentacion-producto">
        <div>
            <header class="header-presentacion-producto cambio">
                <h2><?php echo $producto['nombre'] ?></h2>
                <button>
                    <i class="fas fa-share-alt"></i>
                </button>
            </header>
            <div class="aside">
                <section class="banner-container">
                    <div class="imagenes-secundarias">
                        <img src="img/girl.jpeg" alt="modelo-chica-gimnasio">
                        <img src="img/girl.jpeg" alt="modelo-chica-gimnasio">
                        <img src="img/girl.jpeg" alt="modelo-chica-gimnasio">
                        <img src="img/girl.jpeg" alt="modelo-chica-gimnasio">
=======
        <section class="presentacion-producto">
            <div>
                <header class="header-presentacion-producto cambio">
                    <h2><?php echo $producto['nombre'] ?></h2>
                    <button>
                        <i class="fas fa-share-alt"></i>
                    </button>
                </header>
                <div class="aside">
                    <section class="banner-container">
                        <div class="imagenes-secundarias">
                            <img src="img/girl.jpeg">
                            <img src="img/girl.jpeg" alt="">
                            <img src="img/girl.jpeg" alt="">
                            <img src="img/girl.jpeg" alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="flecha flecha-anterior fas fa-chevron-left"></div>
                            <div class="carousel-container-inner jzoom">
                                <img data-action="zoom" src="img/<?php echo $producto['imagen'] ?>" alt="<?php echo $producto['nombre'] ?>">
                            </div>
                            <div class="flecha flecha-siguiente fas fa-chevron-right"></div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="detalles-container">
                <header class="header-presentacion-producto cambio2">
                    <h2><?php $product['nombre'] ?></h2>
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
>>>>>>> a1c015977c6a97137dbaaa4610a5e336d218f2d1
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
            
            <div class="valoracion-principal-producto">
                <h3>Custom</h3>
                <div class="estrellas-producto">
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                    <i class="estrella fas fa-star"></i>
                </div>
                <h3><?php echo $producto['precio'] ?>€</h3>
            </div>
            <div class="formularios">
                <form action="" class="form-seleccionar-tallas">
                    <label for="talla">Talla:</label>
                    <select name="seleccionar-talla" class="button-seleccionar-talla">
                        <option value="Talla1" selected>Talla 1</option>
                        <option value="Talla2">Talla 2</option>
                        <option value="Talla3">Talla 3</option>
                        <option value="Talla4">Talla 4</option>
                        <option value="Talla5">Talla 5</option>
                    </select>
                </form>
                <form action="#" class="form-seleccion-botones">
                    <input type="submit" value="Añadir a la cesta">
                    <input type="submit" value="Personalizar">
                </form>
            </div>
        </div>

        <section class="descripcion-producto">
            <h3>Información del producto</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, adipisci mollitia ducimus quisquam repellat soluta nulla consequatur fugiat, nostrum saepe, praesentium nihil ullam omnis vitae animi fugit libero. Id, cum?
            </p>
        </section>
<<<<<<< HEAD
    </section>
=======

>>>>>>> a1c015977c6a97137dbaaa4610a5e336d218f2d1
        <section class="dejarComentario">
            <form action="productos.html">
                <h4>Deja tu Comentario</h4>
                <div class="caja-comentario">
                    <textarea> Ingresa tu comentario...</textarea>
                    <input type="submit" value="Enviar comentario">
                </div>
            </form>
        </section>
        <section class="valoraciones-producto">
            <h3>Valoraciones producto</h3>
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
<<<<<<< HEAD
    </section>
=======
        </section>
>>>>>>> a1c015977c6a97137dbaaa4610a5e336d218f2d1
    <?php else : ?>
    <section>
        El producto no ha sido encontrado
    </section>
    <?php endif; ?>
</main>