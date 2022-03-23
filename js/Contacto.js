jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
  $( "#Contacto.html" ).validate({
    rules: {
      Nombre: {
        require_from_group: [1, ".prueba"]
      },
      Correo: {
        require_from_group: [1, ".prueba"]
      },
      Id_Producto: {
        require_from_group: [1, ".prueba"]
      },
      Asunto: {
        require_from_group: [1, ".prueba"]
      }
    }
  });