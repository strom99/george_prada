<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../estilos/paginaInicio.css">
    <script src="https://kit.fontawesome.com/6f213ce53f.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="portada">
        <header class="barra-menu">
            <div class="menu-hamburguesa">
                <button>
                    <i class=" menu fas fa-bars"></i>
                </button>
            </div>
            <nav>
                <a href="">
                    <i class="user fas fa-user-circle"></i>
                </a>
                <a href="">
                    <i class="bolsa fas fa-shopping-bag"></i>
                </a>
            </nav>
        </header>
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
                    <a href="#">Quiero verlos</a>
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
        <div class="chat">
            <i class="fa-solid fa-message"></i>
        </div>

    </section>
    <form action="../PHP/procesos/logout.php" method="POST">
        <input type="submit" value="Salir" name="salir">
    </form>
    <footer>
        <p>Propiedad de George Prada &copy;</p>
    </footer>
</body>

</html>