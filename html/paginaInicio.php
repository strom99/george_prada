    <?php
    if (!isset($_SESSION['datosUsuario'])) {
        header('Location: ' . $_SESSION['RUTA_BASE'] . '/index.php?page=InicioSesion');
        exit;
    }
?>
    <main>
        <div class="slider">
            <div class="image-1">
                <img src="./img/ropa4.png" alt="asdasd">
            </div>
            <div class="image-2">
                    asdasdas
            </div>
        </div>
    </main>