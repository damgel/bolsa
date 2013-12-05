<?

include_once '../clases/db_connect.php';
if (isset($_GET['activar'])) {
    $id = (int) $_GET['activar'];
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $sql = "UPDATE `ofertas` SET `aprovacion_of` = 1  WHERE `cod_oferta` = '$id' ";
    mysql_query($sql) or die(mysql_error());
    header("Location: detallesOferta.php?id=$id"); /* Redirect browser */
} elseif (isset($_GET['desactivar'])) {
    $id = (int) $_GET['desactivar'];
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $sql = "UPDATE `ofertas` SET `aprovacion_of` = 0  WHERE `cod_oferta` = '$id' ";
    mysql_query($sql) or die(mysql_error());
    header("Location: detallesOferta.php?id=$id"); /* Redirect browser */
}
?> 
