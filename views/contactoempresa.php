<?php
/*
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("Phpmailer/PHPMailer.php");
include("Phpmailer/SMTP.php");
include("Phpmailer/Exception.php");
*/


//obteniendo datos del formulario
 $name = $_POST['name'] ?? '';
 $email = $_POST['email'] ?? '';
 $telefono = $_POST['telefono'] ?? '';
 $pais = $_POST['pais'] ?? '';
 $cargo = $_POST['cargo'] ?? '';
 $empresa   = $_POST['empresa'] ?? '';


  $enviado = 'Enviado: ' . date("Y-m-d H:i:s") . "\n";
  $subject = "Contacto de IBjobcoach Formulario Empresas ";
  $message =  "Empresa : $empresa \n".
              "Email : $email \n".
              "Pais : $pais \n".
              "Telefono : $telefono \n".
              "Nombre y Apellido : $name \n".
              "Cargo : $cargo \n".
              "Fecha : $enviado \n";
    
  //creando una instancia de PHPMailer
  //$mail = new  PHPMailer\PHPMailer\PHPMailer();
       
   /* $mail = new PHPMailer(true);*/

        
  //Indicando el uso de SMTP
  /* $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth= true;
  $mail->Username="masterps3098@gmail.com";//correo empresa
  $mail->Password="sttalymaster3025";//contraseña de correo
  $mail->setFrom('masterps3098@gmail.com','leo asencio');//correo empresa y nombre empresa
  $mail->addAddress($email);//correo destinatario
  $mail->Subject=$subject.$enviado;
  $mail->MsgHTML($message);
  //Enviando mensaje y controlandon los errores
  //$mail->send();*/

  $para="alejandra.vargas@corporacionibgroup.pe";

  $cabeceras .= 'From: CORPORACIÓN IBGROUP <cm.outplacement.coaching@corpibgroup.com>' . "\r\n".
                  'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
  mail($para,$subject,$message,$cabeceras);
    echo "SOLICITUD ENVIADA ";
 

          

    /*
    if(!$mail->send()){
   echo"erroneo";
    }else{
    echo"exito";
    }*/
?>