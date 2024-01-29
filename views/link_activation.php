<?php
require 'assets/admin/config/conexion.php'; 

$objData = new Database();

$sth = $objData->prepare('UPDATE ibvirtuallicencias SET status = :status WHERE codigo = :code');

$status = 'Enabled';
$code = $_GET['link'];
$fecha= gettimeofday();
$sth->bindParam(':status', $status);
$sth->bindParam(':code', $code);

$sth->execute();

echo "<script>alert('confirmacion exitosamente, ya casi esta listo  para acceder a nuestros servicios que tenemos para Usted.');location.href ='https://ibvirtual2.iboutplacement.com/assets/login.php';</script>";

?>