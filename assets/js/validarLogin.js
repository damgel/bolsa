$(document).ready(function() {
 
// codigo personalizado para mis validaciones
    $('#frm-login').validate({
        rules: {
            email: 
            {
                required: true,
                email: true
            },
            passwordm:
                    {
                minlength: 8,
                required:true    
                    }
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element
            .text('OK!').addClass('valid')
            .closest('.form-group').removeClass('error').addClass('success');
        }
    });

}); // end document.ready