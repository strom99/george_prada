// formulario de cambio de imagen perfil
$(".form-img-perfil").on('click', function(e){
  e.preventDefault();
  const data = $(".form-img-perfil").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data,
    success: function (respJSON) {
      console.log('click');
      if (respJSON.status === "ok") {
        alert("Actualizado correctamente");
      } else {
        alert("Ha habido un error.");
      }
    },
  });
});

$(".cancelarInfoCuenta , .actualizarCuenta, .editatInfoCuenta").on(
  "click",
  function (e) {
    let kkk = e.target.value;
    switch (kkk) {
      case "Cancelar":
        cancelarInfoCuenta(e);
        break;
      case "Actualizar":
        actualizar(e);
        break;
      case "Editar":
        $(".formInfoCuenta > input[type='Text']").css(
          "border",
          "1px solid #ccc"
        );
        $(".cancelarInfoCuenta , .actualizarCuenta").css("display", "block");
        $(".editatInfoCuenta").hide();
        $(".formInfoCuenta input[type='Text']").prop("disabled", false);
        $(".formInfoCuenta input[name='rol']").prop("disabled", true);
        break;
      default:
        alert("Opcion incorrecta");
    }
  }
);
// funciones formulario de info cuenta
function cancelarInfoCuenta(e) {
  e.preventDefault();
  $(".formInfoCuenta > input[type='Text']").css("border", "0");
  $(".cancelarInfoCuenta , .actualizarCuenta").hide();
  $(".editatInfoCuenta").show();
  $(".formInfoCuenta input[type='Text']").prop("disabled", true);
};

function actualizar(e) {
  e.preventDefault();
  const data = $(".formInfoCuenta").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data,
    success: function (respJSON) {
      if (respJSON.status === "ok") {
        cancelarInfoCuenta(e);
        alert("Actualizado correctamente");
      } else {
        alert("Ha habido un error.");
      }
    },
  });
  console.log(data);
}

// formulario actualizar contraseñas
$(".actualizarContraseña , .cancelarActContraseña, .guardarContraseña").on(
  "click",
  function (e) {
    let kkk = e.target.value;
    switch (kkk) {
      case "Cancelar":
        cancelarActContraseña(e);
        break;
      case "Actualizar":
        actualizarContraseña(e);
        break;
      case "Guardar cambios":
        guardarCambiosContraseña(e);
        break;
      default:
        alert("Opcion incorrecta");
    }
  }
);

// funciones formulario de contraseña
function actualizarContraseña(e) {
  e.preventDefault();
  $(".formContrasenas input[type='Text']").prop("disabled", false);
  $(".formContraseña2 , .showFormContra2").css("display", "flex");
  $(".formContraseña2").attr("class", "showFormContra2");
  $(".formContraseña1").hide();
}

function cancelarActContraseña(e) {
  e.preventDefault();
  $(".error").hide();
  $(".showFormContra2").hide();
  $(".formContraseña2").attr("class", "formContraseña2");
  $(".formContraseña2").removeAttr("class", "showFormContra2");
  $(".formContraseña1").show();
}

function guardarCambiosContraseña(e) {
  e.preventDefault();
  const data = $(".formContrasenas").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data,
    success: function (respJSON) {
      if (respJSON.status) {
        cancelarActContraseña(e);
        alert("Actualizado correctamente");
        $(".error").hide();
      } else {
        $(".error").show();
        $(".error").text(respJSON.error);
        $(".divContraseñas").after($(".error"));
      }
    },
  });
}

// formulario informacion de contacto
$(".cancelarformUpdateContact , .actualizarInfoContact, .enviarformUpdateContact").on(
  "click",
  function (e) {
    let kkk = e.target.value;
    switch (kkk) {
      case "Cancelar":
        cancelarInfoContacto(e);
        break;
      case "Actualizar":
        actualizarContacto(e);
        break;
      case "Editar":
        $(".formContacto > input[type='Text']").css(
          "border",
          "1px solid #ccc"
        );
        $(".cancelarformUpdateContact , .actualizarInfoContact").css("display", "block");
        $(".enviarformUpdateContact").hide();
        $(".formContacto input[type='Text']").prop("disabled", false);
        break;
      default:
        alert("Opcion incorrecta");
    }
  }
);

