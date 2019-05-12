$(document).ready(function () {
	$("#formularioAdministrativo").validate({
		rules: {
			descripcion: {
				required: true,
                maxlength: 50,
			}
		},
        //For custom messages
        messages: {
        	descripcion: {
        		required: "Requiere sus nombres",
                maxlength: "El maximo de caracteres es de 4",
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