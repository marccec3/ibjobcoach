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
$sth = $objData->prepare("SELECT * FROM ibvirtuallicencias WHERE correo = :email and opcion='Pago' and status='Enabled'");
$sth->bindParam(':email', $correo);
$sth->execute();
$result = $sth->fetchAll();
if($result){
    echo "<script>alert('ya exite el usuario');location.href ='javascript:history.back()';</script>";

}else{
    
    $sth = $objData->prepare('INSERT INTO ibvirtuallicencias (idlicencia,descripcion,cargo,meses,precio,nombrecliente,apellidocliente,correo,clave,pais,telefono,cupon,opcion,status)'
    . 'VALUES (:idlicencia, :descripcion, :cargo, :meses, :precio, :nombrecliente, :apellidocliente, :correo, :clave, :pais, :telefono, :cupon, :opcion, :status)');
    $id='0';
    $descripcion="pago";
    $opcion="Pago";
    $status="Enabled";
    $sth->bindParam(':idlicencia', $id);
    $sth->bindParam(':descripcion', $descripcion);    
    $sth->bindParam(':cargo', $select_posicion);
    $sth->bindParam(':meses', $mes_opcion);
    $sth->bindParam(':precio', $valor_plan);
    $sth->bindParam(':nombrecliente', $nombre);
    $sth->bindParam(':apellidocliente', $apellido);
    $sth->bindParam(':correo', $correo);
    $sth->bindParam(':clave', $password);
    $sth->bindParam(':pais', $codPais);
    $sth->bindParam(':telefono', $phonePais);
    $sth->bindParam(':cupon', $dscto_plan);
    $sth->bindParam(':opcion', $opcion);
    $sth->bindParam(':status', $status);
    if($sth->execute()){
    header('location: paypal/index.php');
    }
}
?>


