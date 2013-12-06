<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.png">
        <title>Busqueda de Empleos</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/jqueryUI.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <link rel="stylesheet" href="../assets/css/contenido.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/jquery.validate.js"></script>   
        <script src="assets/js/modernizr2.6.2.js"></script>
        <script src="assets/js/holder.js"></script>
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
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>
        <div id="contenedor" class="container">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Escriba un titulo en la barra busqueda:</h3>
                </div>
                <div class="panel-body">
                    <form id="form1"  name="form1" method="POST" action="">
                        <label for="buscar" class="lbl-buscar"><a href="index.php">Buscar:</a></label>
                        <input type="text" name="buscar" id="buscar" /></td>
                        <input type="submit"  id="btn-buscar" name="Aceptar" id="Aceptar" value="Buscar" /><br>
                    </form>

                </div>
            </div>
            <hr class="featurette-divider">
            <div class="panel panel-success">
                <div class="panel-heading">RESULTADOS DE LA BUSQUEDA:</div>
                <div class="panel-body">

                    <div id="contenedor" class="container">
                        <?php
                        include_once 'clases/db_connect.php';
                        if (isset($_POST['buscar'])) {
                            $result = mysql_query("SELECT * FROM `ofertas` where aprovacion_of=1 and titulo_of like '%" . $_POST['buscar'] . "%'") or trigger_error(mysql_error());
                            while ($row = mysql_fetch_array($result)) {
                                foreach ($row AS $key => $value) {
                                    $row[$key] = stripslashes($value);
                                }
                                ?>
                                <div class="oferta">
                                    <div class="sub">
                                        <hr class="featurette-divider">
                                        <h3><a href="#"><?php echo nl2br($row['titulo_of']) ?></a></h3>
                                        <h4><?php echo nl2br($row['descripcion_of']) ?></h4>
                                        <h4><?php $fecha_ago = ($row['fecha_of']) ?></h4>
                                        <?php echo "Publicado: <span id='timeagos' data-livestamp='$fecha_ago'></span><br>" ?>
                                        <br>
                                        <?php
                                        session_start();
                                        $cod_oferta = $row['cod_oferta'];
                                        $_usuario = $_SESSION['estudiante'];
                                        if ($_usuario != "") {
                                            echo "<a href=detallesOferta.php?id=$cod_oferta class='btn btn-success btn-sm'>Ver Informacion</a>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Debes registrarte para poder aplicar a las ofertas!";
                                            echo " <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> </div>";
                                            echo "<h2><a href='RegistroUsuario.php'>Clic aqui para registrarte</a></h2>";
                                        }
                                        ?>
                                        <hr class="featurette-divider">
                                    </div>
                                </div>
                                <?php
//                            echo "<td valign='top'><a href=edit.php?id={$row['id']}>Aplicar</a></td><td><a href=delete.php?id={$row['id']}>Ver Detalles</a></td> ";
                            }
                        }
                        ?>

                    </div>
                </div>       
            </div>  
            <hr class="featurette-divider">

            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Bolsa de Empleo UFG, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
            </footer>
        </div>

    </body>
</html>
