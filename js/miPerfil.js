
$(".enviar").on('click' , function(e){
    e.preventDefault();
    $(".formUpdateName").css("width" , "100%");
    $(".nameInput").css("display","block");
    $(".cancelar").css("display", "block");
    $(".nombre").css("display", "none")
    let nombre = $(".nombre").text();
    $(".nameInput").val(nombre);

})

$(".cancelar").on("click", function(e){
    e.preventDefault();
    $(".nombre").css("display", "block")
    $(".formUpdateName").css("width" , "auto");
    $(".cancelar").css("display", "none");
    $(".nameInput").css("display","none");
})

