  <div class="contact_form">

    <div class="formulario">
      <h1 class="animate__animated animate__backInLeft">Datos de Pago</h1>
      <form action="DatosPago.html" method="post"></form>

      <p>
        <label for="nombre" class="colocar_nametarjeta">Nombre Tarjeta
          <span class="obligatorio">*</span>
        </label>
        <input type="text" name="introducir_nombretarjeta" id="nametarjeta" pattern="[A-Za-z]" placeholder="Ingresa su nombre de tarjeta" required>
      </p>

      <p>
        <label for="email" class="colocar_numtarjeta">Número Tarjeta
          <span class="obligatorio">*</span>
        </label>
        <input type="number" name="introducir_númerotarjeta" id="numtarjeta" placeholder="Ingresa su número de tarjeta" required>
      </p>

      <p>
        <label for="product" class="colocar_cvv">CVV
          <span class="obligatorio">*</span>
        </label>
        <input type="number" name="introducir_cvv" id="cvv" maxlength="3" placeholder="Ingresa el CVV de la tarjeta" required>
      </p>

      <p>
        <label for="asunto" class="colocar_fecha">Fecha Caducidad
          <span class="obligatorio">*</span>
        </label>
        <input type="date" name="introducir_fecha" id="fecha" placeholder="Ingresa la fecha de caducidad" required>
      </p>

      <button class="btn-general" type="submit" name="aceptar_pago" id="aceptar">Pagar</button>
      <button class="btn-general" type="submit" name="cancelar_pago" id="cancelar">Cancelar</button>

      </form>
    </div>
  </div>