<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Panel Administrativo </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/contenido.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">



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
                width: 95%;

            }
            .tab-content
            {
                padding-top: 0px;
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
        </style>

    </head>
    <body>
        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'menu-admin.php';
            ?>
        </div>

        <div id="contenedor" class="container">
            <div class="row">

                <div class="col-md-2">
                    <div class="lista-enlaces">
                        <ul id="myTab">
                            <li class="active"><a href="ofertas.php">Todas las Ofertas</a></li>
                            <li class=""><a href="ofertas.php?id=activas">Ofertas Activas</a></li>
                            <li class=""><a href="ofertas.php?id=pendientes">Ofertas Pendientes</a></li>
                            <li class=""><a href="#Quitar">Quitar Ofertas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane active" id="plazas">
                            <?php
                            include_once '../clases/db_connect.php';
                            if (isset($_GET["id"])) {
                                $controlador = $_GET['id'];
                                $result = mysql_query("SELECT * FROM `ofertas` where cod_oferta=$controlador") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    $cod_em = $row['cod_em'];
                                    $cod_oferta = $row['cod_oferta'];
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
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="well">
                                                    VALIDA HASTA:<br><?php echo nl2br($row['fechaFin_of']) ?>
                                                </div>
                                                <div class="well">
                                                    <a class="btn btn-block btn-success" href="ofertas_controller.php?activar=<?php echo $cod_oferta ?>">Activar</a>
                                                    <a class="btn btn-block btn-danger" href="ofertas_controller.php?desactivar=<?php echo $cod_oferta ?>">Desactivar</a>


                                                </div>
                                                <div class="well" id="wellinfo">
                                                    <?PHP
                                                    if ($row['aprovacion_of'] == 1) {
                                                        echo " <h5 class='disponible'><div class='alert alert-success'><a class='alert-link'>Aprobada</a></div></h5>";
                                                    } else {
                                                        echo " <h5 class='disponible'><div class='alert alert-danger'><a class='alert-link'> Denegada</a></div></h5>";
                                                    }
                                                    ?>
                                                    <form method="POST" action="">
                                                        <input type="hidden" name="cod_em" value="<?php echo nl2br($row['cod_em']) ?>">
                                                        <input type="hidden" name="cod_oferta" value="<?php echo nl2br($row['cod_oferta']) ?>">
                                                        <input type="hidden" name="cod_u" value="<?php echo nl2br($row['cod_oferta']) ?>">
                                                        <?PHP
                                                        if ($row['disponible_of'] == 1) {
                                                            echo " <h5 class='disponible'><div class='alert alert-success'><a class='alert-link'>En Curso</a></div></h5>";
                                                        } else {
                                                            echo " <h5 class='disponible'><div class='alert alert-danger'><a class='alert-link'> Finalizada</a></div></h5>";
                                                        }
                                                        ?>
                                                    </form>

                                                </div>


                                            </div>
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

