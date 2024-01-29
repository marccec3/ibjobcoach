<?php
print_r($_POST);
require 'assets/admin/config/conexion.php';
$objData = new Database();
$sth = $objData->prepare('SELECT max(idlicencias) as idlicencias FROM ibvirtuallicencias WHERE correo =:correo');
$sth->bindParam(':correo', $_POST['correo']);
$sth->execute();
$result = $sth->fetchAll();
    $sth = $objData->prepare('INSERT INTO ibvirtuallicencias(idlicencia,descripcion,opcion,meses,precio, nombrecliente, apellidocliente, correo, clave, telefono, cupon)'
            . 'VALUES (:idlicencia,:descripcion,:opcion, :meses, :precio, :nombrecliente, :apellidocliente, :correo, :clave, :telefono, :cupon)');
   $id='0';
   $descripcion="pago";
    $sth->bindParam(':idlicencia', $id);
    $sth->bindParam(':descripcion', $descripcion);    
    $sth->bindParam(':opcion', $_POST['cargos']);
    $sth->bindParam(':meses', $_POST['mescargo']);
    $sth->bindParam(':precio', $_POST['valorcargo']);
    $sth->bindParam(':nombrecliente', $_POST['name']);
    $sth->bindParam(':apellidocliente', $_POST['last_name']);
    $sth->bindParam(':correo', $_POST['correo']);
    $sth->bindParam(':clave', $_POST['password']);
    $sth->bindParam(':telefono', $_POST['phone']);
    $sth->bindParam(':cupon', $_POST['cupon']);
    $sth->execute();
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='javascript:history.back()';</script>";
?>