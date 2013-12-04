<?php
include_once 'clases/db_connect.php';
if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $sql = "INSERT INTO `ofertas` ( `cod_oferta` ,  `cod_em` ,  `titulo_of` ,  `descripcion_of` ,  `area_of` ,  `cargo_of` ,  `vacantes_of` ,  `contratacion_of` ,  `anoexp_ofetas` ,  `edad` ,  `genero_of` ,  `vehiculo_ofetas` ,  `salariomax_of` ,  `salariomin_of` ,  `departamento_of` ,  `experiencia` ,  `tituloen_of` ,  `nivel_of` ,  `disponible_of` ,  `aprovacion_of`  ) VALUES(  '{$_POST['cod_oferta']}' ,  '{$_POST['cod_em']}' ,  '{$_POST['titulo_of']}' ,  '{$_POST['descripcion_of']}' ,  '{$_POST['area_of']}' ,  '{$_POST['cargo_of']}' ,  '{$_POST['vacantes_of']}' ,  '{$_POST['contratacion_of']}' ,  '{$_POST['anoexp_ofetas']}' ,  '{$_POST['edad']}' ,  '{$_POST['genero_of']}' ,  '{$_POST['vehiculo_ofetas']}' ,  '{$_POST['salariomax_of']}' ,  '{$_POST['salariomin_of']}' ,  '{$_POST['departamento_of']}' ,  '{$_POST['experiencia']}' ,  '{$_POST['tituloen_of']}' ,  '{$_POST['nivel_of']}' ,  '{$_POST['disponible_of']}' ,  '{$_POST['aprovacion_of']}'  ) ";
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
        <title>Empleador</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/jqueryUI.css">
        <link rel="stylesheet" href="../validacionStyle.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <script src="../assets/js/holder.js"></script>
        <script src="../assets/js/validarRegEmpleador.js"></script>

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
                max-width: 90%;
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
            #publicarOferta
            {
                text-align: right;

            }
            .lista-enlaces
            {


                margin-top: 30px;
                margin-bottom: 30px;
                text-shadow: 0 1px 0 #fff;
                background-color: #f7f5fa;
                border:solid 1px #eee;

            }
            .lista-enlaces ul
            {
                margin:0px;
                padding-left: 0px;
                display: block;
                list-style: none;
            }
            .lista-enlaces a
            {

                font-size: 18px;
                display:block;
                padding: 10px;
            }
            .lista-enlaces a:hover
            {
                text-decoration: none;
                background-color: #eee;
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
    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header-empleador.php'; ?>
        </div>

        <div id="contenedor" class="container">

            <div class="row">

                <div class="col-md-2">
                    <div class="lista-enlaces">
                        <ul id="myTab">
                            <li class="active"><a href="#Perfil">Perfil</a></li>
                            <li class=""><a href="#Ofertas">Publicar Ofertas</a></li>
                            <li class=""><a href="#Aplicacion">Ver Aplicaciones</a></li>
                            <li class=""><a href="#Quitar">Quitar Ofertas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">

                    <?php
                    /// CODIGO QUE EN TIEMPO REAL, CUANDO SE ACTUALIZA LA PAGINA VERIFICA SI LA EMPRESA ESTA ACTIVA O NO
                    include_once '../clases/db_connect.php';
                    $cod_em = $_SESSION['cod_empresa'];
                    $estado;
                    $getestado = mysql_query("SELECT activa_em FROM `empresa` where cod_em=$cod_em") or trigger_error(mysql_error());
                    while ($row = mysql_fetch_array($getestado)) {
                        $estado = $row['activa_em'];
                    }
                    if ($estado === "S") {
                        //echo $_SESSION['cod_empresa'] . "<br>";
                        echo "<div class='alert alert-success alert-dismissable'>TENES PERMISOS PARA CREAR OFERTAS";
                        echo " <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> </div>";
                    } elseif ($estado === "N") {
                        //echo $_SESSION['cod_empresa'] . "<br>";
                        echo "<div class='alert alert-danger'>NO TENES PERMISOS PARA CREAR OFERTAS";
                        echo " <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> </div>";
                    }
                    ?>

                    <div class="tab-content">
                        <div class="tab-pane active" id="Perfil">

                            <div class="panel panel-primary">
                                <div class="panel-heading">Perfil</div>
                                <div class="panel-body">

                                    <form action="#" id="perfilEmpleador" method="POST" class="form-horizontal">

                                        <div class="form-group">
                                            <label for="Nombre" class="col-lg-3 control-label">Nombre de la Empresa</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="nombre_perfilemp" class="form-control" placeholder="Escriba un nombre" required pattern=".{6,20}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Nombre" class="col-lg-3 control-label">Usuario</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="usuario_em" class="form-control" placeholder="Escriba un nombre de usuario" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Contrasenia" class="col-lg-3 control-label">Contraseña</label>
                                            <div class="col-lg-4">
                                                <input type="password" name="password_perfilemp" class="form-control" placeholder="Contraseña" autocomplete="off" required pattern=".{8,25}">
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label for="ConfirmContrasenia" class="col-lg-3 control-label">Confirme contraseña</label>
                                            <div class="col-lg-4">
                                                <input type="password" name="confirm_password_perfilemp" class="form-control" autocomplete="off" placeholder="Confirme su contraseña" required pattern=".{8,25}">
                                            </div>  
                                        </div>    


                                        <div class="form-group">
                                            <label for="correo" class="col-lg-3 control-label">Correo</label>
                                            <div class="col-lg-4">
                                                <input type="email" name="email_perfilemp" placeholder="Ejemplo: ejemplo@dominio.com" class="form-control"  id="focusedInput" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="telefono" class="col-lg-3 control-label">Telefono</label>
                                            <div class="col-lg-4">
                                                <input type="tel" name="telefono_perfilemp" placeholder="Escriba un numero de telefono" class="form-control" onkeypress="return numeros(event)"  required pattern=".{8,11}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="paginaWeb" class="col-lg-3 control-label">Pagina Web</label>
                                            <div class="col-lg-4">
                                                <input type="url" name="url_perfilemp" placeholder="www.ejemplo.com" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">    
                                            <label for="descripcionEmpresa" class="col-lg-3 control-label">Descripcion de la Empresa</label>
                                            <div class="col-lg-6">
                                                <textarea name="textarea" class="form-control col-lg-6" rows="2" > </textarea>

                                            </div>
                                        </div>         

                                        <div class="form-group">
                                            <label for="actividadEmpresa" class="col-lg-3 control-label">Actividad Empresa</label>
                                            <div class="col-lg-4">
                                                <select name="actividad_empresa" class="form-control" required="">
                                                    <option value="">Seleccione una actividad:</option>
                                                    <option>Aeronaves</option> 
                                                    <option>Agencia de reclutamiento</option>
                                                    <option>Agr�cola | Ganadera</option>
                                                    <option>Agroindustria</option>
                                                    <option>Arquitectura | Dise�o | Decoraci�n</option>
                                                    <option>Automotriz</option>
                                                    <option>Bancos | Financieras</option>
                                                    <option>Bienes Ra�ces</option>
                                                    <option>Bufete de Abogados</option>
                                                    <option>Call Center</option>
                                                    <option>Carp�nter�a|Muebles</option>
                                                    <option>Cient�fica</option>
                                                    <option>Combustible |(Gas | Petroleo)</option>
                                                    <option>Comercial</option>
                                                    <option>Comercio Mayorista</option>
                                                    <option>Comercio Minorista</option>
                                                    <option>Confecciones</option>
                                                    <option>Construcci�n</option>
                                                    <option>Consultor�a | Asesor�a</option>
                                                    <option>Bebidas | Alimentos</option>
                                                    <option>Defensa</option>
                                                    <option>Educaci�n | Capacitaci�n</option>
                                                    <option>Electricidad (Distribuci�n | Generaci�n)</option>
                                                    <option>Entretenimiento</option>
                                                    <option>Estudios Jur�dicos</option>
                                                    <option>Exportaci�n | Importaci�n</option>
                                                    <option>Farmaceutica</option>
                                                    <option>Forestal | Papel | Celulosa</option>
                                                    <option>Gobierno</option>
                                                    <option>Hoteler�a | Turismo | Restaurantes</option>
                                                    <option>Imprenta | Editoriales</option>
                                                    <option>Industrial</option>
                                                    <option>Ingenier�a</option>
                                                    <option>Inmobiliaria | Propiedades</option>
                                                    <option>Internet</option>
                                                    <option>Inversiones</option>
                                                    <option>Log�stica | Distribuci�n</option>
                                                    <option>Manufacturas varias</option> 
                                                    <option>Maquila</option>
                                                    <option>Materiales de consrucci�n</option>
                                                    <option>Medicina | Salud</option>
                                                    <option>Medios de Comunicaci�n</option>
                                                    <option>Metalmec�nica; Miner�a</option>
                                                    <option>Naviera</option>
                                                    <option>Operaciones Portuarias</option>
                                                    <option>Organizaciones sin Fines de Lucro</option>
                                                    <option>Pesquera</option>
                                                    <option>Publicidad | Marketing</option>
                                                    <option>Qu�mica</option>
                                                    <option>Seguros | Previsi�n; Servicios</option>
                                                    <option>Servicios Financieros varios</option>
                                                    <option>Tecnolog�as de Informaci�n</option>
                                                    <option>Telecomunicaciones</option>
                                                    <option>Textil | Maquila</option>
                                                    <option>Transporte</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group">    
                                            <label for="direccionEmpresa" class="col-lg-3 control-label">Direccion de la Empresa</label>
                                            <div class="col-lg-6">
                                                <input type="text" name="direc_perfilemp" class="form-control" placeholder="Escriba la direccion" required pattern=".{6,250}">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="departamento" class="col-lg-3 control-label">departamento</label>
                                            <div class="col-lg-4">
                                                <select name="departamento_perfilemp" class="form-control valid" required="">

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
                                            <label class="col-lg-3 control-label">Subir Logo de la Empresa </label>
                                            <div class="col-lg-4">
                                                <input type="file" id="exampleInputFile" name="subirlogo">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary btn-lg">Actualizar Datos</button> </center> 
                                        <br>
                                    </form>

                                </div>
                            </div>



                        </div>
                        <div class="tab-pane" id="Ofertas">

                            <div class="panel panel-primary">

                                <div class="panel-heading">Publicar Ofertas</div>


                                <div class="panel-body">

                                    <form action="#" method="POST" class="form-horizontal" role="form">

                                        <div class="form-group">       

                                            <br>      

                                            <center><legend> Detalles de la oferta</legend></center>
                                            <div class="form-group">  
                                                <div class="form-group">
                                                    <label for="oferta" class="col-lg-3 control-label">Titulo</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="titulo_of" placeholder="Detalle su oferta" class="form-control" required pattern=".{6,30}" id="focusedInput" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nivelacademico" class="col-lg-3 control-label">Descripcion de la Oferta</label>
                                                    <div class="col-lg-6">
                                                        <textarea name="descripcion_of"  class="form-control" rows="3"> </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="area" class="col-lg-3 control-label">Area de la Empresa</label>
                                                    <div class="col-lg-4">
                                                        <input name="area_of" type="text"  placeholder="Detalle su oferta" class="form-control" id="focusedInput" required pattern=".{6,30}" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cargo" class="col-lg-3 control-label">Cargo Solicitado</label>
                                                    <div class="col-lg-4">
                                                        <input name="cargo_of" type="text" placeholder="Detalle su oferta" class="form-control" id="focusedInput" required pattern=".{6,30}">
                                                    </div>
                                                </div>
                                                <div class="form-group"> 
                                                    <label for="puesto vacantes" class="col-lg-3 control-label">Puestos Vacantes</label>
                                                    <div class="col-lg-4">
                                                        <input name="vacantes_of" type="number" name="num" min="1" max="10" 
                                                               onkeypress="return numeros(event)"  class="form-control" id="focusedInput" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">              
                                                    <label for="contratacion" class="col-lg-3 control-label">Tipo de Contratacion</label>
                                                    <div class="col-lg-4">
                                                        <select name="contratacion_of" class="form-control" id="focusedInput" required="">
                                                            <option value="">Seleccione una opcion</option>
                                                            <option value="TC">Tiempo Completo</option> 
                                                            <option value="MT">Medio Tiempo</option>
                                                            <option value="T">Temporal</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <center><legend>Nivel de Experiencia</legend></center>
                                                <div class="form-group">   
                                                    <label for="nivel experiencia" class="col-lg-3 control-label">Experiencia en anos</label>
                                                    <div class="col-lg-4">
                                                        <select name="anoexp_ofertas" class="form-control" id="focusedInput" required="">
                                                            <option value="">Seleccione una opcion</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="mas de 5">mas de 5</option>
                                                            <option value="Sin experiencia">sin experiencia</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">        
                                                    <label for="edad" class="col-lg-3 control-label">Edad</label>
                                                    <div class="col-lg-4">
                                                        <input type="number" name="edad" min="18" max="65" class="form-control" 
                                                               onkeypress="return numeros(event)"  id="focusedInput" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Genero</label>
                                                    <div class="col-lg-4">
                                                        <input type="radio" name="genero_of" value="M" id="focusedInput" checked="">
                                                        Masculino
                                                        <input type="radio" name="genero_of" value="F" id="focusedInput">
                                                        Femenino   
                                                    </div>  
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Vehiculo</label>
                                                    <div class="col-lg-4">
                                                        <input type="radio" name="vehiculo_ofertas" value="Si" checked=""> 
                                                        Si
                                                        <input type="radio" name="vehiculo_ofertas" value="No"> 
                                                        No
                                                    </div>
                                                </div>

                                                <div class="form-group">        
                                                    <label for="salariomax_of" class="col-lg-3 control-label">Salario Maximo</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="salariomax_of" class="form-control" 
                                                               onkeypress="return numeros(event)"  id="focusedInput" placeholder="salariom" required>
                                                    </div>
                                                </div>

                                                <div class="form-group"> 
                                                    <label for="salariomi" class="col-lg-3 control-label">Salario Minimo</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="salariomin_of" class="form-control" 
                                                               onkeypress="return numeros(event)"  id="focusedInput" placeholder="salariomi" required>
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="departamento" class="col-lg-3 control-label">departamento</label>
                                                    <div class="col-lg-4">
                                                        <select name="departamento_of" class="form-control valid" required="">

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

                                            </div>

                                        </div>

                                        <div class="form-group"> 

                                            <center><legend> Experiencias Requeridas </legend></center>

                                            <div class="form-group">    
                                                <label for="indispensable" class="col-lg-3 control-label">Indispensable</label>
                                                <div class="col-lg-6">
                                                    <textarea name="experiencia" class="form-control" rows="3"> </textarea>
                                                </div>
                                            </div>         

                                        </div> 

                                        <div class="form-group">

                                            <center><legend> Educacion Superior </legend></center>

                                            <div class="form-group">
                                                <label for="Titulo" class="col-lg-3 control-label">Titulo en</label>
                                                <div class="col-lg-4">
                                                    <input type="text" name="tituloen_of" class="form-control" id="focusedInput" placeholder="Detalle " required pattern=".{7,30}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nivel academico" class="col-lg-3 control-label">Nivel Academico </label>
                                                <div class="col-lg-4">
                                                    <select name="nivel_of" id="nivel" class="form-control" required="">
                                                        <option value="">Seleccione una opcion </option>
                                                        <option value="Estudiante Universitario-Graduado">Estudiante Universitario-Graduado</option>
                                                        <option value="Estudiante Universitario-mitad de sus estudios">Estudiante Universitario-mitad de sus estudios </option>
                                                        <option value="Estudiante Universitario-empesando sus estudios">Estudiante Universitario-empesando sus estudios  </option>
                                                        <option value="Bachiller">Bachiller</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                        <center><input type='submit' class="btn btn-primary btn-lg" value='Guardar Oferta' /><input type='hidden' value='1' name='submitted' /> </center>  


                                    </form>



                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="Aplicacion">...</div>
                        <div class="tab-pane" id="Quitar">...</div>
                    </div>

                    <script>
                        $('#myTab a').click(function(e) {
                            e.preventDefault();
                            $(this).tab('show');
                        });
                    </script>

                </div>
            </div>
        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
