<?php
include_once 'clases/db_connect.php';
if (isset($_POST['submitted'])) {
    /* ------------------------------------BEGIN FILE UPLOADER-------------------------------------------- */
    $output_dir = "assets/images/empresa/";
    $name_ok;
    if (isset($_FILES["myfile"])) {
        //Filter the file types , if you want.
        if ($_FILES["myfile"]["error"] > 0) {
            echo "<div class='alert alert-danger'>Por favor seleccione una imagen</div><br>";
        } else {
            //move the uploaded file to uploads folder;
            $id_unico = uniqid();
            move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $id_unico . $_FILES["myfile"]["name"]);
            $name_ok = $output_dir . $id_unico . $_FILES["myfile"]["name"];
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "INSERT INTO `empresa` ( `imagen_em` ,  `nombre_em` ,  `usuario_em` ,  `password_em` ,  `email_em` ,  `telefono_em` ,  `url_em` ,  `descripcion_em` ,  `actividad_em` ,  `activa_em` ,  `departamento_em`   ) VALUES(  '$name_ok' ,  '{$_POST['nombre_em']}' ,  '{$_POST['usuario_em']}' ,  '{$_POST['password_em']}' ,  '{$_POST['email_em']}' ,  '{$_POST['telefono_em']}' ,  '{$_POST['url_em']}' ,  '{$_POST['descripcion_em']}' ,  '{$_POST['actividad_em']}' ,  'N','{$_POST['departamento_em']}'  ) ";
            mysql_query($sql) or die(mysql_error());
            echo "<div class='alert alert-success'>Empresa registrada exitosamente!</div>";
        }
    }
    /* ------------------------------------END FILE UPLOADER-------------------------------------------- */
}
?>

