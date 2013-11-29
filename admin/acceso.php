<?php
if ($_POST['action'] === 'Entrar') {
    $usuario_em = $_POST['email_em'];
    $pass_em = $_POST['password_em'];

    if (isset($email_em) && !empty($password_em)) {
        include "clases/db_connect.php";
        $result = mysql_query("SELECT cod_em, activa_em, nombre_em FROM empresa 
                    where email_em='$usuario_em' and password_em='$pass_em'");
        while ($row = mysql_fetch_array($result)) {
            $cod_em = $row{'cod_em'};
            $nombre = $row{'nombre_em'};
            $permiso_em = $row{'activa_em'};
            session_start();
//            if ($permiso_em === "S") {
            header("Location: http://localhost:8000/Empleador.php"); /* Redirect browser */
//            } else {
//                echo '<p class="loginError">La empresa aun no esta aprovada por el momento!.</p>';
//            }
        }
    } else {
        echo "Por favor introduzca un usuario y contrasenia correctos";
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
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../validacionStyle.css">

        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/validarLogin.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <style>


            h2
            {
                text-align: center;
            }

            #registrarse-container
            {
                float:left;       /*tambien puede poner float:right, para que se alineé a la derecha */
                padding:10px;
                width:400px;
            }

            #acceso-panel
            {
                margin: auto;
                margin-top: 25px;
                width: 60%;
            }
        </style>

    </head>
    <body>
        <div id="header" class="navbar navbar-inverse navbar-static-top">
            <?php include_once 'menu-admin.php'; ?>
        </div>

        <div id="acceso-panel" class="panel panel-primary">
            <div class="panel-heading">Login Administrativo</div>
            <div class="panel-body">

                <form id="frm-login" action="" method="POST" class="form-horizontal" autocomplete="off">

                    <fieldset>
                        <div class="form-group">

                            <legend><center><h3>Login Administrativo</h3></center></legend>

                            <div class="form-group">
                                <label  class="col-lg-3 control-label" for="email">Correo</label>
                                <div class="col-lg-8">
                                    <input type="email" name="email_em" class="form-control"  placeholder="Escriba un correo" required>

                                </div>
                            </div>  

                            <div class="form-group">
                                <label  class="col-lg-3 control-label" for="passwordm">Password</label>
                                <div class="col-lg-8">
                                    <input type="password" name="password_em" class="form-control"  placeholder="Escriba una contrasenia" pattern=".{8,25}">

                                </div>
                            </div>
                            <center>
                                <input type='submit' name='action' value="Entrar" class="btn btn-success btn-large">
                            </center>
                            <br>

                        </div> 
                    </fieldset>

                </form>



            </div>       
        </div>




    </body>
</html>
