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

        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

        <script src="../assets/js/holder.js"></script>
        <style>
            .container
            {
                width: 95%;
            }
            fieldset    
            {
                border: solid 1px #05a8ff;
            }
            table
            {
                width: 80%;
            }
            table .estado
            {
                font-weight: bold;
                text-align: center;
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
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#plazas">Todas las Plazas</a></li>
                <li class=""><a href="#plazas_ok">Plazas Aprobadas</a></li>
                <li class=""><a href="#plazas_no">Plazas No Aprobadas</a></li>
                <li class=""><a href="#otros">Otros</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="plazas">
                    <?php
                    include_once 'aplazas.php';
                    ?>

                </div>
                <div class="tab-pane" id="plazas_ok">Plazas aprobadas</div>
                <div class="tab-pane" id="plazas_no">Plazas no aprobadas</div>
                <div class="tab-pane" id="otros">Otros usos o mantenimientos</div>
            </div>


            <script>
                $('#myTab a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            </script>
        </div>
    </body>
</html>

