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

    $mail = new PHPMailer(true);

    $id = rand();
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;   
        $mail->Mailer="smtp";
        $mail->Helo = "http://ibjobcoach.com/";
        $mail->isSMTP();                          
        $mail->Host = 'smtp.gmail.com; smtp.live.com; smtp.office365.com; smtp.mail.yahoo.com; mail.corpibgroup.com;mail.ibjobcoach.com;';    
        $mail->SMTPAuth   = true;  
        $mail->CharSet = 'UTF-8';
        $mail->Username   = 'gestion@ibjobcoach.com';
        $mail->Password   = 'jobcoah7321';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
    
        $mail->setFrom('gestion@ibjobcoach.com', 'IbjobCoah');
        $mail->addAddress($email, $nombre.' '.$apellido);     
        $mail->addReplyTo('gestion@ibjobcoach.com', 'Informaci√≥n');

        $html = '

            <p>Agradecemos su inter®¶s. Se le hace entrega de un demo del Ebook °∞La Empleabilidad en tiempos de Crisis°±. Esta muestra cuenta con algunas secciones de acceso gratuito para nuestros lectores. Si desea saber m®¢s, nuestro Ebook est®¢ disponible por S/19.99 y puede adquirirlo a trav®¶s del siguiente enlace.</p><a href="http://ibjobcoach.com/ebook-premium.php">Ibook Premiun</a>
        ';
        
        $mail->isHTML(true);  
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Registro de Ibook Gratuito - '.$id.' - '.$tipo;
        $mail->Body    = $html;
        $archivo = 'ebookgratuito/introduccion_javascript.pdf';
        $mail->AddAttachment($archivo,$archivo);
        $mail->AltBody = '';
    
        $mail->send();

        echo 'Mensaje enviado';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
