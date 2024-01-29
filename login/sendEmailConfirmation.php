<?php include '../assets/listar.php'; ?>
<?php 
$string = "";
$posible = "1234567890abcdefghijklmnopqrstuvwxyz_";
$i = 0;
while($i < 20){
    $char = substr($posible, mt_rand(0, strlen($posible)-1),1);
    $string .= $char;
    $i++;
}

$email = $_POST['email'];

    $asunto = "Link de activación de Usuario en el Sistema.";
    $titulo = utf8_decode($asunto);
    $cabe1 = "CORPORACIÓN IBGROUP";
    $cabe = utf8_decode($cabe1);

    $mensaje = "Gracias por crear sus usuario en Nuestro Sistema, para poder acceder, debe activar su "
            . "usuario haciendo clic en el siguiente enlace:"."\n"
           ."http://ibjobcoach.com/link_activation.php?link=$string"."\n"
            . "usted se ha registrado con : "." ".$email;


$sql3 = "SELECT correo FROM ibvirtuallicencias where correo = '$email' and status = 'Enabled'";
$query3 = $connect->prepare($sql3);
$query3->execute();

if($query3->rowCount() > 0){
    echo "<script>alert('Usted actualmente ya cuenta con el servicio activo');location.href ='http://ibjobcoach.com/assets/login.php';</script>"; //CAMBIAR LINK 

}else{

$sql = "SELECT correo FROM ibvirtuallicencias where correo = '$email' and status = 'Disabled'";
$query = $connect->prepare($sql);
$query->execute();

if($query->rowCount() > 0){

    $sql1 = "SELECT TIMEDIFF(CURRENT_TIMESTAMP,fechainscripcion) as dias,correo FROM ibvirtuallicencias WHERE correo = '$email'";
    $query1 = $connect->prepare($sql1);
    $query1->execute();
    $data=$query1->fetch(PDO::FETCH_OBJ);
    $fecha = $data->dias;

if($fecha < 5){

    $sql2 = "UPDATE ibvirtuallicencias SET codigo='$string' WHERE correo='$email'";
    $query2 = $connect->prepare($sql2);
    $query2->execute();

    $cabeceras .= 'From: '.$cabe.' <cm.outplacement.coaching@corpibgroup.com>' . "\r\n".
                  'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

    mail($email,$titulo,$mensaje,$cabeceras);
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
}else{
    echo "<script>alert('Su periodo de prueba culmino. Lo invitamos a que se suscriba para disfrutar de los beneficios.');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
}
}else{
    echo "<script>alert('Registrese para la prueba gratis');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
}
}
?>