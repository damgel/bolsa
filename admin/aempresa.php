<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Activando empresa</title>
    </head>
    <body>
        <?php
        echo "<script>alert('PRUEBA DE CONCEPTO')</script>";
        include_once '../clases/db_connect.php';
        $cod_em = (int) $_GET['id'];
        foreach ($_POST AS $key => $value) {
            $_POST[$key] = mysql_real_escape_string($value);
        }
        /// QUERY PARA ACTIVAR LAS EMPRESAS
        $sql = "UPDATE `empresa` SET  `activa_em` =  'S'   WHERE `cod_em` = '$cod_em' ";
        mysql_query($sql) or die(mysql_error());

        $getemailEM = "select email_em from  `empresa` WHERE `cod_em` = '$cod_em' ";
        $emailEmpresa;
        while ($row = mysql_fetch_array($getemailEM)) {
           
		    $emailEmpresa = $row['email_em'];
			
			
        }

        // LA VARIABLE CON EL EMAIL ES "$emailEmpresa"
		

$titulo = 'Sobre la oferta';
$mensaje = 'Su oferta fue aceptada \r\n Saludos'; 
$cabeceras = 'From: ufg@ufg.com' . "\r\n" . 
  'Reply-To: ufg@ufg.com' . "\r\n" . 
 'X-Mailer: PHP/' . phpversion();  
 
mail($emailEmpresa, $titulo, $mensaje, $cabeceras);

		

        header("Location: http://localhost/bolsa/admin/panel.php"); /* CUANDO TODO ESTE OK, REDIRECCIONAR A EL PANEL */
        ?>



    </body>
</html>