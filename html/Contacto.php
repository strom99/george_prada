<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/Contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <script src="./js/Contacto.js"></script>
    <title>Contacto</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="imagen">
                <div class="titulo">
                    <h1>CONTACTA CON NOSOTROS</h1>
                    <p>Estaremos encantados de resolver cualquier duda o consulta que tengais</p>
                </div>
            </div>
        </header>
        <div class="min-info">
                <h2>ENVIANOS TU RESPUESTA</h2>
                <p>
                    Contacta con nosotros atraves de este formulario, cualquier duda que
                    tengas escribenos!.
            </p>
         </div>
        <main>
            <div class="formulario">
                <form action="#">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre*">
                    <label for="email">Correo Electronico</label>
                    <input type="email" name="correo" id="correo" placeholder="Correo*">
                    <label for="telefono">Teléfono Móvil</label>
                    <input type="number" name="Telefono" id="telefono" placeholder="Telefono">
                    <label for="comentario">Tú Mensaje</label>
                    <textarea name="comentario" id="comentario" cols="20" rows="6"></textarea>
                    <input type="submit" id="submit" value="Enviar">
                </form>
            </div>
            
            <div id="accordion">
                <h3>Section 1</h3>
                <div>
                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi
                        metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros.
                        Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque
                        vulputate.</p>
                </div>
                <h3>Section 2</h3>
                <div>
                    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit,
                        dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac
                        justo. Vivamus non quam. In suscipit faucibus urna. </p>
                </div>
                <h3>Section 3</h3>
                <div>
                    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus
                        pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.
                        Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo
                        purus venenatis dui. </p>
                    <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                    </ul>
                </div>
                <h3>Section 4</h3>
                <div>
                    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Aenean lacinia mauris vel est. </p>
                    <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                </div>
                <h2>Te dejamos unas FAQ's para ver si resolvemos tus dudas antes de enviar un mensaje.</h2>
            </div>
        </main>
        <footer>
            En George Prada queremos compartir contigo esta pasión y acompañarte paso a paso hasta conseguir tus
            objetivos &copy 2020.
        </footer>
    </div>
</body>

</html>