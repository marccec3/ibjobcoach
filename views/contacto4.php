<?php

//print_r($_POST);

require 'assets/admin/config/conexion.php';
$objData = new Database();
$sth = $objData->prepare('SELECT * FROM solicitudes WHERE email = :email');
$sth->bindParam(':email', $_POST['email']);
$sth->execute();
$result = $sth->fetchAll();
if($result){
    echo "El correo ingresado ya esta registrado, por favor digite uno nuevo.";
}else{
   
    //Insertamos los datos del usuario a dar de alta.
    $sth = $objData->prepare('INSERT INTO solicitudes '
            . 'VALUES (:id, :nombre, :apellido, :cargo, :email, :pais, :ciudad, :telefono, :trabajando, :servicios, :conoce, :mensaje)');
   $id='0';
    $status='Disabled';
    $sth->bindParam(':id', $id);
    $sth->bindParam(':nombre', $_POST['nombre']);
    $sth->bindParam(':apellido', $_POST['apellido']);
    $sth->bindParam(':cargo', $_POST['cargo']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':pais', $_POST['pais']);
    $sth->bindParam(':ciudad', $_POST['ciudad']);
    $sth->bindParam(':telefono', $_POST['telefono']);
    $sth->bindParam(':trabajando', $_POST['trabajando']);
    $sth->bindParam(':servicios', $_POST['servicios']);
    $sth->bindParam(':conoce', $_POST['conoce']);
    $sth->bindParam(':mensaje', $_POST['mensaje']);
    $sth->execute();

    $para = $_POST['email'];

    $asunto = "SOLICITUDES.";

    
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cargo = $_POST['cargo'];
	$email = $_POST['email'];
	$pais = $_POST['pais'];
	$ciudad = $_POST['ciudad'];
	$telefono = $_POST['telefono'];
	$trabajando = $_POST['trabajando'];
	$servicios = $_POST['servicios'];
	$conoce = $_POST['conoce'];
	$mensaje1 = $_POST['mensaje'];

    $mensaje="Nombre: $nombre \n".
             "Apellido: $apellido \n".
             "Cargo: $cargo \n".
             "Email: $pais \n".
             "Ciudad: $ciudad \n".
             "Telefono: $telefono \n".
             "Trabajondo ?: $trabajando \n".
             "Serviios: $servicios \n".
             "Rango salarial: $conoce \n".
             "Mensaje: $mensaje1";
    // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
    // Cabeceras adicionales
    $cabeceras .= 'From: Consulta realizadas desde IBOutPlacement <cm.outplacement.coaching@corpibgroup.com>' . "\r\n".
                  'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
    //Se hace el envío
    mail($para, $asunto, $mensaje, $cabeceras);
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='javascript:history.back()';</script>";

}
