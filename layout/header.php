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
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="Usuario.php">Perfil Usuario</a></li>
                <li><a href="Empleador.php">Perfil Empleador</a></li>
            </ul>
        </li>
        <li><a href="Busqueda.php">Buscar Empleo</a></li>
        <li><a href="Plazas.php">Plazas Recientes</a></li>
        <li><a href="Faq.php">FAQ</a></li>
        <li><a href="Contactenos.php">Contactanos</a></li>
    </ul>

    <form class="navbar-form navbar-right" role="search">
        <?php
        session_start();
        if ($_SESSION['empresa'] != "") {
            echo "Bienvenido <b>" . $_SESSION['empresa'] . "</b>";
        } elseif ($_SESSION['estudiante'] != "") {
            echo "Bienvenido <b>" . $_SESSION['estudiante'] . "</b>";
        } else {
            echo "Invitado";
        }
        ?>
        <a class="btn btn-info btn-large" href="login.php" role="button">Entrar</a>
    </form>
</div>
