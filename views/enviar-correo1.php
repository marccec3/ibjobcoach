<?php
require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

 $name = $_POST['name'] ?? '';
 $last_name = $_POST['last_name'] ?? '';
 $country = $_POST['country'] ?? '';
 $email = $_POST['email'] ?? '';
 $type = $_POST['type'] ?? '';
 $fonoplus = $_POST['fonoplus'] ?? '';
 $nompais = $_POST['nomPais'] ?? '';
// var_dump($type);
// exit;
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
    $mail->Password   = 'ibvirtual';
    //$mail->Username   = 'alumnsistemas@gmail.com';                     // SMTP username
    //$mail->Password   = '01100110Gm';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
   
    $mail->setFrom('ibvirtualrecluta@gmail.com', 'IB-Virtual');
    //$mail->setFrom('alumnsistemas@gmail.com', 'IB-Virtual');
    $mail->addAddress($email);     // Add a recipient

    if ($type == "registro"){
        $subject = "Correo de Confirmación";
        $body    = ' <b>Hola este esto es un correo de confirmacion</b> para loguearse su correo es: '.$email.' y su contraseña es: '.$password.',  confirmar su login aqui <a href="http://ibvirtual2.iboutplacement.com/assets/login.php">LOGIN IBJobcoach</a>';

    } 

    // CONSULTA DE SESIONES
    if ($type == 2){
        $subject = " Consulta sobre IBJobcoach + 2 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }
    if ($type == 3){
        $subject = " Consulta sobre IBJobcoach + 3 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }
    if ($type == 5){
        $subject = " Consulta sobre IBJobcoach + 5 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }

    // CONSULTA DE WEBINARS
    if ($type == "webinar2"){
        $subject = " Consulta sobre IBJobcoach + 2 Webinars";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }
    if ($type == "webinar3"){
        $subject = " Consulta sobre IBJobcoach + 3 Webinars";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }
    if ($type == "webinar5"){
        $subject = " Consulta sobre IBJobcoach + 5 Webinars";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "<br>" . 
        "Aquí estan los detalles:"."<br>".
        "Nombre: ".$name."<br>".
        "Email: ".$email."<br>".
        "Telefono: ".$fonoplus."<br>".
        "Pais: ".$nompais;
    }


  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo '<script> alert("Mail enviado Exitosamente!!!");
    window.history.go(-1);
     </script>';
} 
catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}

?>