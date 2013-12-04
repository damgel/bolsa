<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Desactivando empresa</title>
    </head>
    <body>
        <?php
        echo "<script>alert('PRUEBA DE CONCEPTO')</script>";
        include_once '../clases/db_connect.php';
        $cod_em = (int) $_GET['id'];
        foreach ($_POST AS $key => $value) {
            $_POST[$key] = mysql_real_escape_string($value);
        }
        //QUERY PARA DESACTIVAR LAS EMPRESAS
        $sql = "UPDATE `empresa` SET  `activa_em` =  'N'   WHERE `cod_em` = '$cod_em' ";
        mysql_query($sql) or die(mysql_error());
        //QUERY PARA DESACTIVAR TODAS LAS OFERTAS PUBLICADAS POR LAS EMPRESAS
        $sql2 = "UPDATE `ofertas` SET  `disponible_of` = 0, `aprovacion_of`=0    WHERE `cod_em` = '$cod_em' ";
        mysql_query($sql2) or die(mysql_error());
        header("Location: http://localhost:8000/admin/panel.php"); /* Redirect browser */
        ?>

    </body>
</html>

