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
    $carnet = trim($_POST["carnet"]);
    $pais = $_POST["pais"];
    $departamento = $_POST["departamento"];
    $provincia = trim($_POST["provincia"]);
    $distrito = trim($_POST["distrito"]);
    $email = trim($_POST["email"]);
    $file = $_FILES["file"];

    $mail = new PHPMailer(true);

    $id = rand();
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;     
        $mail->Mailer="smtp";
        $mail->Helo = "http://ibjobcoach.com/";                       
        $mail->Host       = 'smtp.gmail.com; smtp.live.com; smtp.office365.com; smtp.mail.yahoo.com;mail.corpibgroup.com;';       
        $mail->SMTPAuth   = true;   
        $mail->CharSet = 'UTF-8';
        $mail->Username   = 'cm.outplacement.coaching@corpibgroup.com';
        $mail->Password   = 'outplacement2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
    
        $mail->setFrom('cm.outplacement.coaching@corpibgroup.com', 'IbjobCoah');
        $mail->addAddress($email, $nombre.' '.$apellido);     
        $mail->addReplyTo('cm.outplacement.coaching@corpibgroup.com', 'Informaci車n');
        
        $mail->isHTML(true); 
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Compra de Ibook - '.$id.' - '.$tipo;
        $mail->Body    = '
            <h4>Su registro fue enviado correctamente.</h4>
            <p>Despues de verificar la información que nos brindo Le enviaremos un correo de confirmación en el transcurso de 3 días hábiles, donde se le enviará el Ebook. Si tiene inconvenientes con la recepción del Ebook comunicarse a este número (511) 748 5112 o responder a este correo.</p>
        ';
        $mail->AltBody = '';
    
        $mail->send();

        echo 'Mensaje enviado';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
