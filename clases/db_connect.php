<?php

/**
 * clase para abrir una conexion a mysql server
 *
 * @author daMgeL
 */
$servidor = "localhost";
$usuario = "root";
$password = "";
$databaseName = "bolsa";

if (!($conexion = mysql_connect($servidor, $usuario, $password) or die('Error al conectar con mysql'))) {
    echo "algo fallo en la conexion";
    exit();
}
else
    mysql_select_db($databaseName) or die('Imposible acceder a base de datos!');
?>

