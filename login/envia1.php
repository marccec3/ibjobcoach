<?php 
$email = $_POST['hola'];

$to = $email+"";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: jhobyllstephany.2012@gmail.com" . "\r\n" . "CC: ".$email."";

if(mail($to, $subject, $message, $headers)){
    echo "<script>alert('Se enviará un link a ".$email." para que modifique su contraseña, verifique su correo para acceder.');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
}else{
    echo "<script>alert('error');</script>";
}
?>