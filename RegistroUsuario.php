<?php
include_once 'clases/db_connect.php';
if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $encryp_password = sha1($_POST['password']);
    $sql = "INSERT INTO `usuario` ( `nombre_u` ,  `apellido_u` ,  `fecha_nac_u` ,  `direccion_u` ,  `telefono_u` ,  `carnet` ,  `email_u` ,  `password_u` ,  `sexo_u`, `fecha_registro`) VALUES(  '{$_POST['nombre_u']}' ,  '{$_POST['apellido_u']}' ,  '{$_POST['fecha_nac_u']}' ,  '{$_POST['direccion_u']}' ,  '{$_POST['telefono_u']}' ,  '{$_POST['carnet']}' ,  '{$_POST['email_u']}' ,  '$encryp_password' ,  '{$_POST['sexo_u']}', now() ) ";
    mysql_query($sql) or die(mysql_error());
    echo "regitro guardado <br />";
}
?>

<?php  

if (isset($_POST['submitted'])) {


                if (!isset($_POST['nombre_u']) ||
                        !isset($_POST['telefono_u']) ||
                        !isset($_POST['email_u'])) {

                    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
                    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
                    die();
                }

// Recibiendo los datos pasados por la pagina "contactenos.php" 


$recibenombre =$_POST["nombre_u"]; 

$tel = $_POST['telefono_u'];
 
$recibemail = $_POST["email_u"]; 


// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "monteshernandez6@hotmail.com"; 

$email_subject = "Nueva empresa se ha registrado";

// Definiendo el aspecto del mensaje 




$mensaje   = "<h3>Mensaje de la Bolsa de Trabajo</h3> "; 


$mensaje  .= "Nombre: ". $recibenombre;

$mensaje  .= "<br>"; 

$mensaje  .="Telefono: " .$tel;

$mensaje  .= "<br>"; 

$mensaje  .="E-mail: " .$recibemail ;





// Enviando el mensaje para el Administrador

$envia =  mail($para,$email_subject,$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje2  = "<p style='font-size:14xp' ><strong>" . $recibenombre . "</strong>. Agradecemos su visita y su interes por participar en la bolsa de trabajo de la Universidad Francisco Gavidia . Antes de 48 horas usted recibira un e-mail con la respuesta a su duda o pedido..</p>"; 

$mensaje2 .= "<p  style='font-size:14xp' >Observacion - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Su mensaje fue recibido!",$mensaje2,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto. 

echo "Mensaje recibido con exito!"; 

echo "<meta http-equiv='refresh' content='2;URL=Contactenos.php'>"; 
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
        
        
        <script>
function myFunction() {
    var pw1 = document.getElementById("pw1").value;
    var pw2 = document.getElementById("pw2").value;
    var ok = true;
    if (pw1 != pw2) {
        //alert("Passwords Do not match");
        document.getElementById("pw1").style.borderColor = "#E34234";
        document.getElementById("pw2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
       
}

    </script>
    </head>
    <body>

        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>

        <div id="contenedor" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Registro para Usuarios</div>
                <div class="panel-body">

                    <form action="#" id="registroUsuario" method="POST" class="form-horizontal" onsumbit="return myFunction()">
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
                            <label for="Fecha_Nacimiento" class="col-lg-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-lg-4">
                                <input type="date"  name="fecha_nac_u" min="1963-01-01" max="1996-01-01" class="form-control"  required>
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
                                <input type="tel" name="telefono_u" class="form-control" required pattern=".{7,11}" onkeypress="return numeros(event)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Numero_carnet" class="col-lg-3 control-label">Numero de Carnet </label>
                            <div class="col-lg-4">
                                <input type="text"  name="carnet" class="form-control"  required pattern=".{8,9}">
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
                                <input id="pw1" type="password" name="password_u"  class="form-control" placeholder="Escriba una contrasenia"  required pattern=.{8,25}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-3 control-label">Confirmar Password</label>
                            <div class="col-lg-4">
                                <input id="pw2" type="password" name="password2" class="form-control"  placeholder="Confirmar Password"  required pattern=.{8,25}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="genero" class="col-lg-3 control-label">Genero</label>
                            <div class="col-lg-4">
                                <select name="sexo_u" class="form-control" required>
                                    <option value="">Seleccione una opcion: </option> 
                                    <option value="Masculino">Masculino</option>    
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <center><div><input type='submit' class="btn btn-primary btn-lg" value='Registrar' /><input type='hidden' value='1' name='submitted' /></div></center>

                        <br>
                    </form>
                </div>       
            </div>
        </div>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
