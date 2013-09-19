$(document).ready(function() {

// codigo personalizado para mis validaciones
    $('#registroEmpleador').validate({
        rules: {
            nombre_emp:
                    {
                        required: true,
                        minlength: 12
                    },
            password_emp:
                    {
                        minlength: 8,
                        required: true
                    },
            confirm_password:
                    {
                        minlength: 8,
                        required: true,
                        equalTo: '#password_emp'
                    },
            email_emp:
                    {
                        required: true,
                        email: true
                    },
            telefono_emp:
                    {
                        required: true,
                        minlength: 8
                    },
            url_emp:
                    {
                        required: true,
                        minlength: 12
                    },
            textarea:
                    {
                        required: true,
                        minlength: 25
                    },
            actividad_empresa:
                    {
                        required: true

                    }
        },
        highlight: function(element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid')
                    .closest('.control-group').removeClass('error').addClass('success');
        }
    });

}); // end document.ready