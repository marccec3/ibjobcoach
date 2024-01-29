<?php
print_r($_POST);
require 'assets/admin/config/conexion.php';
$suscripcion=$_POST['suscripcion']?? '';
$mes_opcion=$_POST['mes-posicion']?? '';
$select_posicion=$_POST['select-posicion']?? '';
$valor_plan=$_POST['valor-plan']?? '';
$dscto_plan=$_POST['dscto-plan']?? '';
$planesId=$_POST['planesId']?? '';
$codPais=$_POST['codPais']?? '';
$productId=$_POST['productId']?? '';
$phonePais=$_POST['phone']?? '';
$nombre=$_POST['name']??'';
$apellido=$_POST['last_name']??'';
$correo=$_POST['correo']??'';
$password=$_POST['password']??'';
$objData = new Database();
    $sth = $objData->prepare('UPDATE ibvirtuallicencias SET meses=:meses,precio=:precio,status=:status WHERE correo = :email and opcion="Pago" and status="Disabled"');
    $status="Enabled";
    $sth->bindParam(':meses', $_POST['mes-posicion']);
    $sth->bindParam(':precio', $_POST['valor-plan']);   
    $sth->bindParam(':email', $_POST['correo']);
    $sth->bindParam(':status', $status);
    $sth->execute();
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='javascript:history.back()';</script>";

?>