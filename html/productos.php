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
            <p>Si estas buscando camisetas gym baratas, estas en lugar adecuado. Los mejores modelos y precios, solo de la mejor calidad. Comprueba nuestros modelos.</p>
        </div>
        <div class="content-cards">
            <?php foreach ($array as $producto => $valor) {
            ?>
                <div class="card">
                    <img src="./img/<?php echo $valor['imagen'] ?>" alt="imagen-modelo-gym">
                    <div class="min-info">
                        <span><?php echo $valor['genero'] ?></span>
                        <a href="<?php echo $_SESSION['RUTA_BASE'] ?>/index.php?page=producto_detalle&id=<?php echo $valor['id'] ?>"><?php echo $valor['nombre']  ?></a>
                        <img src=" ./img/clasi1.png" alt="estrellas" class="estrella">
                        <span class="precio"><?php echo $valor['precio']  ?>€</span>
                    </div>
                </div>
            <?php }  ?>
<<<<<<< HEAD
=======
            <!--
            <div class="card">
                <img src="./img/card7.png" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Camiseta Aesthetic Girl 2.0</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card8.jpg" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Vital Pro Leggins 2.0</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card8.webp" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex 8 Functions Shorts - Tshir</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card10.webp" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex Technical Complement</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card10.png" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex Technical Complement</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
        </div>

        <div class="content-cards">
            <div class="card">
                <img src="./img/card11.png" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Camiseta Aesthetic Girl 2.0</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card12.webp" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Vital Pro Leggins 2.0</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card13.png" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex 8 Functions Shorts - Tshir</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card14.jpg" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex Technical Complement</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>
            <div class="card">
                <img src="./img/card15.webp" alt="imagen-modelo-gym">
                <div class="min-info">
                    <span>Camisetas</span>
                    <h4>Apex Technical Complement</h4>
                    <img src="./img/clasi1.png" alt="estrellas" class="estrella">
                    <span class="precio">€24,99</span>
                </div>
            </div>-->
>>>>>>> d067576b12bac28c99b88681302af42870fcc7fe
        </div>
    </header>
    <aside>
        <h3>Filtrar por</h3>

    </aside>
</div>