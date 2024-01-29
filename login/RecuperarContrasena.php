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

$sql = "SELECT correo FROM usuarios where correo = '$email' and status = 'Enabled'";
$query = $connect->prepare($sql);
$query->execute();

$asunto = "Recuperar contraseña de Usuario";
$titulo = utf8_decode($asunto);
$cabe1 = "RECUPERAR CONTRASEÑA";
$cabe = utf8_decode($cabe1);

$mensaje = "Es un placer saludarte. Se solicito un reestablecimiento de contraseña "
        . "para tu cuenta ".$email."\n"
        ."Haz click en el enlace que aparece a continuación para cambiar su contraseña: "
       . "http://ibjobcoach.com/login/Recupera.php?link=$string"."\n";

if($query->rowCount() > 0){

    $sql1 = "UPDATE usuarios SET token='$string' WHERE correo='$email'";
    $query1 = $connect->prepare($sql1);
    $query1->execute();


    /*$cabeceras .= 'From: '.$cabe.' <jhobyllstephany.2012@gmail.com>' . "\r\n".
                  'Reply-To: jhobyllstephany.2012@gmail.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
    if(mail($email,$titulo,$mensaje,$cabeceras)){
        echo "<script>alert('Se enviará un link a ".$email." para que modifique su contraseña, verifique su correo para acceder.');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
    }else{
        echo "<script>alert('error');</script>";
    }*/

$to = $email+"";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: cm.outplacement.coaching@corpibgroup.com" . "\r\n" . "CC: ".$email."";
 


if(mail($to, $subject, $message, $headers)){
    echo "<script>alert('Se enviará un link a ".$email." para que modifique su contraseña, verifique su correo para acceder.');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
}else{
    echo "<script>alert('error');</script>";
}

}else{
    echo "<script>alert('Su correo no está registrado o actualmente se encuentra desabilitado');location.href ='javascript:history.back()';</script>";
}
?>
