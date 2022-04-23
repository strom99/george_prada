<?php
include 'procesos/conexionBD.php';
$producto_id = $_GET['id'] ?? null;
$producto = null;
?>
<main>
    <?php if ($producto_id) : ?>
        <?php foreach ($_SESSION['productos'] as $product) :
            if ($product['id'] == $producto_id) {  ?>
                <section class="presentacion-producto">
                    <div>
                        <header class="header-presentacion-producto cambio">
                            <h2><?php echo $product['nombre'] ?></h2>
                            <button>
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </header>

                        <div class="aside">
                            <section class="banner-container">
                                <div class="imagenes-secundarias">
                                    <img src="img/girl.jpeg" alt="">
                                    <img src="img/girl.jpeg" alt="">
                                    <img src="img/girl.jpeg" alt="">
                                    <img src="img/girl.jpeg" alt="">
                                </div>
                                <div class="carousel-container">
                                    <div class="flecha flecha-anterior fas fa-chevron-left"></div>
                                    <div class="carousel-container-inner">
                                        <img src="img/<?php echo $product['imagen'] ?>" alt="<?php echo $product['nombre'] ?>">
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
                            </div>
                            <h3>€</h3>
                        </div>
                        <div class="formularios">
                            <form action="" class="form-seleccionar-tallas">
                                <label for="talla">Talla</label>
                                <select name="seleccionar-talla" class="button-seleccionar-talla">
                                    <option value="Talla1">Talla 1</option>
                                    <option value="Talla2" selected>Talla 2</option>
                                    <option value="Talla3">Talla 3</option>
                                    <option value="Talla4">Talla 4</option>
                                    <option value="Talla5">Talla 5</option>
                                </select>
                            </form>
                            <form action="" class="form-seleccion-botones">
                                <input type="submit" value="Añadir a la cesta">
                                <p> o </p>
                                <input type="submit" value="Personalizar">
                            </form>
                        </div>
                    </div>

                    <section class="descripcion-producto">
                        <h3>Detalles del producto</h3>
                        <div>
                        </div>
                    </section>
                </section>
        <?php }
        endforeach ?>
        <!--
        <section class="dejarComentario">
            <form action="productos.html">
                <label for="">Deja tu comentario</label>
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
                        <p>nombre comprador</p>
                        <p>Hace 10 meses</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                        praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                        et ratione voluptatem a!
                        Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                        vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                        soluta totam consequatur consequuntur at? Nemo.</p>
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
                        <p>nombre comprador</p>
                        <p>Hace 10 meses</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                        praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                        et ratione voluptatem a!
                        Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                        vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                        soluta totam consequatur consequuntur at? Nemo.</p>
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
                        <p>nombre comprador</p>
                        <p>Hace 10 meses</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aut similique iste saepe quisquam
                        praesentium atque dolorum, distinctio fugit illum accusamus eius mollitia suscipit tenetur nihil
                        et ratione voluptatem a!
                        Culpa veniam, cumque mollitia delectus fugiat esse, tenetur voluptatem, ducimus odit aspernatur
                        vitae ex architecto quo reprehenderit sequi consectetur repellendus minus expedita fuga! Facilis
                        soluta totam consequatur consequuntur at? Nemo.</p>
                </article>
            </div>-->
        </section>
    <?php else : ?>
        <section>
            El producto no ha sido encontrado
        </section>
    <?php endif; ?>
</main>