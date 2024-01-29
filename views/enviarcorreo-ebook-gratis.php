<?php
require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $apellido = ($_POST["apellido"]);
    $cargo = trim($_POST["cargo"]);
    $email = trim($_POST["email"]);
    $tipo = $_POST["tipo"];
    $pais = $_POST["country"];
    $phone = trim($_POST["phone"]);

    $id = rand();

    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;              
        $mail->isSMTP();                          
        $mail->Host       = 'mail.ibjobcoach.com';       
        $mail->SMTPAuth   = true;     
        $mail->Username   = 'gestion@ibjobcoach.com';
        $mail->Password   = 'jobcoah7321';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
    
        $mail->setFrom('gestion@ibjobcoach.com', 'IbjobCoah');
        $mail->addAddress('gestion@ibjobcoach.com', 'IbjobCoah');     
        $mail->addReplyTo('gestion@ibjobcoach.com', 'Información');

        $html = '

            <ul>
                <li>Nombre y Apellido: '.$nombre.' '.$apellido.'</li>
                <li>Cargo: '.$cargo.'</li>
                <li>Email: '.$email.'</li>
                <li>Ebook Seleccionado: '.$tipo.'</li>
                <li>Pais: '.$pais.'</li>
                <li>Telefono: '.$phone.'</li>
            </ul>
        ';
        
        $mail->isHTML(true);  
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Registro de Ibook Gratuito - '.$nombre.' '.$apellido;
        $mail->Body    = $html;
        $mail->AltBody = '';
    
        $mail->send();

        echo 'Mensaje enviado';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
