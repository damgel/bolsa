$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#registroEmpleador').validate({
        rules: {
			
			
			
            nombre_emp:
                    {
                        required: true,
                        minlength: 12,
						patterner:[0,10]
                    },
            password_emp:
                    {
                        minlength: 8,
                        required: true,
						patterner:[0,10]
                    },
            confirm_password:
                    {
                        minlength: 8,
                        required: true,
                        equalTo: '#password_emp',
						patterner:[0,10]
                    },
            email_emp:
                    {
                        required: true,
                        email: true,
						patterner:[0,10]
                    },
            telefono_emp:
                    {
                        required: true,
                        minlength: 8,
						patterner:[0,10]
                    },
            url_emp:
                    {
                        required: true,
                        minlength: 12,
						patterner:[0,10]
                    },
            textarea:
                    {
                        required: true,
                        minlength: 25,
						patterner:[0,10]
                    },
            actividad_empresa:
                    {
                        required: true,
						patterner:[0,10]

                    }
        }
    });

}); // end document.ready