$(".formulario").validate({
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
        }
    },
    messages:{
        usuario:{
            required:"Te falta rellenar los campos de usuario",
            minlength:"Te faltan mas caracteres",
            maxlength:"El numero maximo de caracteres es 15"
        },
        contrasena:{
            required:"Ingresa la contraseña porfavor",
            minlength:"Te faltan mas caracteres",
            maxlength:"El numero maximo de caracteres es 15"
        }
    }
}); 
