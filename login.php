<?php
include_once "clases/db_connect.php";
if (isset($_POST['action'])) {
    $usuario_em = $_POST['email_em'];
    $pass_em = $_POST['password_em'];
    session_start();
    if (isset($usuario_em) && !empty($pass_em)) {
        $query = mysql_query("SELECT cod_em, activa_em, nombre_em FROM empresa WHERE email_em='$usuario_em' AND password_em='$pass_em' LIMIT 1");
        while ($row = mysql_fetch_array($query)) {
            $cod_em = $row{'cod_em'};
            $permiso_em = $row{'activa_em'};
            $nombre = $row{'nombre_em'};
            $_SESSION['cod_empresa'] = $cod_em;
            $_SESSION['permiso'] = $permiso_em;
            $_SESSION['empresa'] = $nombre;
            echo $nombre;
            echo $permiso_em;
            header("Location: Empleador.php"); /* Si el usuario existe, direccionar a la pagina princial( catalogo) */
        }
    } else {
        echo "<p class='error'>Por favor introduzca un usuario y contrasenia correctos<p>";
    }
}
?>

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
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <form id="frm-login" action="" method="POST" class="form-horizontal" autocomplete="off">

                        <fieldset>
                            <div class="form-group">

                                <legend><center><h3>Login Empresa</h3></center></legend>
                                <br>
                                <div class="form-group">
                                    <label  class="col-lg-3 control-label" for="email">Correo</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email_em" class="form-control"  placeholder="Escriba un correo" required>

                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label  class="col-lg-3 control-label" for="passwordm">Password</label>
                                    <div class="col-lg-8">
                                        <input type="password" name="password_em" class="form-control" autocomplete="off" placeholder="Escriba una contrasenia" pattern=".{8,25}">

                                    </div>
                                </div>

                                <p class="text-center text-primary"><a href="">¿Has olvidado tu contraseña?</a></p>

                                <br>
                                <center>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> Recordarme
                                    </label>


                                    <input type='submit' name='action' value="Entrar" class="btn btn-success">
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
