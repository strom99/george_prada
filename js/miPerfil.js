// formulario informacion cuenta
$(".enviarInfoCuenta").on('click' , function(e){
    e.preventDefault();

    // cambiar valor de actualizar
    $(".enviarInfoCuenta").val("Actualizar");

    // visualizar los inputs
    $(".nombreUserInput, .correoInput, .rolInput, .cancelarInfoCuenta").css("display","block");

    // ocultar el texto de span
    $(".nombreUser , .correo , .rol").css("display", "none");

    // coger los input y añadirlos en la lista para que no aparezcan abajo
    $(".nombreUserInput").appendTo(".boxNombreUser");
    $(".correoInput").appendTo(".boxCorreo");
    $(".rolInput").appendTo(".boxRol");

    // texto del span guardado en variables
    let nombre = $(".nombreUser").text();
    let correo = $(".correo").text();
    let rol = $(".rol").text();

    // añadimos en los inputs el valor de las variables 
    $(".nombreUserInput").val(nombre);
    $(".correoInput").val(correo);
    $(".rolInput").val(rol);
});
$(".cancelarInfoCuenta").on("click", function(e){
    e.preventDefault();
    $(".enviarInfoCuenta").val("Editar");

    $(".nombreUser, .correo , .rol").css("display", "block");
    $(".nombreUserInput, .correoInput, .rolInput , .cancelarInfoCuenta").css("display","none");
})

// actualizar contraseñas
$(".enviarActContraseña").on("click", function(e){
    e.preventDefault();

    $(".boxContraseñas , .cancelarActContraseña").css("display","flex");
})
$(".cancelarActContraseña").on("click",function(e){
    e.preventDefault();

    $(".boxContraseñas , .cancelarActContraseña").hide();
})

// formulario informacion de contacto
$(".enviarformUpdateContact").on('click' , function(e){
    e.preventDefault();

    // cambiar valor de actualizar
    $(".enviarformUpdateContact").val("Actualizar");
    $(".formUpdateName").css("width" , "100%");

    // visualizar los inputs
    $(".mostrar").css("display","block");

    // ocultar el texto de span
    $(".nombre , .priApellido , .seApellido, .telefono").css("display", "none");

    // coger los input y añadirlos en la lista para que no aparezcan abajo
    $(".nameInput").appendTo(".boxNombre");
    $(".priApellInput").appendTo(".boxPriApell");
    $(".seApellInput").appendTo(".boxSeApell");
    $(".telefonoInput").appendTo(".boxTelefono");

    // texto del span guardado en variables
    let nombre = $(".nombre").text();
    let priApellido = $(".priApellido").text();
    let seApellido = $(".seApellido").text();
    let telefono = $(".telefono").text();

    // añadimos en los inputs el valor de las variables 
    $(".nameInput").val(nombre);
    $(".priApellInput").val(priApellido);
    $(".seApellInput").val(seApellido);
    $(".telefonoInput").val(telefono);

});
$(".cancelarformUpdateContact").on("click", function(e){
    e.preventDefault();
    $(".enviarformUpdateContact").val("Editar");

    $(".nombre, .priApellido , .seApellido , .telefono").css("display", "block");
    $(".formUpdateContact").css("width" , "auto");
    $(".nameInput, .priApellInput, .seApellInput , .telefonoInput, .cancelarformUpdateContact").css("display","none");
})

// formulario datos complementarios
$(".enviarInputDatsComplementarios").on("click", function(e){
    e.preventDefault();
    $(".enviarInputDatsComplementarios").val("Actualizar");

    //mostramos los inputs
    $(".fechaNacimientoInput , .cancelarUpdateInput, .paisInput, .ciudadInput").css("display","block");

    // ocultar el texto de span
    $(".fechaNacimiento, .ciudad, .pais").css("display", "none");

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

    $(".fechaNacimiento, .pais, .ciudad").css("display", "block");

    $(".fechaNacimientoInput, .cancelarUpdateInput, .paisInput, .ciudadInput").css("display","none");

});

// Formulario direcciones
$(".enviarInputDatsDireccion1").on("click",function(e){
    e.preventDefault();

    // cambiar valor de actualizar
    $(".enviarInputDatsDireccion1").val("Actualizar");

    // visualizar los inputs
    $(".inputNombreCompleto1, .inputTelefono1, .inputLineaDireccion1, .inputPiso1, .inputCodPostal1, .inputCiudad1, .inputProvincia1, .cancelarDireccionInput1").css("display","block");

    // ocultar el texto de span
    $(".boxNombre1, .boxTelefono1, .boxCalle1, .boxPiso1, .boxCodPostal1, .boxCiudad1, .boxProvincia1").css("display", "none");

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
    $(".cancelarDireccionInput1, .inputNombreCompleto1, .inputTelefono1, .inputLineaDireccion1, .inputPiso1, .inputCodPostal1, .inputCiudad1, .inputProvincia1").css("display","none");

    $(".boxNombre1, .boxTelefono1, .boxCalle1, .boxPiso1, .boxCodPostal1, .boxCiudad1, .boxProvincia1").css("display", "block");
});


