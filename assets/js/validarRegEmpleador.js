$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#registroEmpleador').validate({
        rules: {
            nombre_emp:
                    {
                        required: true,
                        minlength: 8,
                        patterner: [0, 8]
                    },
            password_em:
                    {
                        minlength: 8,
                        required: true,
                        patterner: [0, 8]
                    },
            confirm_password:
                    {
                        minlength: 8,
                        required: true,
                        equalTo: '#password_em',
                        patterner: [0, 8]
                    },
            email_em:
                    {
                        required: true,
                        email: true,
                    },
            telefono_em:
                    {
                        required: true,
                        minlength: 8,
                        patterner: [0, 8]

                    },
            descripcion_em:
                    {
                        required: true,
                        minlength: 25,
                    },
            actividad_em:
                    {
                        required: true,
                    }
        }
    });

}); // end document.ready