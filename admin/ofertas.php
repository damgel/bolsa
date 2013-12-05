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
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/contenido.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/holder.js"></script>
        <style>
            .container
            {
                margin-top: 10px;
                width: 98%;
                max-width: 100%;
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
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane active" id="plazas">
                            <?php
                            $set_load;
                            if (isset($_GET["id"])) {
                                $controlador = $_GET['id'];
                                if ($controlador === "activas") {
                                    include_once 'ofertasActivas.php';
                                } elseif ($controlador === "pendientes") {
                                    include_once 'ofertasNoActivas.php';
                                } else {
                                    include_once 'showOfertas.php';
                                }
                            } else {
                                include_once 'showOfertas.php';
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

