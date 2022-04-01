$(".formulario").validate({
    rules:{
        usuario:{
            required:true,
            minlength:4,
            maxlength:15
        }
    },
    messages:{
        usuario:{
            required: ""
        }
    }


})
// al cargar la pagina , le aparesca las cookies , y si acepta y recarga que ya no le aparezca cokies
// sesion cliente , localstorage.setItem("aceptado","si"):localstoreg.getItem(aceptado) para las cookies