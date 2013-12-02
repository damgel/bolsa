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
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="Empleador.php">Perfil Empleador</a></li>
        <li><a href="../Plazas.php">Plazas Recientes</a></li>
        <li><a href="../Faq.php">FAQ</a></li>
        <li><a href="../Contactenos.php">Contactanos</a></li>
    </ul>

    <form class="navbar-form navbar-right" role="search">
        <?php
        session_start();
        if ($_SESSION['empresa'] != "") {
            echo "Bienvenido <b><a href='Empleador.php' class='logout'>" . $_SESSION['empresa'] . "</a></b>";
            echo '<a href="logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Cerra Sesion</a>';
        } elseif ($_SESSION['estudiante'] != "") {
            echo "Bienvenido <b>" . $_SESSION['estudiante'] . "</b>";
            echo '<a href="logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> Cerra Sesion</a>';
        } else {
            //echo "Invitado";
            echo "<a class='btn btn-info btn-large' href='login.php' role='button'>Entrar</a>";
        }
        ?>

    </form>
</div>
