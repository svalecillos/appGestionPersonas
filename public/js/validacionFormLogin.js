$(document).ready(function () {
    $("#formLogin").validate({
        rules: {
            email: {
                required: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Ingrese un email",
            },
            password: {
                required: "Ingrese una contraseña valida",
            }
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