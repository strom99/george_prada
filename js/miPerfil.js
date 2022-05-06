
$(".enviarformUpdateContact").on('click' , function(e){
    e.preventDefault();
    $(".enviarformUpdateContact").val("Actualizar");

    $(".formUpdateName").css("width" , "100%");
    $(".nameInput").css("display","block");
    $(".priApellInput").css("display","block");
    $(".seApellInput").css("display","block");
    $(".emailInput").css("display","block");
    $(".telefonoInput").css("display","block");
    $(".cancelar").css("display", "block");

    $(".nombre").css("display", "none");
    $(".priApellido").css("display", "none");
    $(".seApellido").css("display", "none");
    $(".email").css("display", "none");
    $(".telefono").css("display", "none");

    $(".nameInput").appendTo(".boxNombre");
    $(".priApellInput").appendTo(".boxPriApell");
    $(".seApellInput").appendTo(".boxSeApell");
    $(".emailInput").appendTo(".boxEmail");
    $(".telefonoInput").appendTo(".boxTelefono");

    let nombre = $(".nombre").text();
    let priApellido = $(".priApellido").text();
    let seApellido = $(".seApellido").text();
    let email = $(".email").text();
    let telefono = $(".telefono").text();
    $(".nameInput").val(nombre);
    $(".priApellInput").val(priApellido);
    $(".seApellInput").val(seApellido);
    $(".emailInput").val(email);
    $(".telefonoInput").val(telefono);

})

$(".cancelarformUpdateContact").on("click", function(e){
    e.preventDefault();
    $(".enviarformUpdateContact").val("Editar");
    $(".nombre").css("display", "block")
    $(".formUpdateContact").css("width" , "auto");
    $(".cancelarformUpdateContact").css("display", "none");
    $(".nameInput").css("display","none");
})

