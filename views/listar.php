<?php

define('DB_HOST','51.161.34.107');
define('DB_USER','jun21cod_ibvirtual2');
define('DB_PASS','powerful@doom4d');
define('DB_NAME','jun21cod_proyecto_ibvirtual');
 
// Ahora, establecemos la conexión.
try
{
// Ejecutamos las variables y aplicamos UTF8
$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>