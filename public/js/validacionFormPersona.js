$(document).ready(function () {
    $("#validacionUsuario").validate({
        rules: {
            nombres: {
                required: true,
                maxlength: 100,
            },
            primer_apellido: {
                required: true,
                maxlength: 50,
            },
            segundo_apellido: {
                maxlength: 50,
            },
            cedula:{
                required: true,
                minlength: 6,
                maxlength: 10,
            },
            correo:{
                required: true,
                email: true,
                maxlength: 60,
            },
            telefono:{
                required: true,
                minlength: 11,
                maxlength: 11,
                number: true,
            },
            fecha_nacimiento:{
                required: true,
                number:true,
            },
            promocion_id: {
                required: true,
            },
            fecha_ingreso: {
                required: true,
                number:true,
            },
            fecha_egreso: {
                required: true,
                number:true,
            },
            categoria_id: {
                required: true,
            },
            profesion_id: {
                required: true,
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
            pais: {
                required: true,
            },
            estado: {
                required: true,
            },
            sector: {
                maxlength: 11,
            }
        },
        //For custom messages
        messages: {
            nombres: {
                required: "Requiere sus nombres",
                maxlength: "El maximo de caracteres es de 4",
            },
            primer_apellido: {
                required: "Requiere su primer apellido",
                maxlength: "El maximo de caracteres es de 50"
            },
            segundo_apellido: {
                maxlength: "El maximo de caracteres es de 50",
            },
            cedula:{
                required: "Requiere la cedula",
                minlength: 6,
                maxlength: 10,
            },
            correo:{
                required: true,
                email: true,
                maxlength: 60,
            },
            telefono:{
                required: true,
                minlength: 11,
                maxlength: 11,
                number: true,
            },
            fecha_nacimiento:{
                required: true,
                number:true,
            },
            promocion_id: {
                required: true,
            },
            fecha_ingreso: {
                required: true,
                number:true,
            },
            fecha_egreso: {
                required: true,
                number:true,
            },
            categoria_id: {
                required: true,
            },
            profesion_id: {
                required: true,
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
            pais: {
                required: true,
            },
            estado: {
                required: true,
            },
            sector: {
                maxlength: 11,
            }
        },
    });
});