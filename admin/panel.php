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

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/contenido.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">   
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
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
                            <li class="active"><a href="panel.php">Empresas</a></li>
                            <li class=""><a href="ofertas.php">Administrar Ofertas</a></li>
                            <li class=""><a href="#">Estudiantes</a></li>
                            <li class=""><a href="#">Otros</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Empresas</div>
                            <div class="panel-body">
                                <form action="">

                                    <?php
                                    include_once '../clases/db_connect.php';
                                    $SetPermiso;
                                    $tabla = 'table-bordered';
                                    echo "<table class=" . $tabla . ">";
                                    echo "<tr>";
                                    echo "<td><b>Imagen</b></td>";
                                    echo "<td><b>Nombre</b></td>";
                                    echo "<td><b>Email</b></td>";
                                    echo "<td><b>Telefono</b></td>";
                                    echo "<td><b>Descripcion</b></td>";
                                    echo "<td><b>Actividad</b></td>";
                                    echo "<td><b>Aprobada</b></td>";
                                    echo "<td><b>Acciones</b></td>";
                                    echo "</tr>";
                                    $result = mysql_query("SELECT * FROM `empresa`") or trigger_error(mysql_error());
                                    while ($row = mysql_fetch_array($result)) {
                                        foreach ($row AS $key => $value) {
                                            $row[$key] = stripslashes($value);
                                        }


                                        echo "<tr>";
                                        echo "<td valign='top'><img src='../" . nl2br($row['imagen_em']) . "' width='150' height='100' /></td>";
                                        echo "<td valign='top'>" . nl2br($row['nombre_em']) . "</td>";
                                        echo "<td valign='top'>" . nl2br($row['email_em']) . "</td>";
                                        echo "<td valign='top'>" . nl2br($row['telefono_em']) . "</td>";
                                        echo "<td valign='top'>" . nl2br($row['descripcion_em']) . "</td>";
                                        echo "<td valign='top'>" . nl2br($row['actividad_em']) . "</td>";
                                        if ($row['activa_em'] == "S") {
                                            $var_activo = "<img src='img/success.png'></img>";
                                        } else {
                                            $var_activo = "<img src='img/error.png'></img>";
                                        }
                                        echo "<td valign='top' class='estado'>$var_activo</td>";
                                        echo "<td valign='top'><a class='btn btn-success btn-xs' href=aempresa.php?id={$row['cod_em']}>Activar</a><br><a class='btn btn-warning btn-xs' href=dempresa.php?id={$row['cod_em']}>Desactivar</a></td> ";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    ?>

                                </form>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

