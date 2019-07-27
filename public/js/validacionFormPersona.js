$(document).ready(function () {
    $("#formularioPersona").validate({
        rules: {
            nombres: {
                required: true,
                maxlength: 150,
            },
            primer_apellido: {
                required: true,
                maxlength: 100,
            },
            segundo_apellido: {
                maxlength: 100,
            },
            cedula:{
                required: true,
                minlength: 6,
                maxlength: 10,
                number: true
            },
            correo:{
                required: false,
                email: true,
                maxlength: 100,
            },
            telefono:{
                required: false,
                /*minlength: 11,
                maxlength: 11,*/
                number: true,
            },
            fecha_nacimiento:{
                required: false,
            },
            promocion_id: {
                required: false,
            },
            fecha_ingreso: {
                required: false,
            },
            fecha_egreso: {
                required: false,
            },
            categoria_id: {
                required: false,
            },
            profesion_id: {
                required: false,
            },
            especialidad: {
                maxlength: 100,
            },
            ocupacion: {
                maxlength: 100,
            },
            instagram: {
                maxlength: 60,
            },
            twitter: {
                maxlength: 60,
            },
            linkeding: {
                maxlength: 150,
            },
            facebook: {
                maxlength: 150,
            },
            pais: {
                required: false,
            },
            estado: {
                required: false,
            },
            ciudad: {
                maxlength: 100,
            },
            sector: {
                maxlength: 100,
            }
        },
        //For custom messages
        messages: {
            nombres: {
                required: "Requiere sus nombres",
                maxlength: "El maximo de caracteres es de 150",
            },
            primer_apellido: {
                required: "Requiere su primer apellido",
                maxlength: "El maximo de caracteres es de 100"
            },
            segundo_apellido: {
                maxlength: "El maximo de caracteres es de 100",
            },
            cedula:{
                required: "Requiere la cedula",
                minlength: "El minimo de caracteres es de 4",
                maxlength: "El maximo de caracteres de 10",
                number: "Solo se permiten caracteres numericos"
            },
            correo:{
                required: "Requiere el correo",
                email: "Tiene que ser un correo valido",
                maxlength: "El maximo caracteres es de 100",
            },
            telefono:{
                required: "Requiere el telefono",
                /*minlength: "Debe contener 11 caracteres",
                maxlength: "Debe contener 11 caracteres",*/
                number: "El campo solo acepta numeros",
            },
            fecha_nacimiento:{
                required: "La fecha de nacimiento es obligtorio",
                //number:true,
            },
            promocion_id: {
                required: "La promocion es obligatorio",
            },
            fecha_ingreso: {
                required: "La fecha de ingreso es obligatorio",
                //number:true,
            },
            fecha_egreso: {
                required: "La fecha de egreso es obligatorio",
                //number:true,
            },
            categoria_id: {
                required: "La categoria es obligatorio",
            },
            profesion_id: {
                required: "La profesion es obligatorio",
            },
            especialidad: {
                maxlength: "Debe tener un maximo de 100 caracteres",
            },
            ocupacion: {
                maxlength: "Debe tener un maximo de 100 caracteres",
            },
            instagram: {
                maxlength: "Debe tener un maximo de 60 caracteres",
            },
            twitter: {
                maxlength: "Debe tener un maximo de 60 caracteres",
            },
            linkeding: {
                maxlength: "Debe tener un maximo de 150 caracteres",
            },
            facebook: {
                maxlength: "Debe tener un maximo de 150 caracteres",
            },
            pais: {
                required: "El pais debe ser obligatorio",
            },
            estado: {
                required: "El estado debe ser obligatorio",
            },
            ciudad: {
                maxlength: "La ciudad debe contener un maximo de 100 caracteres",
            },
            sector: {
                maxlength: "El sector debe contener un maximo de 100 caracteres",
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