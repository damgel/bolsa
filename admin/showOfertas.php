<form id="form1"  name="form1" method="POST" action="">
    <label for="buscar" class="lbl-buscar"><a href="index.php">Buscar:</a></label>
    <input type="text" name="buscar" id="buscar" /></td>
<input type="submit"  id="btn-buscar" name="Aceptar" id="Aceptar" value="Buscar" /><br>
</form>
<?php
include_once '../clases/db_connect.php';
if (isset($_POST['buscar'])) {
    echo "<table class='table-bordered' >";
    echo "<tr>";
    echo "<td><b>Empresa</b></td>";
    echo "<td><b>Titulo</b></td>";
    echo "<td><b>Cargo</b></td>";
    echo "<td><b>Experiencia</b></td>";
    echo "<td><b>Edad</b></td>";
    echo "<td><b>Genero</b></td>";
    echo "<td><b>SalarioMin</b></td>";
    echo "<td><b>SalarioMax</b></td>";
    echo "<td><b>Departamento</b></td>";
    echo "<td><b>Aprovada</b></td>";
    echo "<td><b>Acciones</b></td>";
    echo "</tr>";
    $result = mysql_query("SELECT * FROM `ofertas` where titulo_of like '%" . $_POST['buscar'] . "%'");
    while ($row = mysql_fetch_array($result)) {
        foreach ($row AS $key => $value) {
            $row[$key] = stripslashes($value);
        }
        echo "<tr>";

        echo "<td valign='top'>" . nl2br($row['cod_em']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['titulo_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['cargo_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['anoexp_ofetas']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['edad']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['genero_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['salariomax_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['salariomin_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['departamento_of']) . "</td>";
        $estado = $row['aprovacion_of'];
        $estado_show;
        if ($estado == 0) {
            $estado_show = "<h5 class='alert alert-danger'>No</h5>";
        } elseif ($estado == 1) {
            $estado_show = "<h5 class='alert alert-success'>Si</h5>";
        }
        echo "<td valign='top' >" . $estado_show . "</td>";
        echo "<td valign='top'><a class='btn btn-default btn-sm' href=detallesOferta.php?id={$row['cod_oferta']}>Detalles</a><a class='btn btn-success' href=ofertas_controller.php?activar={$row['cod_oferta']}>Activar</a><a class='btn btn-danger' href=ofertas_controller.php?desactivar={$row['cod_oferta']}>Desactivar</a></td>";

        echo "</tr>";
    }
} else {

    echo "<table class='table-bordered' >";
    echo "<tr>";
    echo "<td><b>Empresa</b></td>";
    echo "<td><b>Titulo</b></td>";
    echo "<td><b>Cargo</b></td>";
    echo "<td><b>Experiencia</b></td>";
    echo "<td><b>Edad</b></td>";
    echo "<td><b>Genero</b></td>";
    echo "<td><b>SalarioMin</b></td>";
    echo "<td><b>SalarioMax</b></td>";
    echo "<td><b>Departamento</b></td>";
    echo "<td><b>Aprovada</b></td>";
    echo "<td><b>Acciones</b></td>";
    echo "</tr>";
    $result = mysql_query("SELECT * FROM `ofertas`") or trigger_error(mysql_error());
    while ($row = mysql_fetch_array($result)) {
        foreach ($row AS $key => $value) {
            $row[$key] = stripslashes($value);
        }
        echo "<tr>";

        echo "<td valign='top'>" . nl2br($row['cod_em']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['titulo_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['cargo_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['anoexp_ofetas']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['edad']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['genero_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['salariomax_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['salariomin_of']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['departamento_of']) . "</td>";
        $estado = $row['aprovacion_of'];
        $estado_show;
        if ($estado == 0) {
            $estado_show = "<h5 class='alert alert-danger'>No</h5>";
        } elseif ($estado == 1) {
            $estado_show = "<h5 class='alert alert-success'>Si</h5>";
        }
        echo "<td valign='top' >" . $estado_show . "</td>";
        echo "<td valign='top'><a class='btn btn-default btn-sm' href=detallesOferta.php?id={$row['cod_oferta']}>Detalles</a><a class='btn btn-success' href=ofertas_controller.php?activar={$row['cod_oferta']}>Activar</a><a class='btn btn-danger' href=ofertas_controller.php?desactivar={$row['cod_oferta']}>Desactivar</a></td>";

        echo "</tr>";
    }
}
echo "</table>";
?>