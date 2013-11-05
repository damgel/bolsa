<!DOCTYPE html>
<html lang="es">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>Busqueda de Empleos</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/jqueryUI.css">
        
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr2.6.2.js"></script>
        <script src="assets/js/holder.js"></script>
        <style>
        body {
                
                /* background-color: gainsboro;    */
                /* background-color:#d0e5f5;  */
                background-color:#d6e9c6;
            }
        </style>
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
    </head>
    <body>
        <!-- NAVBAR
            ================================================== -->
    <div class="container">
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
         

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Seleccione sus criterios de busqueda:</h3>
                        </div>
                        <div class="panel-body">
                            <form action="#" id="busquedaEmpleo" class="form-horizontal">
                                <div class="form-group">
                                    <label for="Busqueda" class="col-lg-2 control-label">Busqueda:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="buscar" class="form-control "   placeholder="Seleccione un filtro para hacer una busqueda" required>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Buscar Empleo</a>
                                </div> 
                            </form>

                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="actividadEmpresa"class="col-lg-4 control-label">Cargo Solicitado:</label>
                                    <div class="col-lg-5">
                                        <select name="cargo_solicitado" class="form-control">
                                            <option value="">Seleccione un cargo:</option>
                                            <option>Asistente</option> 
                                            <option>Desarrollador</option>
                                            <option>Diseniador</option>
                                            <option>Otros</option>

                                        </select>
                                    </div>
                                    <label for="actividadEmpresa"class="col-lg-4 control-label">Actividad Empresa:</label>
                                    <div class="col-lg-5">
                                        <select name="actividad_empresa" class="form-control" required>
                                            <option value="">Seleccione una actividad:</option>
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
                                            <option>Internet</option>
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

                            <form action="" class="form-inline">
                                <label for="Fecha_Nacimiento" class="col-lg-2 control-label">Fecha Publicacion:</label>
                                <div class="col-lg-3">
                                    <input type="date"  class="form-control">
                                    <label for="sueldo" class="col-lg-3 control-label">Sueldo:</label><br>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" value="100" min="100" max="10000">  
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">RESULTADOS DE LA BUSQUEDA:</div>
                        <div class="panel-body">
                            <div class="bs-example">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img data-src="holder.js/200x50" alt="200x50" src="data:image/png;base64,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" style="width: 300px; height: 200px;">
                                            <div class="caption">
                                                <h3>Oferta 1</h3>
                                                <p>Descripcion de la oferta</p>
                                                <p>Publicada por: <b> x empresa.</b></p>
                                                <p><a href="#" class="btn btn-default btn-large">Aplicar</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img data-src="holder.js/200x50" alt="200x50"  src="data:image/png;base64,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" style="width: 300px; height: 200px;">
                                            <div class="caption">
                                                <h3>Oferta2</h3>
                                                <p>Descripcion de la oferta</p>
                                                <p>Publicada por: <b> x empresa.</b></p>
                                                <p><a href="#" class="btn btn-default btn-large">Aplicar</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img data-src="holder.js/200x50" alt="200x50" src="data:image/png;base64,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" style="width: 300px; height: 200px;">
                                            <div class="caption">
                                                <h3>Oferta3</h3>
                                                <p>Descripcion de la oferta</p>
                                                <p>Publicada por: <b> x empresa.</b></p>
                                                <p><a href="#" class="btn btn-default btn-large">Aplicar</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img data-src="holder.js/200x50" alt="200x50"  src="data:image/png;base64,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" style="width: 300px; height: 200px;">
                                            <div class="caption">
                                                <h3>Oferta4</h3>
                                                <p>Descripcion de la oferta</p>
                                                <p>Publicada por: <b> x empresa.</b></p>
                                                <p><a href="#" class="btn btn-default btn-large">Aplicar</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>       
                    </div>  
            <hr class="featurette-divider">
            <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2013 Bolsa de Empleo UFG, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
                </footer>
        </div>

    </body>
</html>
