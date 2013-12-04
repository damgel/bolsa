<?

include_once '../clases/db_connect.php';
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
echo "</tr>";
$result = mysql_query("SELECT * FROM `ofertas` where aprovacion_of=0") or trigger_error(mysql_error());
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
    echo "<td valign='top'>" . nl2br($row['aprovacion_of']) . "</td>";
    echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a> <a href=delete.php?id={$row['id']}>Delete</a></td> ";
    echo "</tr>";
}
echo "</table>";
?>