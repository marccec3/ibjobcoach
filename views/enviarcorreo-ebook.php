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
    $tipo = trim($_POST["tipo"]);
    $carnet = trim($_POST["carnet"]);
    $pais = $_POST["pais"];
    $departamento = $_POST["departamento"];
    $provincia = trim($_POST["provincia"]);
    $distrito = trim($_POST["distrito"]);
    $direccion = trim($_POST["direccion"]);
    $email = trim($_POST["email"]);
    $file = $_FILES["file"];
    $ebook = $_POST["ebook"];

    $id = rand();

    //Guardar Vaucher
    
    $name = $_FILES["file"]["name"];
    $ruta = "vaucheribook/".$name;

    $ext = explode(".",$name);

    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 1;              
        $mail->isSMTP();                          
        $mail->Host       = 'mail.corpibgroup.com';       
        $mail->SMTPAuth   = true;     
        $mail->Username   = 'cm.outplacement.coaching@corpibgroup.com';
        $mail->Password   = 'jobcoah7321';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
    
        $mail->setFrom('cm.outplacement.coaching@corpibgroup.com', 'IbjobCoah');
        $mail->addAddress('cm.outplacement.coaching@corpibgroup.com', 'IbjobCoah');     
        $mail->addReplyTo('cm.outplacement.coaching@corpibgroup.com', 'Información');
    
        move_uploaded_file($_FILES["file"]["tmp_name"], "vaucheribook/".$_FILES["file"]["name"]);

        rename("vaucheribook/".$_FILES["file"]["name"],"vaucheribook/".$nombre."-".$id.".".end( $ext ));

        $html = '

            <ul>
                <li>Nombre y Apellido: '.$nombre.' '.$apellido.'</li>
                <li>Tipo: '.$tipo.'</li>
                <li>Carnet: '.$carnet.'</li>
                <li>Pais: '.$pais.'</li>
                <li>Departamento: '.$departamento.'</li>
                <li>Provincia: '.$provincia.'</li>
                <li>Distrito: '.$distrito.'</li>
                <li>Dirección: '.$direccion.'</li>
                <li>Ebook: '.$ebook.'</li>
                <li>Email: '.$email.'</li>
            </ul>
            <img src="cid:imagen" height="600px" width="450px">
        ';
        
        $mail->isHTML(true);                                 
        $mail->Subject = 'EMITIR BOLETA A '.$nombre.' '.$apellido;
        $mail->AddEmbeddedImage("vaucheribook/".$nombre."-".$id.".".end( $ext ), 'imagen');
        $mail->Body    = $html;
        $mail->AltBody = '';
    
        $mail->send();

        echo 'Mensaje enviado';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
