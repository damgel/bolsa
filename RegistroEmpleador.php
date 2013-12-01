<?php
include_once 'clases/db_connect.php';
if (isset($_POST['submitted'])) {
    /* ------------------------------------BEGIN FILE UPLOADER-------------------------------------------- */
    $output_dir = "assets/images/empresa/";
    $name_ok;
    if (isset($_FILES["myfile"])) {
        //Filter the file types , if you want.
        if ($_FILES["myfile"]["error"] > 0) {
            echo "<p class='error'>Por favor seleccione una imagen</p><br>";
        } else {
            //move the uploaded file to uploads folder;
            $id_unico = uniqid();
            move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $id_unico . $_FILES["myfile"]["name"]);
            $name_ok = $output_dir . $id_unico . $_FILES["myfile"]["name"];
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "INSERT INTO `empresa` ( `imagen_em` ,  `nombre_em` ,  `usuario_em` ,  `password_em` ,  `email_em` ,  `telefono_em` ,  `url_em` ,  `descripcion_em` ,  `actividad_em` ,  `activa_em`  ) VALUES(  '$name_ok' ,  '{$_POST['nombre_em']}' ,  '{$_POST['usuario_em']}' ,  '{$_POST['password_em']}' ,  '{$_POST['email_em']}' ,  '{$_POST['telefono_em']}' ,  '{$_POST['url_em']}' ,  '{$_POST['descripcion_em']}' ,  '{$_POST['actividad_em']}' ,  'N'  ) ";
            mysql_query($sql) or die(mysql_error());
            echo "Registro Agregado.<br />";
            echo "<a href='listarEmplesa.php'>Regresar</a>";
        }
    }
    /* ------------------------------------END FILE UPLOADER-------------------------------------------- */
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
    </head>
    <body>
        <div id="header" class="navbar navbar-inverse navbar-static-top">
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
                    <div class="alert alert-success">Usuario registrado correctamente!</div>
                    <form action="" id="registroEmpleador" method='POST' enctype="multipart/form-data" class="form-horizontal">
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
                                        <input type="text" name="nombre_em" class="form-control" placeholder="Nombre" required>
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
                                        <input type="password" id="password_em" name="password_em" class="form-control" autocomplete="off" placeholder="Contraseña" required>
                                    </div>  
                                </div>

                                <div class="form-group">
                                    <label for="ConfirmContrasenia"class="col-lg-4 control-label">Confirme contraseña</label>
                                    <div class="col-lg-4">
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirme su contraseña" required>
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
                                        <input type="tel" name="telefono_em" class="form-control" required pattern=".{7,8}" onkeypress="return isNumberKey(this)">
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
