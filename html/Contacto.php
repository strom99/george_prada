
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/Contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Contacto</title>
</head>

<body>
  <!-- Menu -->
    <?php include '../procesos/menu.php'?>
  <!------------>
    <div class="contact_form">
        <div class="formulario">
            <h1 class="animate__animated animate__backInLeft">Formulario de Contacto</h1>
            <form action="Contacto.html" method="post">
                <p>
                    <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_nombre" id="nombre" maxlength="40"
                        placeholder="Ingresa su nombre" required pattern="[A-Za-z0-9]+">
                </p>

                <p>
                    <label for="email" class="colocar_email">Correo
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="introducir_email" id="email" maxlength="50"
                        placeholder="Ingresa su correo" required />
                </p>

                <p>
                    <label for="product" class="colocar_idproducto">ID del Producto
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="prod" name="introducir_idproducto" id="producto" maxlength="15"
                        placeholder="Ingresa el ID del producto" required>
                </p>

                <p>
                    <label for="asunto" class="colocar_asunto">Asunto
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_asunto" id="assunto" maxlength="50"
                        placeholder="Ingresa el asunto" required>
                </p>

                <p>
                    <label for="mensaje" class="colocar_mensaje">Explicación Detallada
                        <span class="obligatorio">*</span>
                    </label>
                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje"
                        placeholder="Explica detalladamente el Asunto..." required></textarea>
                </p>
                <button type="submit" name="enviar_formulario" id="enviar">Enviar</button>
            </form>
        </div>
    </div>

</body>

</html>