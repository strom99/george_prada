$(document).ready(function () {
  $(".producto-button").on("click", function (e) {
    const action = $(e.target).data("action");
    const id = $(e.target).data("id");

    if (action === "insert") {
      $(".inputsContainer").removeClass("hide");
      $(".main-form-submit-button").data("action", "create");
      setFormValues();
    } else if (action === "edit") {
      $(".inputsContainer").removeClass("hide");
      $(".main-form-submit-button").data("action", "update");
      const producto = JSON.parse(e.target.dataset.producto);
      setFormValues(producto);
    } else if (action === "cerrar") {
      $(".inputsContainer").addClass("hide");
    }

    if (action) {
      $("input[name=action]").val(action);
    }
    if (id) {
      $("input[name=id]").val(id);
    }

    if (e.target.type === "submit") {
      submitForm();
    }
  });

  $("#formProductos").on("submit", function (e) {
    e.preventDefault();
  });

  function setFormValues(producto) {
    if (producto) {
      $("input[name=nombre]").val(producto.nombre);
      $("input[name=marca]").val(producto.marca);
      $("input[name=precio]").val(producto.precio);
      $("input[name=categoria]").val(producto.categoria);
      $("input[name=cantidad]").val(producto.cantidad);
      $("select[name=genero]").val(producto.genero);
      $("input[name=descripcion]").val(producto.descripcion);
    } else {
      $("input[name=nombre]").val("");
      $("input[name=marca]").val("");
      $("input[name=precio]").val("");
      $("input[name=categoria]").val("");
      $("input[name=cantidad]").val("");
      $("select[name=genero]").val("Hombre");
      $("input[name=descripcion]").val("");
      $("input[name=imagen]").val("");
    }
  }

  function submitForm() {
    // const data = $("#formProductos").serialize();
    const fd = new FormData(document.getElementById("formProductos"));
    $.ajax({
      url: "procesos/productos.php",
      method: "POST",
      dataType: "json",
      processData: false,
      contentType: false,
      data: fd,
      success: function (response) {
        if (response.status === "ok") {
          window.location.reload();
        } else {
          alert("error");
        }
      },
    });
  }
});
