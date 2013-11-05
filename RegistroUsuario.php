<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Registro de Usuario </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <link rel="stylesheet" href="assets/css/bootstrap.css">
         <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/jqueryUI.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>   
        <script src="assets/js/modernizr2.6.2.js"></script>
        <script src="assets/js/holder.js"></script>
        <script src="assets/js/validarRegUsuario.js"></script>
        
        <script>
                  // fallback para el datepicker con jquery
            Modernizr.load({
                test: Modernizr.inputtypes.date,
                nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
                complete: function() {
                    $('input[type=date]').datepicker({
                        dateFormat: 'yy-mm-dd'
                    });
                }

            });
        </script>

        <style>
            .container
            {
                margin-top: 1%;
                max-width: 1034px;
            }
            .panel panel-primary
            {
                margin-top: 1%;
                display: center;
                max-width: 1034px;
            }
            h2
            {
                text-align: center;
            }

        </style>
 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- NAVBAR
================================================== -->

        <div id="header" class="navbar navbar-inverse navbar-static-top"></div>

        <div id="error"></div>
        <!-- // Script para cargar recursos html con jQuery en una pagina -->
        <script>$(document).ready(function() {
                $("#header").load("layout/header.html", function(status, xhr) {
                    if (status == "error")
                    {
                        var msg = "Lo lamentamos, ha habido un errror cargando el Menu: ";
                        $("#error").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            });</script> 

        <div id="contenedor" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Registro para Usuarios</div>
                <div class="panel-body">
                    
                    <form action="#" id="registroUsuario" method="POST" class="form-horizontal" >
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-3 control-label">Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" name="nombre" class="form-control" placeholder="Escriba un nombre"  required pattern=.{4,25} >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Apellido" class="col-lg-3 control-label">Apellido</label>
                            <div class="col-lg-4">
                                <input type="text" name="apellido" class="form-control" placeholder="Escriba un apellido"  required pattern=.{4,25}>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-lg-4">
                                <input type="date"  name="fecha_nac" min="1960-01-01" max="1996-01-01" class="form-control"  required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Direccion" class="col-lg-3 control-label">Direccion</label>
                            <div class="col-lg-4">
                                <input type="text" name="direccion" placeholder="Escriba su Direccion" class="form-control"  required pattern=".{25,250}">
                            </div>
                        </div>                      


                        <div class="form-group">
                            <label for="Telefono_Contacto" class="col-lg-3 control-label"> Telefono de Contacto </label>
                            <div class="col-lg-4">
                                <input type="tel" name="telefono_contacto" class="form-control" required pattern=".{7,15}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Email" class="col-lg-3 control-label">Correo</label>
                            <div class="col-lg-4">
                                <input type="email" name="email" class="form-control" placeholder="Escriba un correo aqui"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password" class="form-control" placeholder="Escriba una contrasenia"  required pattern=.{8,25}>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Confirmar Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password" class="form-control" placeholder="Confirmar Password"  required pattern=.{8,25}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="genero" class="col-lg-3 control-label">Sexo</label>
                            <div class="col-lg-4">
                                <select name="sexolst" class="form-control" required>
                                    <option value="">Seleccione una opcion: </option> 
                                    <option value="M">Masculino</option>    
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <center><button type="submit" class="btn btn-primary btn-lg">Enviar</button></center>
                        <br>
                    </form>
                </div>       
            </div>
        </div>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
