const completo = $(".formLogin").validate({
    rules: {
        usuario: {
            required: true,
            minlength: 4,
            maxlength: 15
        },
        contrasena: {
            required: true,
            minlength: 5,
            maxlength: 15
        }
    },
    messages: {
        usuario: {
            required: "Te falta rellenar los campos de usuario",
            minlength: "Te faltan mas caracteres",
            maxlength: "El numero maximo de caracteres es 15"
        },
        contrasena: {
            required: "Ingresa la contraseña porfavor",
            minlength: "Te faltan mas caracteres",
            maxlength: "El numero maximo de caracteres es 15"
        }
    },
    /* ejecutacion cuando el formulario es valido [submitHandler] */
    submitHandler: function (form) {
        console.log(form);
        $.ajax({
            type: "POST",
            url: "procesos/proceso_login.php",
            dataType: "json",
            // envia los inputs del formulario (name) con post
            data: $(form).serialize(),
            success: function (respJSON) {
                console.log();
                if (respJSON.error) {
                    $(".mensaje-error-login").show();
                    $(".mensaje-error-login").text(respJSON.error);
                } else {
                    location.href = respJSON.url;
                }
            }
        });
    }
});



