<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.png">
        <title>Plazas Recientes</title>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/jqueryUI.css">
        <link rel="stylesheet" href="assets/css/oferta.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/momments.js"></script>
        <script src="assets/js/timeago.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/jquery.validate.js"></script>   
        <script src="assets/js/modernizr2.6.2.js"></script>
        <script src="assets/js/holder.js"></script>
    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>
        <div id="contenedor" class="container">
            <?php
            include_once 'clases/db_connect.php';
            $result = mysql_query("SELECT * FROM `ofertas` where disponible_of=1 and aprovacion_of=1") or trigger_error(mysql_error());
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
                        <a href="detallesOferta.php?id=<?php echo $row['cod_oferta'] ?>" class="btn btn-success btn-sm">Ver Informacion</a>
                        <hr class="featurette-divider">
                    </div>
                </div>
                <?php
//                            echo "<td valign='top'><a href=edit.php?id={$row['id']}>Aplicar</a></td><td><a href=delete.php?id={$row['id']}>Ver Detalles</a></td> ";
            }
            ?>

            <ul class="pagination">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>


            <hr class="featurette-divider">

            <footer>
                <p class="pull-right"><a href="#">Subir <span class="glyphicon glyphicon-arrow-up"></span></a></p>
                <p>&copy; 2013 Bolsa de Empleo UFG, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
            </footer>
        </div>

    </body>
</html>
