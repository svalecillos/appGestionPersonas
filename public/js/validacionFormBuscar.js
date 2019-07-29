$(document).ready(function () {
    $("#formBuscador").validate({
        rules: {
            cedula: {
                required: true,
                minlength: 6,
                maxlength: 10,
                number: true
            }
        },
        messages: {
            cedula: {
                required: "Requiere la cedula",
                minlength: "El minimo de caracteres es de 6",
                maxlength: "El maximo de caracteres de 10",
                number: "Solo se permiten caracteres numericos"
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