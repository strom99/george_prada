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
        $("input[type='Text']").prop("disabled", false);
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
          $(".nombre-usuario").text(respJSON.usuario);
          cancelarInfoCuenta(e);
          alert("Actualizado correctamente");
        } else if(respJSON.status == "errorContra"){
          alert("no son iguales");
        }else {
          alert("Ha habido un error.");
        }
      },
    });
    console.log(data);
  }

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
  $(".formContraseña2 , .showFormContra2").css("display", "flex");
  $(".formContraseña2").attr("class", "showFormContra2");
  $(".formContraseña1").hide();
}

function cancelarActContraseña(e) {
  e.preventDefault();
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
      if (respJSON.status === "ok") {
        cancelarActContraseña(e);
        alert("Actualizado correctamente");
      } else {
        alert("Ha habido un error.");
      }
    },
  });
  console.log(data);
  console.log(respJSON.contra);
}
