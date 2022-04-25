/*$(".formulario").validate({
    rules:{
        usuario:{
            required:true,
            minlength:4,
            maxlength:15
        },
        contrasena:{
            required:true,
            minlength:5,
            maxlength:15
        },
        contrasena2:{
            required:true,
            equalTo:".contrasena"
        },
        email:{
            required:true,
            email:true
        }
    },
    messages:{
        usuario:{
            required:"rellena el usuario*",
            minlength:"Porfavor un minimo de 4 letras*",
            maxlength:"El numero maximo de letras es 15"
        },
        contrasena:{
            required:"rellena la contraseña*",
            minlength:"Porfavor un minimo de caracteres es 5*",
            maxlength:"El numero maximo de caracteres es 15"
        },
        contrasena2:{
            required:"Repite la contraseña*",
            equalTo:"Porfavor ingresa la misma contraseña"
        },
        email:{
            required:"Necesitamos tu direccion de correo*",
            email:"Esta direccion de correo es invalida"
        }
    }
}); */

$(".formulario").on('submit' , function(e){
    e.preventDefault();

    $.ajax({
        type:"POST",
        url:"procesos/registrar.php",
        dataType:"json",
        data: $(this).serialize(),
        success: function(respJSON){
            if(respJSON.error){
                $("#json").text(respJSON.error);
            }else{
                location.href= respJSON.url;
            }
        }
    });
})
