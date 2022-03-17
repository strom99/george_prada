const hamburguesa = document.querySelector(".hamburguesa");

hamburguesa.addEventListener("click", function () {
  document.querySelector(".barra-menu").classList.toggle("header-expanded");
});
