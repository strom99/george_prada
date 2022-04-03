    <?php
    if (!isset($_SESSION['datosUsuario'])) {
        header('Location: ' . $_SESSION['RUTA_BASE'] . '/index.php?page=InicioSesion');
        exit;
    }
?>
    <main>
        <div class="slider">
            <div class="image-1">
                <img src="./img/ropa4.png" alt="imagen">
            </div>
            <div class="image-2">
                <img src="./img/imagen-12.webp" alt="imagen">
            </div>
        </div>
        <div class="sections-products">
            <div class="card">
                <p>Leggins Black</p>
                <div class="card1-imagen">
                    <img src="./img/card2.webp" alt="modelo">
                    <img src="./img/clasi1.png" alt="" class="estrella">
                </div>
                <div class="min-info">
                    <span>64.90 EUR</span>
                    <button>Ver Más</button>
                </div>
            </div>
            <div class="card">
                <p> Leggins Gray</p>
                <div class="card1-imagen">
                    <img src="./img/card3.webp" alt="modelo">
                    <img src="./img/clasi1.png" alt="" class="estrella">
                </div>
                <div class="min-info">
                    <span>64.90 EUR</span>
                    <button>Ver Más</button>
                </div>
            </div>
            <div class="card">
                <p>High Waist Leggins Black</p>
                <div class="card1-imagen">
                    <img src="./img/card1.webp" alt="modelo">
                    <img src="./img/clasi2.png" alt="" class="estrella">
                </div>
                <div class="min-info">
                    <span>64.90 EUR</span>
                    <button>Ver Más</button>
                </div>
            </div>
            <div class="card">
                <p>High Waist Leggins Black</p>
                <div class="card1-imagen">
                    <img src="./img/card6.webp" alt="" srcset="">
                    <img src="./img/clasi3.png" alt="" class="estrella">
                </div>
                <div class="min-info">
                    <span>64.90 EUR</span>
                    <button>Ver Más</button>
                </div>
            </div>
        </div>
        <div class="banner">
            <p>¿Quiere correos electrónicos que realmente leerá usted!, sobre los últimos detalles y ofertas exclusivas de nuestros productos?</p>
            <button class="click">Click Here</button>
        </div>
        <div class="sections-products-2">
            <div class="sections-imagenes">
                <div class="image-6">
                    <img src="./img/products3.jpg" alt="modelo">
                </div>
                <div class="image-7">
                    <img src="./img/products4.jpg" alt="modelo">
                </div>
            </div>
        </div>


    </main>