$(document).ready(function () {
  $(".crear-producto-button").on("click", function () {
    $(".crear-producto-form").toggleClass("hide");
  });

  $(".producto-button").on("click", function (e) {
    e.preventDefault();
    let action = e.target.dataset.action;
    let id = e.target.dataset.id;

    $.ajax({
      url: "procesos/productos.php",
      method: "POST",
      dataType: "json",
      data: "action=" + action + "&id=" + id,
      success: function (response) {
        if (response.status === "ok" && action === "delete") {
          $(e.target).closest("tr").remove();
        }
      },
    });
  });
});