<?php
if (isset($_POST['submitted'])) {
    if (!isset($_POST['nombre_em']) ||
            !isset($_POST['telefono_em']) ||
            !isset($_POST['email_em'])) {
        echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
        echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
        die();
    }

// Recibiendo los datos pasados por la pagina "RegistroEmpleador.php" 


    $recibenombre = $_POST["nombre_em"];

    $tel = $_POST['telefono_em'];

    $recibemail = $_POST["email_em"];


// Definiendo las cabeceras del e-mail 

    $headers = "Content-type:text/html; charset=iso-8859-1";

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


    $para = "deakill@hotmail.com";

    $email_subject = "Nueva empresa se ha registrado";

// Definiendo el aspecto del mensaje 




    $mensaje = "<h3>Mensaje de la Bolsa de Trabajo</h3> ";


    $mensaje .= "Nombre: " . $recibenombre;

    $mensaje .= "<br>";

    $mensaje .="Telefono: " . $tel;

    $mensaje .= "<br>";

    $mensaje .="E-mail: " . $recibemail;





// Enviando el mensaje para el Administrador

    $envia = mail($para, $email_subject, $mensaje, $headers);

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 


    $mensaje2 = "<p style='font-size:14xp' > Empresa <strong>" . $recibenombre . "</strong>. Agradecemos su visita y su interes por participar en la bolsa de trabajo de la Universidad Francisco Gavidia . Antes de 48 horas usted recibira un e-mail o llamada telefonica con la respuesta a su solicitud de registro.</p>";

    $mensaje2 .= "<p  style='font-size:14xp' >Observacion - No es necesario responder este mensaje.</p>";

    $envia = mail($recibemail, "Su mensaje fue recibido!", $mensaje2, $headers);

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto. 

    echo "<meta http-equiv='refresh' content='5;URL=login.php'>";
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
        <title>Registro Empleador</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>    
        <script src="assets/js/modernizr2.6.2.js"></script>    
        <script src="assets/js/validarRegEmpleador.js"></script>
        <script src="assets/js/onlyNumbers.js"></script>
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

        <div id="contenedor" class="container" >
            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Registro para Empresas</div>
                <div class="panel-body">
                    <style>
                        img
                        {

                            display: inline-block;
                            height: 100px;
                            width: 100px;
                        }
                        .sub-contenedor
                        {
                            margin-left: 50px;
                            position: relative;
                            border:solid 1px black;
                            display: block;
                            float:left;
                            box-shadow: 0px 2px 2px 2px #777;
                        }
                        .sub-contenedor2
                        {
                            width: 90%;
                            padding: 60px;
                        }
                        fieldset
                        {
                            border: solid 1px #05a8ff;
                        }
                    </style>


                    <form action="" id="registroEmpleador" method='POST' enctype="multipart/form-data" class="form-horizontal" onsumbit="return myFunction()">
                        <fieldset>
                            <div class="sub-contenedor">
                                <img src="assets/img/default-user.png" alt="Imagen de la compania">
                            </div>
                            <div class="sub-contenedor2">
                                <div class="form-group">
                                    <label for="Imagen" class="col-lg-2 control-label">Imagen</label>
                                    <div class="col-lg-4">
                                        <input type="file" name="myfile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nombre" class="col-lg-4 control-label">Nombre de la Empresa</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nombre_em" class="form-control" placeholder="Nombre" required pattern=".{6,20}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Nombre" class="col-lg-4 control-label">Usuario</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="usuario_em" class="form-control" placeholder="Usuario" required required pattern=".{6,20}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Contrasenia" class="col-lg-4 control-label">Contraseña</label>
                                    <div class="col-lg-4">
                                        <input id="pw1" type="password"  name="password_em" class="form-control" autocomplete="off" placeholder="Contraseña" required pattern=".{8,25}">
                                    </div>  
                                </div>    

                                <div class="form-group">
                                    <label for="correo" class="col-lg-4 control-label">Correo</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email_em" placeholder="ejemplo@dominio.com" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="telefono" class="col-lg-4 control-label">Telefono</label>
                                    <div class="col-lg-4">
                                        <input type="tel" name="telefono_em" class="form-control" required pattern=".{8,11}" onkeypress="return numeros(event)">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="paginaWeb" class="col-lg-4 control-label">Página Web</label>
                                    <div class="col-sm-6">
                                        <input type="url" name="url_em" placeholder="url" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <label for="descripcionEmpresa" class="col-lg-4 control-label">Descripción de la Empresa</label>
                                    <div class="col-sm-8">
                                        <Textarea name="descripcion_em" class="form-control col-lg-6" rows="2" placeholder="Descripcion de su empresa"> </textarea>

                                </div>
                                     
                             </div>   
                                <div class="form-group">
                                            <label for="departamento" class="col-lg-3 control-label">departamento</label>
                                            <div class="col-lg-4">
                                                <select name="departamento_em" class="form-control valid" required="">
                                                    <option value="">- Seleccione -</option>
                                                    <option value="San Salvador">San Salvador</option>
                                                    <option value="La Paz">La Paz</option>
                                                    <option value="San Miguel">San Miguel</option>
                                                    <option value="La union">La Union</option>
                                                    <option value="La Libertad">La Libertad</option>
                                                    <option value="Santa Ana">Santa Ana</option>
                                                    <option value="Sonsonate">Sonsonate</option>
                                                    <option value="Ahuachapan">Ahuachapan</option>
                                                    <option value="San Vicente">San Vicente</option>
                                                    <option value="Chalatenango">Chalatenango</option>
                                                    <option value="Cabanias">Cabañas</option>
                                                    <option value="Cuscatlan">Cuscatlan</option>
                                                    <option value="Usulutan">Usulutan</option>
                                                    <option value="Morazan">Morazan</option>

                                                </select>
                                            </div>
                                        </div>
                       
                        <div class="form-group">
                    <label for="actividadEmpresa"class="col-lg-4 control-label">Actividad Empresa</label>
                    <div class="col-lg-4">
                            <select name="actividad_em" class="form-control" required>
                                <option value="">Seleccione una actividad:</option>
                                <option value="internet">Internet</option>
                                <option>Aeronaves</option> 
                                <option>Agencia de reclutamiento</option>
                                <option>Agrícola | Ganadera</option>
                                <option>Agroindustria</option>
                                <option>Arquitectura | Diseño | Decoración</option>
                                <option>Automotriz</option>
                                <option>Bancos | Financieras</option>
                                <option>Bienes Raíces</option>
                                <option>Bufete de Abogados</option>
                                <option>Call Center</option>
                                <option>Carpíntería|Muebles</option>
                                <option>Científica</option>
                                <option>Combustible |(Gas | Petroleo)</option>
                                <option>Comercial</option>
                                <option>Comercio Mayorista</option>
                                <option>Comercio Minorista</option>
                                <option>Confecciones</option>
                                <option>Construcción</option>
                                <option>Consultoría | Asesoría</option>
                                <option>Bebidas | Alimentos</option>
                                <option>Defensa</option>
                                <option>Educación | Capacitación</option>
                                <option>Electricidad (Distribución | Generación)</option>
                                <option>Entretenimiento</option>
                                <option>Estudios Jurídicos</option>
                                <option>Exportación | Importación</option>
                                <option>Farmaceutica</option>
                                <option>Forestal | Papel | Celulosa</option>
                                <option>Gobierno</option>
                                <option>Hotelería | Turismo | Restaurantes</option>
                                <option>Imprenta | Editoriales</option>
                                <option>Industrial</option>
                                <option>Ingeniería</option>
                                <option>Inmobiliaria | Propiedades</option>
                                
                                <option>Inversiones</option>
                                <option>Logística | Distribución</option>
                                <option>Manufacturas varias</option> 
                                <option>Maquila</option>
                                <option>Materiales de consrucción</option>
                                <option>Medicina | Salud</option>
                                <option>Medios de Comunicación</option>
                                <option>Metalmecánica; Minería</option>
                                <option>Naviera</option>
                                <option>Operaciones Portuarias</option>
                                <option>Organizaciones sin Fines de Lucro</option>
                                <option>Pesquera</option>
                                <option>Publicidad | Marketing</option>
                                <option>Química</option>
                                <option>Seguros | Previsión; Servicios</option>
                                <option>Servicios Financieros varios</option>
                                <option>Tecnologías de Información</option>
                                <option>Telecomunicaciones</option>
                                <option>Textil | Maquila</option>
                                <option>Transporte</option>
                                <option>Otros</option>
                            </select>
                    </div>
                        </div>
                    </div>
                        <div class="btns-accion">
                            <style>
                                    .btns-accion
                                    {
                                        border: solid 1px #05a8ff;
                                        display: block;
                                        padding:10px;
                                        background: transparent;
                                        text-align: center;
                                    }
                            </style>
                        <input type='submit' class="btn btn-primary btn-lg" value='Guardar' /><input type='hidden' value='1' name='submitted' />
                        <br>
                        </div>
                        </fieldset>
            </form>
            
                        </div>
                 </div>
            </div>

    </body>
</html>
