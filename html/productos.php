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
        </div>
    </header>
    <aside>
        <h3>Filtrar por</h3>

    </aside>
</div>