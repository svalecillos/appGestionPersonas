$(document).ready(function () {
    $("#formRegistrarUsuario").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
            password_confirmation: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Ingrese su nombre",
            },
            email: {
                required: "Ingrese un email",
                email: true,
            },
            password: {
                required: "Ingrese una contraseña",
            },
            password_confirmation: {
                required: "Confirme su contraseña",
            },
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
});