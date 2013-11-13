<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es-ES" class="no-js"> 
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="validacionStyle.css">
        
          <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>   
        <script src="assets/js/validarLogin.js"></script>   
        <script src="assets/js/modernizr2.6.2.js"></script>
        
        
        
        <style>
            .container
            {
                margin-top: 1%;

            }
            .panel panel-primary
            {
             
                display: center;

            }
            h2
            {
                text-align: center;
            }
            #frm-login
            {
                float:left;    /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:500px;
                margin:40px; 

            }
            #registrarse-container
            {
                float:left;       /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:400px;
                margin:40px;
         

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

            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                       
                            <form id="frm-login" action="#" method="POST" class="form-horizontal">

                                <fieldset>
                                    <div class="form-group">

                                        <legend><center><h3>Login</h3></center></legend>
                                        <br>
                                        <div class="form-group">
                                            <label  class="col-lg-3 control-label" for="email">Correo</label>
                                            <div class="col-lg-8">
                                                <input type="email" name="email" class="form-control"  placeholder="Escriba un correo" required>

                                            </div>
                                        </div>  

                                        <div class="form-group">
                                            <label  class="col-lg-3 control-label" for="passwordm">Password</label>
                                            <div class="col-lg-8">
                                                <input type="password" name="passwordm" class="form-control"  placeholder="Escriba una contrasenia" required  pattern=".{8,25}">

                                            </div>
                                        </div>
                                        
                                    <p class="text-center text-primary"><a href="">¿Has olvidado tu contraseña?</a></p>
                                        
                                        <br>
                                        <center>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"> Recordarme
                                            </label>
                                            <button type="submit" class="btn btn-success">Ingresar</button>   
                                        </center>
                                        <br>
                                        <br>
                                        <br>


                                    </div> 
                                </fieldset>

                            </form>
                
                        <div id="registrarse-container">
                            <h3><p class="text-center">¿Ya estas registrado?</p></h3>
                            <hr>
                            <h4><p class="text-center">Registrarse como Empleado</p></h4>
                            
                            <p class="text-center">
                                <a href="RegistroUsuario.php">
                                    <button type="submit" class="btn btn-primary">Registrarse</button> 
                                </a>
                            </p>
                            <br>
                            <h4><p class="text-center">Registrate como Empleador</p></h4>
                            
                            <p class="text-center">
                                <a href="RegistroEmpleador.php">
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </a>
                            </p>
                        </div>

                    </div>       
                </div>
            </div>



    </body>
</html>
