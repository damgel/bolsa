<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> detalles de Oferta </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">


        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/momments.js"></script>
        <script src="../assets/js/timeago.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/holder.js"></script>
        <style>
            .container
            {
                margin-top: 10px;
                width: 98%;
                max-width: 100%;
            }
            .oferta-contenedor
            {
                border:solid 1px #CCC;
                border-left: solid 8px #05a8ff;
                margin-top: 0px;
                margin: 25px;
                padding: 10px;
                overflow: hidden;
                width: 100%;

            }
            .well
            {
                border-left: solid 8px #28921f;

            }

            .disponible
            {
                text-align: center;
                width: 100%;
            }
            .disponible a:hover
            {
                text-decoration: none;
            }
            #wellinfo
            {
                padding-left: 5px;
                padding-right: 5px;
            }
            #timeagos
            {
                padding: 5px;
                margin: 5px;
            }
            .col-md-12
            {

                border:solid 1px #ccc;
                padding-left: 60px;

            }
            .col-md-12 ul
            {
                list-style-image: url("assets/img/success.png"); 
            }
            .col-md-12 ul li
            {
                border-bottom: solid 1px #05a8ff;
            }
        </style>

    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/header.php';
            ?>
        </div>

        <div id="contenedor" class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="tab-content">
                        <div class="tab-pane active" id="plazas">
                            <?php
                            include_once 'clases/db_connect.php';
                            if (isset($_GET["id"])) {
                                $controlador = $_GET['id'];
                                //query que carga las aplicaciones
                                $result = mysql_query("SELECT * FROM `ofertas` where aprovacion_of=1 and cod_oferta=$controlador") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    $cod_em = $row['cod_em'];
                                    ?>

                                    <div class="oferta-contenedor">
                                        <h4>Detalles de la Oferta #: <?php echo nl2br($row['cod_oferta']) ?></h4>
                                        <h3 class="h3"><a><?php echo nl2br($row['titulo_of']) ?></a></h3>
                                        <hr>
                                        <h4><?php echo nl2br($row['descripcion_of']) ?></h4><br>
                                        <h5>
                                            <?php
                                            $result2 = mysql_query("SELECT nombre_em FROM `empresa` where cod_em=$cod_em") or trigger_error(mysql_error());
                                            while ($row2 = mysql_fetch_array($result2)) {
                                                $nombre_empresa = $row2['nombre_em'];
                                            }
                                            ?>Publicado por:<?php echo "<b>" . $nombre_empresa . "</b>" ?></h5>
                                        <h4><?php $fecha_ago = ($row['fecha_of']) ?></h4>
                                        <?php echo "<span id='timeagos' data-livestamp='$fecha_ago'></span><br>" ?>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="well">
                                                    <h4>Area de la empresa:<?php echo nl2br($row['area_of']) ?></h4>
                                                    <h4>Cargo Solicitado:<?php echo nl2br($row['cargo_of']) ?></h4>
                                                    <h4>Vacantes Disponibles:<?php echo nl2br($row['vacantes_of']) ?></h4>
                                                    <h4>Contratacion: <?php echo nl2br($row['contratacion_of']) ?></h4>
                                                    <h4>Edad requerida: <?php echo nl2br($row['edad']) ?></h4>
                                                    <h4>Genero requerido: <?php echo nl2br($row['genero_of']) ?></h4>
                                                    <h4>Vehiculo: <?php echo nl2br($row['vehiculo_ofetas']) ?></h4>
                                                    <h4>Salario Maximo: $<?php echo nl2br($row['salariomax_of']) ?></h4>
                                                    <h4>Salario Minimo: $<?php echo nl2br($row['salariomin_of']) ?></h4>
                                                    <h4>Departamento: <?php echo nl2br($row['departamento_of']) ?></h4>
                                                    <h4>Experiencia requerida: <?php echo nl2br($row['experiencia_of']) ?></h4>
                                                    <?php
                                                    $oferta_disponible = $row['aprovacion_of'];
                                                    ?>


                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="well">
                                                    VALIDA HASTA:<br><?php echo nl2br($row['fechaFin_of']) ?>

                                                </div>
                                                <div class="well" id="wellinfo">
                                                    <form method="POST" action="oferta_aplicar.php">
                                                        <input type="hidden" name="cod_em" value="<?php echo nl2br($row['cod_em']) ?>">
                                                        <input type="hidden" name="cod_oferta" value="<?php
                                            $cod_oferta = $row['cod_oferta'];
                                            echo $cod_oferta
                                                    ?>">
                                                               <?php
                                                               $cod_usuario = $_SESSION['cod_estudiante'];

                                                               $query3 = mysql_query("SELECT cod_oferta FROM oferta_aplicaciones WHERE cod_u=$cod_usuario LIMIT 1");
                                                               while ($row3 = mysql_fetch_array($query)) {
                                                                   $valor = $row3{'cod_u'};
                                                               }
                                                               if ($valor > 0) {
                                                                   echo "YA APLICASTE PAPA";
                                                               }
                                                               ?>

                                                        <input type="hidden" name="cod_u" value="<?php
                                                       echo $cod_usuario
                                                               ?>">

                                                        <?PHP
                                                        if ($oferta_disponible == 1) {
                                                            echo "<h5 class='disponible'><div class='alert alert-success'><a class='alert-link'>DISPONIBLE</a></div></h5>";
                                                            echo "<p><input type='submit' class='btn btn-block btn-success' value='Aplicar a esta oferta' /><input type='hidden' value='1' name='submitted' />";
                                                        } elseif ($oferta_disponible == 0) {
                                                            echo " <h5 class='disponible'><div class='alert alert-danger'><a class='alert-link'> NO DISPONIBLE</a></div></h5>";
                                                        }
                                                        ?>
                                                    </form>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <?
                                            echo "<table class='table-bordered' >";
                                            $result = mysql_query("select cod_em as idEmpresa,cod_oferta as idOferta, nombre_u, fecha from oferta_aplicaciones inner join usuario on oferta_aplicaciones.cod_u=usuario.cod_u where cod_em=$cod_em and cod_oferta=$cod_oferta ") or trigger_error(mysql_error());
                                            while ($row = mysql_fetch_array($result)) {
                                                foreach ($row AS $key => $value) {
                                                    $row[$key] = stripslashes($value);
                                                }
                                                $fecha_aplicacion = ($row['fecha']);
                                                echo "<tr>";
                                                echo "<ul>";
                                                echo "<li>" . nl2br($row['nombre_u']) . " aplico a esta oferta " . "<span id='timeagos' data-livestamp='$fecha_aplicacion'></span></li>";
                                                echo "</ul>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            ?>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

