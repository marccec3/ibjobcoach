<?php
require 'admin/config/conexion.php';
session_start();
$objData = new Database();
if (isset($_SESSION['usuario'])) {

$sth = $objData->prepare('UPDATE ibvirtuallicencias SET status = :status WHERE correo = :email');

$status = 'Disabled';
$sth->bindParam(':status', $status);
$sth->bindParam(':email', $_SESSION['usuario']);

$sth->execute();
header ('location: ../index.php');
}
?>