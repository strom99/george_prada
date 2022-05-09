// formulario informacion de contacto
$(".enviarformUpdateContact").on('click' , function(e){
    e.preventDefault();
    // cambiar valor de actualizar
    $(".enviarformUpdateContact").val("Actualizar");
    $(".formUpdateName").css("width" , "100%");

    // visualizar los inputs
    $(".nameInput").css("display","block");
    $(".priApellInput").css("display","block");
    $(".seApellInput").css("display","block");
    $(".emailInput").css("display","block");
    $(".telefonoInput").css("display","block");
    $(".cancelarformUpdateContact").css("display", "block");

    // ocultar el texto de span
    $(".nombre").css("display", "none");
    $(".priApellido").css("display", "none");
    $(".seApellido").css("display", "none");
    $(".email").css("display", "none");
    $(".telefono").css("display", "none");

    // coger los input y añadirlos en la lista para que no aparezcan abajo
    $(".nameInput").appendTo(".boxNombre");
    $(".priApellInput").appendTo(".boxPriApell");
    $(".seApellInput").appendTo(".boxSeApell");
    $(".emailInput").appendTo(".boxEmail");
    $(".telefonoInput").appendTo(".boxTelefono");

    // texto del span guardado en variables
    let nombre = $(".nombre").text();
    let priApellido = $(".priApellido").text();
    let seApellido = $(".seApellido").text();
    let email = $(".email").text();
    let telefono = $(".telefono").text();

    // añadimos en los inputs el valor de las variables 
    $(".nameInput").val(nombre);
    $(".priApellInput").val(priApellido);
    $(".seApellInput").val(seApellido);
    $(".emailInput").val(email);
    $(".telefonoInput").val(telefono);

})

$(".cancelarformUpdateContact").on("click", function(e){
    e.preventDefault();
    $(".enviarformUpdateContact").val("Editar");

    $(".cancelarformUpdateContact").css("display","none");
    $(".nombre").css("display", "block");
    $(".priApellido").css("display","block");
    $(".seApellido").css("display","block");
    $(".email").css("display","block");
    $(".telefono").css("display","block");
    $(".formUpdateContact").css("width" , "auto");
    $(".nameInput").css("display","none");
    $(".priApellInput").css("display","none");
    $(".seApellInput").css("display","none");
    $(".emailInput").css("display","none");
    $(".telefonoInput").css("display","none");
})

// formulario datos complementarios
$(".enviarInputDatsComplementarios").on("click", function(e){
    e.preventDefault();
    $(".enviarInputDatsComplementarios").val("Actualizar");
    $(".cancelarUpdateInput").css("display","block")

    //mostramos los inputs
    $(".fechaNacimientoInput").css("display","block");
    $(".paisInput").css("display","block");
    $(".ciudadInput").css("display","block");

    // ocultar el texto de span
    $(".fechaNacimiento").css("display", "none");
    $(".pais").css("display", "none");
    $(".ciudad").css("display", "none");

    // coger los input y añadirlos en la lista para que no aparezcan abajo
    $(".fechaNacimientoInput").appendTo(".boxFechaNacimiento");
    $(".paisInput").appendTo(".boxPais");
    $(".ciudadInput").appendTo(".boxCiudad");

    // texto del span guardado en variables
    let fechaNacimiento = $(".fechaNacimiento").text();
    let pais = $(".pais").text();
    let ciudad = $(".ciudad").text();

    // añadimos en los inputs el valor de las variables 
    $(".fechaNacimientoInput").val(fechaNacimiento);
    $(".paisInput").val(pais);
    $(".ciudadInput").val(ciudad);

})

$(".cancelarUpdateInput").on("click",function(e){
    e.preventDefault();
    $(".enviarInputDatsComplementarios").val("Editar");

    $(".cancelarUpdateInput").css("display","none");
    $(".fechaNacimiento").css("display", "block");
    $(".pais").css("display","block");
    $(".ciudad").css("display","block");

    $(".fechaNacimientoInput").css("display","none");
    $(".paisInput").css("display","none");
    $(".ciudadInput").css("display","none");

});

