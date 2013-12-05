<!-- NAVBAR MENU -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</div>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Busqueda.php">Buscar Empleo</a></li>
        <li><a href="Ofertas.php">Ofertas Recientes</a></li>
        <?php
        session_start();
        $_usuario = $_SESSION['estudiante'];
        if ($_usuario != "") {
            echo "<li><a href='Usuario.php'>Mi Perfil </a></li>";
            echo "<li><a href='misaplicaciones.php'>Ver mis aplicaciones</a></li>";
        } else {
            echo "<li><a href='Faq.php'>FAQ</a></li>";
            echo "<li><a href='Contactenos.php'>Contactanos</a></li>";
        }
        ?>
    </ul>

    <form class="navbar-form navbar-right" role="search">
        <?php
        session_start();
        $_usuario = $_SESSION['estudiante'];
        if ($_usuario == "") {

            echo "<ul>";
            echo "<li class = 'dropdown'>";
            echo "<a href = '#' class = 'dropdown-toggle' data-toggle = 'dropdown'><span class = 'glyphicon glyphicon-log-in'></span> Entrar <b class = 'caret'></b></a>";
            echo "<ul class = 'dropdown-menu'>";
            echo "<li><a href = 'login.php'><span class = 'glyphicon glyphicon-star'></span> Acceso Empresa</a></li>";
            echo "<li><a href = 'loginu.php'><span class = 'glyphicon glyphicon-user'></span> Acceso Estudiante</a></li>";
            echo"</ul>";
            echo "</li>";
            echo "</ul>";
        }
        ?>

        <?php
        session_start();
        if ($_SESSION['empresa'] != "") {
            echo "Bienvenido <b><a href='empleador/Empleador.php' class='logout'>" . $_SESSION['empresa'] . "</a></b>";
            echo '<a href="logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Cerra Sesion</a>';
            header("Location: empleador/Empleador.php"); /* redireccionar navegador */
        } elseif ($_SESSION['estudiante'] != "") {
            echo "Bienvenido <b>" . $_SESSION['estudiante'] . "</b>";
            echo '<a href="logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Cerra Sesion</a>';
        } else {
            //echo "Invitado";
        }
        ?>

    </form>
</div>