function cancelarInfoContacto(e) {
  e.preventDefault();
  $(".formContacto > input[type='Text']").css('border', 'none');
  $(".cancelarformUpdateContact, .actualizarInfoContact ").hide();
  $(".enviarformUpdateContact").show();
  $(".formContacto > input[type='Text']").prop("disabled", true);
}

function actualizarContacto(e) {
  e.preventDefault();

  const x = $(".formContacto").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data: x,
    success: function (respJSON) {
      if (respJSON.status === "ok") {
        cancelarInfoContacto(e);
        alert("Actualizado correctamente");
      } else {
        alert("Ha habido un error con formContact.");
      }
    },
  });
}

// formulario informacion de datos complementarios
$(".cancelarDatsComplement , .actualizarDatsComplement, .enviarInputDatsComplementarios").on(
  "click",
  function (e) {
    let kkk = e.target.value;
    switch (kkk) {
      case "Cancelar":
        cancelarDatsComplementarios(e);
        break;
      case "Actualizar":
        actualizarDatsComplementarios(e);
        break;
      case "Editar":
        $(".formDatsComplementarios > input[type='Text'], .formDatsComplementarios > input[type='date']").css(
          "border",
          "1px solid #ccc"
        );
        $(".cancelarDatsComplement , .actualizarDatsComplement").css("display", "block");
        $(".enviarInputDatsComplementarios").hide();
        $(".formDatsComplementarios input[type='Text'], .formDatsComplementarios input[type='date']").prop("disabled", false);
        break;
      default:
        alert("Opcion incorrecta");
    }
  }
);

function cancelarDatsComplementarios(e) {
  e.preventDefault();
  $(".enviarInputDatsComplementarios").css("display", "block");
  $(".cancelarDatsComplement, .actualizarDatsComplement").hide();
  $(".formDatsComplementarios > input[type='Text'], .formDatsComplementarios > input[type='date']").css("border", "none");
  $(".formDatsComplementarios input[type='Text']").prop("disabled", true);
}

function actualizarDatsComplementarios(e) {
  e.preventDefault();

  const x = $(".formDatsComplementarios").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data: x,
    success: function (respJSON) {
      if (respJSON.status === "ok") {
        cancelarDatsComplementarios(e);
        alert("Actualizado correctamente");
        location.reload();
      } else {
        alert("Ha habido un error con formDatsComplementarios.");
      }
    },
  });
}

// formulario registro direcciones
$(".cancelarDireccionInput1 , .actualizarDirecciones, .enviarInputDatsDireccion1").on(
  "click",
  function (e) {
    let kkk = e.target.value;
    switch (kkk) {
      case "Cancelar":
        cancelarDatsComplementarios(e);
        break;
      case "Actualizar":
        actualizarDatsComplementarios(e);
        break;
      case "Editar":
        $(".formDireccionesRegistro > input[type='Text'], .formDatsComplementarios > input[type='date']").css(
          "border",
          "1px solid #ccc"
        );
        $(".cancelarDatsComplement , .actualizarDatsComplement").css("display", "block");
        $(".enviarInputDatsComplementarios").hide();
        $(".formDatsComplementarios input[type='Text'], .formDatsComplementarios input[type='date']").prop("disabled", false);
        break;
      default:
        alert("Opcion incorrecta");
    }
  }
);

// Formulario eliminar cuenta de usuario
$(".btn-eliminar-cuenta").on('click', function (e) {
  e.preventDefault();
  $('#modal-overlay').toggle(0);

  $(".cancelarEliminarCuenta, .confirmarEliminarCuenta").on('click', function(e){
    e.preventDefault();
    let valor = e.target.value;
    switch(valor){
      case 'Cancelar':
        $(".overlay").css("display","none");
      break;
      case 'Confirmar':
        eliminarCuenta();
      break;
    }
  })
});

function eliminarCuenta(){
  const data = $(".formEliminarCuenta").serialize();

  $.ajax({
    url: "procesos/modificarUsuario.php",
    type: "POST",
    dataType: "json",
    data,
    success: function (respJSON) {
      if (respJSON.url) {
        location.href = respJSON.url;
      }
    },
  });
}
