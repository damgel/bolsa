<?

include_once 'clases/db_connect.php';
if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $sql = "INSERT INTO `oferta_aplicaciones` ( `cod_em` ,  `cod_u` ,  `cod_oferta` ,  `fecha`  ) VALUES(  '{$_POST['cod_em']}' ,  '{$_POST['cod_u']}' ,  '{$_POST['cod_oferta']}' ,  now() ) ";
    mysql_query($sql) or die(mysql_error());
    echo "<meta http-equiv='refresh' content='0;URL=misaplicaciones.php'>";

}
?>