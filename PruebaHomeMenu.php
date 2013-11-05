<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Twitter Bootstrap tab based dropdown Navigation Example</title> 
        <meta name="description" content="Twitter Bootstrap tab based dropdown Navigation Example">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-v1.10.2.js"></script>


        <!-- This is just a little bit of custom CSS code to enhance things. Feel free to place this in your main CSS file. I've commented to say what each bit does. --> 
        <style type="text/css">
            /* Removes the default 20px margin and creates some padding space for the indicators and controls */
            .carousel {
                margin-bottom: 0;
                padding: 0 40px 30px 40px;
            }
            /* Reposition the controls slightly */
            .carousel-control {
                left: -12px;
            }
            .carousel-control.right {
                right: -12px;
            }
            /* Changes the position of the indicators */
            .carousel-indicators {
                right: 50%;
                top: auto;
                bottom: 0px;
                margin-right: -19px;
            }
            /* Changes the colour of the indicators */
            .carousel-indicators li {
                background: #c0c0c0;
            }
            .carousel-indicators .active {
                background: #333333;
            }
        </style>


    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bolsa de Empleo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Busqueda Personalizada <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Buscar por Fecha</a></li>
                            <li><a href="#">Buscar por Tipo</a></li>
                            <li><a href="#">Buscar por Categoria</a></li>
                            <li><a href="#">Buscar por Emperiencia</a></li>
                            <li><a href="#">Buscar por Ubicacion</a></li>
                        </ul>
                    </li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contactanos</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="Buscar Empleo">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <button type="submit" class="btn btn-success">Registrarse</button>
                </form>                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>


        <!-- /. AQUI INICIA EL CARROUSEL  -->
        <div class="well">

            <div id="myCarousel" class="carousel slide">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                        </div><!--/row-fluid-->
                    </div><!--/item-->

                    <div class="item">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                        </div><!--/row-fluid-->
                    </div><!--/item-->

                    <div class="item">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                        </div><!--/row-fluid-->
                    </div><!--/item-->

                </div><!--/carousel-inner-->

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div><!--/myCarousel-->

        </div><!--/well-->



        <!-- Call jQuery 1.9, call bootstrap.js and run the carousel when the DOM is ready. Slide every 10 seconds. -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myCarousel').carousel({
                    interval: 10000
                });
            });
        </script>
    </body>
</html>   
