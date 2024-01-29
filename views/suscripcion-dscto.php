<?php

session_start();

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$name = $_POST['name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$country = $_POST['country'] ?? '';
$email = $_POST['email'] ?? '';
$Telefono   = $_POST['phone'] ?? '';
$posicion   = $_POST['position'] ?? '';
$password   = $_POST['password'] ?? '';

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ibvirtualrecluta@gmail.com';                     // SMTP username
    $mail->Password   = 'ibvirtual';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ibvirtualrecluta@gmail.com', 'IBvirtual');
    $mail->addAddress($email);     // Add a recipient



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CORREO DE CONFIRMACION';
    $mail->Body    = ' <b>Hola este esto es un correo de confirmacion</b> para loguearse su correo es: '.$email.' y su contraseña es: '.$password.',  confirmar su login aqui <a href="http://localhost/pruebas/online/assets/login.php">LOGIN IBJOBCOACH</a>';

    $mail->send();

    // creamos las variables de session para ingresar con esos datos
    $_SESSION["username"] = $email;
    $_SESSION["password"] = $password;

    echo '<script> alert("El mensaje se envió correctamente");window.history.go(-1);</script>';
}
catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}
