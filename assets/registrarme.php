<?php
require 'assets/admin/config/conexion.php';
$objData = new Database();
$sth = $objData->prepare("SELECT * FROM ibvirtuallicencias WHERE correo = :email and opcion='Gratis' and status='Enabled'");
$sth->bindParam(':email', $_POST['email']);
$sth->execute();
$result = $sth->fetchAll();
if($result){
    echo "El correo ingresado ya esta registrado, por favor digite uno nuevo.";
}else{
    //Generamos un codigo de activaci贸n
    $string = "";
    $posible = "1234567890abcdefghijklmnopqrstuvwxyz_";
    $i = 0;
    while($i < 20){
        $char = substr($posible, mt_rand(0, strlen($posible)-1),1);
        $string .= $char;
        $i++;
    }
    //Insertamos los datos del usuario a dar de alta.
    $sth = $objData->prepare('INSERT INTO ibvirtuallicencias(idlicencia,nombrecliente,apellidocliente,pais,telefono,cargo,correo,clave,codigo,opcion,status)'
            . 'VALUES (:id,:name, :last_name, :country, :phone, :position, :email, :password, :codigo, :opcion, :status)');
   $id='0';
    $status='Disabled';
    $opcion='Gratis';
    $sth->bindParam(':id', $id);
    $sth->bindParam(':name', $_POST['name']);
    $sth->bindParam(':last_name', $_POST['last_name']);
    $sth->bindParam(':country', $_POST['country']);
    $sth->bindParam(':phone', $_POST['phone']);
    $sth->bindParam(':position', $_POST['position']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':password', $_POST['password']);
    $sth->bindParam(':codigo', $string);
    $sth->bindParam(':opcion', $opcion);
    $sth->bindParam(':status', $status);

    $sth->execute();

    $para = $_POST['email'];

    $asunto = "Link de activaci贸n de Usuario en el Sistema.";

    $mensaje = "Gracias por crear sus usuario en Nuestro Sistema, para poder acceder, debe activar su "
            . "usuario haciendo clic en el siguiente enlace:"."\n"
           . "https://ibvirtual2.iboutplacement.com/link_activation.php?link=$string"."\n"
           // . "http://localhost/pruebas/online/link_activation.php?link=$string"."\n"
            . "usted se ha registrado con : "." ".$para;


    // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
    // Cabeceras adicionales
    $cabeceras .= 'From: el mundo de la programacion <alumnsistemas@gmail.com>' . "\r\n".
                  'Reply-To: alumnsistemas@gmail.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
    //Se hace el env铆o
    mail($para, $asunto, $mensaje, $cabeceras);
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='javascript:history.back()';</script>";

}
?>