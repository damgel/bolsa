<?php 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value);
} 
$sql = "INSERT INTO `usuario` ( `nombre_u` ,  `apellido_u` ,  `fecha_nac_u` ,  `direccion_u` ,  `telefono_u` ,  `email_u` ,  `password_u` ,  `sexo_u`  ) VALUES(  '{$_POST['nombre_u']}' ,  '{$_POST['apellido_u']}' ,  '{$_POST['fecha_nac_u']}' ,  '{$_POST['direccion_u']}' ,  '{$_POST['telefono_u']}' ,  '{$_POST['email_u']}' ,  '{$_POST['password_u']}' ,  '{$_POST['sexo_u']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>





<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Perfil de Usuario </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
            function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>    
    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>

        <div id="contenedor" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Perfil Usuario</div>
                <div class="panel-body">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="Nombre" class="col-lg-3 control-label">Nombre</label>
                            <div class="col-lg-4">
                                <input type="text" name="nombre_u" class="form-control" placeholder="Escriba un nombre"  required pattern=.{4,25} >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Apellido" class="col-lg-3 control-label">Apellido</label>
                            <div class="col-lg-4">
                                <input type="text" name="apellido_u" class="form-control" placeholder="Escriba un apellido"  required pattern=.{4,25}>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="motivo" class="col-lg-3 control-label" >Fecha Nacimiento</label>
                            <div class="col-lg-3">
                                <input type="text" name="fecha_nac_u" class="form-control datepicker" placeholder="Introduzca una fecha" required onkeypress="return isNumberKey(this)">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Direccion" class="col-lg-3 control-label">Direccion</label>
                            <div class="col-lg-4">
                                <input type="text" name="direccion_u" placeholder="Escriba su Direccion" class="form-control"  required pattern=".{25,250}">
                            </div>
                        </div>                      


                        <div class="form-group">
                            <label for="Telefono_Contacto" class="col-lg-3 control-label"> Telefono de Contacto </label>
                            <div class="col-lg-4">
                                <input type="tel" name="telefono_contacto_u" class="form-control" required pattern=".{7,15}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Email" class="col-lg-3 control-label">Correo</label>
                            <div class="col-lg-4">
                                <input type="email" name="email_u" class="form-control" placeholder="Escriba un correo aqui"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password_u" class="form-control" placeholder="Escriba una contrasenia"  required pattern=.{8,25}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Confirmar Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password2" class="form-control" placeholder="Confirmar Password"  required pattern=.{8,25}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sexo" class="col-lg-3 control-label">Genero</label>
                            <div class="col-lg-4">
                                <select name="sexo_u" class="form-control" required>
                                    <option value="">Seleccione una opcion: </option> 
                                    <option value="M">Masculino</option>    
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Subir curriculum </label>
                            <div class="col-lg-3">
                                <input type="file" id="exampleInputFile" name="subir">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-primary btn-lg">Enviar</button></center>


                    </form>
                </div>       
            </div>
        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
