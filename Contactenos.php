<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Contactenos </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>    
        <script src="assets/js/modernizr2.6.2.js"></script>   
        <script>
            $(document).ready(function() {
                $('.datepicker').datepicker();
            });
        </script>   

        <script>
            function numeros(e) {
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " 0123456789";
                especiales = [8, 37, 39, 46];

                tecla_especial = false
                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial)
                    return false;
            }
        </script>


    </head>
    <body>

        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>

        <div id="contenedor" class="container">
            <?php
            if (isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias

                $email_to = "monteshernandez6@hotmail.com";
                $email_subject = "Contacto desde el sitio web";


// Aquí se deberían validar los datos ingresados por el usuario
                if (!isset($_POST['nombre']) ||
                        !isset($_POST['telefono']) ||
                        !isset($_POST['email']) ||
                        !isset($_POST['mensaje'])) {

                    echo "<div class='alert alert-danger'>Algo salio mal al enviar el mensaje, por favor intenta de nuevo!";
                    echo " <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> </div>";

                    die();
                }


                $email_message = "Detalles del formulario de contacto:\n\n";
                $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
                $email_message .= "Telefono: " . $_POST['telefono'] . "\n";
                $email_message .= "E-mail: " . $_POST['email'] . "\n";
                $email_message .= "fecha: " . $_POST['fecha'] . "\n";
                $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
                $email_from = $_POST['email'];

// Ahora se envía el e-mail usando la función mail() de PHP
                $headers = 'From: <' . $email_from . '>' . "\r\n" .
                        'Reply-To: <' . $email_from . '>' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n";
                'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                'X-Mailer: PHP/' . phpversion();

                @mail($email_to, $email_subject, $email_message, $headers);

                echo "<div class='alert alert-success alert-dismissable'>El mensaje se envio correctamente!";
                echo " <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> </div>";
            }
            ?>

            <div class="panel panel-primary">
                <div class="panel-heading">Contactenos</div>
                <div class="panel-body">
                    <form action="#" id="registroUsuario" method="POST" class="form-horizontal" >
                        <div class="form-group">


                            <div class="form-group">
                                <label for="Nombre" class="col-lg-3 control-label">Nombre</label>
                                <div class="col-lg-4">
                                    <input type="text" name="nombre" class="form-control" placeholder="Escriba un nombre"  required pattern=.{4,25} >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Telefono_Contacto" class="col-lg-3 control-label"> Telefono de Contacto </label>
                                <div class="col-lg-4">
                                    <input type="tel" name="telefono" class="form-control" onkeypress="return numeros(event)"  required pattern=".{8,11}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Email" class="col-lg-3 control-label">Correo</label>
                                <div class="col-lg-4">
                                    <input type="email" name="email" class="form-control" placeholder="Escriba un correo aqui"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motivo" class="col-lg-3 control-label" >Motivo</label>
                                <div class="col-lg-4">
                                    <select name="motivo" class="form-control" required="">
                                        <option value="">Seleccione</option>
                                        <option value="Dudas en general">Dudas en general</option>
                                        <option value="Problemas con el sistema">Problemas con el sistema</option>
                                        <option value="Recomendaciones">Recomendaciones</option>
                                        <option value="Informacion de registro">Informacion de registro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motivo" class="col-lg-3 control-label" >Fecha</label>
                                <div class="col-lg-3">
                                    <input type="text" name="fecha" class="form-control datepicker" placeholder="Introduzca una fecha" onkeypress="return numeros(event)">
                                </div>
                            </div>
                            <div class="form-group">    
                                <label for="Mensaje"  class="col-lg-3 control-label">Mensaje</label>
                                <div class="col-lg-6">
                                    <textarea name="mensaje" class="form-control col-lg-6" rows="10" > </textarea>

                                </div>
                            </div>
                            <center><button type="submit" name="enviar" class="btn btn-primary btn-lg">Enviar</button></center>

                        </div>
                    </form>
                </div>       
            </div>
        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
