<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon-gen.png">

        <title>Bolsa de Empleos</title>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="assets/js/html5shiv.js"></script>
              <script src="assets/js/respond.min.js"></script>
            <![endif]-->

        <link href="assets/carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/holder.js"></script>


        <style>
            h1 {
                color: black;
                border-color: lightblue;
                border-radius: 10px;
            }

            p {
                color: black;
                border-color: lightblue;
                border-radius: 10px;
            }

            .title-ufg {
                padding-top: 1%;
                color: white;
                border-color: lightblue;
                border-radius: 10px;
            }


            body {
                margin-top: 0px;
                background-color:  #d0e9c6;
            }
            .container
            {
                background-color: white;
                padding-top: 5px;
                margin-top: 5px;
                overflow: hidden;
                border:solid 1px #ccc;
                border-radius: 10px;
                box-shadow: 0px 0px 5px 1px #ccc;

            }

        </style>
        <script>
            //JS PARA INICIALIZAR EL CARUSEL
            // INTEVAL = TIEMPO QUE DURA CADA SLIDE
            var $ = jQuery.noConflict();
            $(document).ready(function() {
                $('#myCarousel').carousel({interval: 6000});
            }
            );

            // CUANDO EL FOCO ESTE SOBRE EL SLIDE TRES, ESTE PAUSA EL SLIDE
            // PARA PODER VER EL VIDEO
            $('#item_vidUfg').hover(function() {
                $(this).carousel('pause');
            });

        </script>
    </head>
    <body>
        <div class="container">
            <div id="header" class="navbar navbar-default navbar-static-top">
                <?php include_once 'layout/header.php'; ?>
            </div>

            <!-- Carousel================================================== -->
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/banner1.jpg" alt="First slide">
                        <!-- EN EL DIV QUE CONTIEME LA CLASE "item active"DEBEN AGREGARSE LAS IMAGENES -->
                        <div class="container">
                            <div class="carousel-caption">

                                <h1>Universidad Francisco Gavidia.</h1>
                                <p>¿Deseas Trabajar o Contratar?</p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="RegistroEmpleador.php" role="button">Contratar</a>
                                    <a class="btn btn-lg btn-primary" href="RegistroUsuario.php" role="button">Trabajar</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/banner2.jpg" alt="Second slide">


                        <div class="carousel-caption">
                            <h1>¿Eres Estudiante o Egresado?</h1>
                            <h2>¿Buscas Empleo?</h2>
                            <p>Registra tu currículum con nosotros y busca las mejores oportunidades de empleo.</p>
                            <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Entrar</a></p>
                        </div>

                    </div>
                    <div class="item" id="item_vidUfg">
                        <img src="assets/img/banner3.jpg" alt="Third slide">

                        <div class="carousel-caption">
                            <br>
                            <h1><span class="title-ufg">Conoce mas sobre la UFG.</span></h1>

                            <embed
                                width="700" height="400"
                                src="http://www.youtube.com/v/5V-FQocQ4PY"
                                type="application/x-shockwave-flash">
                            </embed>

                        </div>

                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- /.carousel -->

            <!-- Three columns of text below the carousel -->
            <div class="marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle" src="assets/img/curriculum.png" alt="Generic placeholder image">
                        <h2>Oferta 1</h2>
                        <p>Descripción de la última oferta de trabajo publicada.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle" src="assets/img/PublicarOferta.png" alt="Generic placeholder image">
                        <h2>Oferta 2</h2>
                        <p>Descripción de la penúltima oferta de trabajo publicada.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle" src="assets/img/VisionMision.png" alt="Generic placeholder image">
                        <h2>Oferta 3</h2>
                        <p>Descripción de la antepenúltima oferta de trabajo publicada.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Registre su Empresa. <span class="text-muted"><a href="RegistroEmpleador.php">Ahora.</a></span></h2>
                        <p class="lead">
                            Con solo registrarse, encuentre en nuestra base de datos, de acuerdo a sus necesidades, profesionales altamente capacitados, teóricos y prácticos 100%; formados por nuestro experto cuerpo de docentes.
                            Registre su empresa, publique su oferta y podrá seleccionar entre nuestros estudiantes o graduados que apliquen a su oferta.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="assets/img/Empleador1.jpg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="assets/img/vacantes1.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Si eres estudiante de la UFG. <span class="text-muted"><a href="RegistroUsuario.php">Registra tu currículum gratuitamente.</a></span></h2>
                        <p class="lead">Agregue su currículum gratuitamente a nuestra base de datos y dese a conocer a cientos de empresas registradas en nuestra base de datos. También puede aplicar a cientos de oportunidades de empleo, ofertadas por las mejores empresas nacionales e internacionales.</p>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Empresas registradas<br>
                            <span class="text-muted">con nosotros.</span></h2>

                        <p class="lead">Contamos con un registro de empresas prestigiosas nacionales e internacionales, que utilizan nuestra base de datos para contratar y cubrir sus plazas vacantes.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive" src="assets/img/Logos.jpg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->


                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2013 Bolsa de Empleo UFG, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y Condiciones</a></p>
                </footer>

            </div>

        </div>
    </body>
</html>
