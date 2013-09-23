$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#registroUsuario').validate({
        rules: {
            nombre:
                    {
                        required: true,
                        minlength: 4
                    },
            apellido:
                    {
                        required: true,
                        minlength: 4
                    },
            edad:
                    {
                        required: true,
                        minlength: 2
                    },
            fecha_nac:
                    {
                        required: true,
                        date:true
                    },
            direccion:
                    {
                        required: true,
                        minlength: 25

                    },
            dui:
                    {
                        required: true,
                        minlength: 8
                    },
            telefono_contacto:
                    {
                        required: true,
                        minlength: 7
                    },
            telefono_movil:
                    {
                        required: true,
                        minlength: 8
                    },
            email:
                    {
                        required: true,
                        email: true
                    },
            password:
                    {
                        minlength: 8,
                        required: true
                    },
            sexolst:
                    {
                        required: true

                    }
        }
    });

}); // end document.ready