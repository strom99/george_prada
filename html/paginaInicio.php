    <?php
    if (!isset($_SESSION['datosUsuario'])) {
        header('Location: ' . $_SESSION['RUTA_BASE'] . '/index.php?page=InicioSesion');
        exit;
    }

    ?>
    <section class="portada">
        <!-- Session-User -->
        <main>
            <section class="banner-container">
                <div class="carousel-container">
                    <div class="flecha flecha-anterior fas fa-chevron-left"></div>
                    <div class="carousel-container-inner">
                        <div class="carousel-image"></div>
                    </div>
                    <div class="flecha flecha-siguiente fas fa-chevron-right"></div>
                </div>
                <div class="productoDetalle">
                    <p>Nombre de producto</p>
                    <a class="boton" href="#">Quiero verlos</a>
                </div>
            </section>
        </main>
    </section>
    <section class="servicios">
        <div>
            <img src="https://pbstudio.es/wp-content/uploads/2021/09/P-1-scaled.jpg" alt="">
            <p>Ofrecemos la posibilidad de que personalices tu ropa como te guste</p>
        </div>
        <div>
            <img src="https://pbstudio.es/wp-content/uploads/2021/09/P-1-scaled.jpg" alt="">
            <p>Apoyo directo por Chatbot 24/7</p>
        </div>
    </section>