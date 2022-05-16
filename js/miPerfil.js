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

});

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

$(".enviarInputDatsDireccion1").on("click",function(e){
    e.preventDefault();

    // cambiar valor de actualizar
    $(".enviarInputDatsDireccion1").val("Actualizar");

    // visualizar los inputs
    $(".inputNombreCompleto1").css("display","block");
    $(".inputTelefono1").css("display","block");
    $(".inputLineaDireccion1").css("display","block");
    $(".inputPiso1").css("display","block");
    $(".inputCodPostal1").css("display","block");
    $(".inputCiudad1").css("display","block");
    $(".inputProvincia1").css("display","block");
    $(".cancelarDireccionInput1").css("display", "block");


    // ocultar el texto de span
    $(".boxNombre1").css("display", "none");
    $(".boxTelefono1").css("display", "none");
    $(".boxCalle1").css("display", "none");
    $(".boxPiso1").css("display", "none");
    $(".boxCodPostal1").css("display", "none");
    $(".boxCiudad1").css("display", "none");
    $(".boxProvincia1").css("display", "none");

    // coger los input y añadirlos en la lista para que no aparezcan abajo
    $(".inputNombreCompleto1").appendTo(".boxLiNombre1");
    $(".inputTelefono1").appendTo(".boxLiTelefono");
    $(".inputLineaDireccion1").appendTo(".boxLiDireccion");
    $(".inputPiso1").appendTo(".boxLiPiso");
    $(".inputCodPostal1").appendTo(".boxLiCodPostal");
    $(".inputCiudad1").appendTo(".boxLiCiudad");
    $(".inputProvincia1").appendTo(".boxLiProvincia");

    // texto del span guardado en variables
    let nombre = $(".boxNombre1").text();
    let telefono = $(".boxTelefono1").text();
    let direccion = $(".boxCalle1").text();
    let piso = $(".boxPiso1").text();
    let codPostal = $(".boxCodPostal1").text();
    let ciudad = $(".boxCiudad1").text();
    let provincia = $(".boxProvincia1").text();

    // añadimos en los inputs el valor de las variables 
    $(".inputNombreCompleto1").val(nombre);
    $(".inputTelefono1").val(telefono);
    $(".inputLineaDireccion1").val(direccion);
    $(".inputPiso1").val(piso);
    $(".inputCodPostal1").val(codPostal);
    $(".inputCiudad1").val(ciudad);
    $(".inputProvincia1").val(provincia);
});

$(".cancelarDireccionInput1").on("click",function(e){
    e.preventDefault();
    $(".enviarInputDatsDireccion1").val("Editar");
    $(".cancelarDireccionInput1").css("display","none");
    
    $(".inputNombreCompleto1").css("display", "none");
    $(".inputTelefono1").css("display", "none");
    $(".inputLineaDireccion1").css("display", "none");
    $(".inputPiso1").css("display", "none");
    $(".inputCodPostal1").css("display", "none");
    $(".inputCiudad1").css("display", "none");
    $(".inputProvincia1").css("display", "none");

    $(".boxNombre1").css("display", "block");
    $(".boxTelefono1").css("display","block");
    $(".boxCalle1").css("display","block");
    $(".boxPiso1").css("display","block");
    $(".boxCodPostal1").css("display","block");
    $(".boxCiudad1").css("display","block");
    $(".boxProvincia1").css("display","block");

    

});

