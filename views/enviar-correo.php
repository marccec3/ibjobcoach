<?php
session_start();
require_once 'assets/admin/config/conexion.php';
 $name = $_POST['name'] ?? '';
 $last_name = $_POST['last_name'] ?? '';
 $country = $_POST['country'] ?? '';
 $email = $_POST['email'] ?? '';
 $type = $_POST['type'] ?? '';
 $fonoplus = $_POST['fonoplus'] ?? '';
 $nompais = $_POST['nomPais'] ?? '';
 $password   = $_POST['password'] ?? '';
 // var_dump($type);
// exit;

$con=new Database();
    

    // CONSULTA DE SESIONES
    if ($type == 2){
        $subject = " Consulta sobre IBJobcoach + 2 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "\n" . 
        "Aquí estan los detalles:"."\n".
        "Nombre: ".$name."\n".
        "Email: ".$email."\n".
        "Telefono: ".$fonoplus."\n".
        "Pais: ".$nompais;
    }
    if ($type == 3){
        $subject = " Consulta sobre IBJobcoach + 3 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "\n" . 
        "Aquí estan los detalles:"."\n".
        "Nombre: ".$name."\n".
        "Email: ".$email."\n".
        "Telefono: ".$fonoplus."\n".
        "Pais: ".$nompais;
    }
    if ($type == 5){
        $subject = " Consulta sobre IBJobcoach + 5 SESIONES";
        $body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web." . "\n" . 
        "Aquí estan los detalles:"."\n".
        "Nombre: ".$name."\n".
        "Email: ".$email. "\n".
        "Telefono: ".$fonoplus."\n".
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
 $inserta= $con->prepare('INSERT INTO ibvirtualplus'
    .'VALUES(:id, :descipcion, :name, :email, :fonoplus, :propuesta)');
    $id='0';
    $inserta->bindParam(':id', $id);
    $inserta->bindParam(':descripcion', $subject);
    $inserta->bindParam(':name', $name);
    $inserta->bindParam(':email', $email);
    $inserta->bindParam(':fonoplus', $fonoplus);
    $inserta->bindParam(':propuesta',$type);
     $inserta->execute();

    $para="cm.outplacement.coaching@corpibgroup.com";

     $cabeceras .= 'From: Solicitud realizadas desde IBJobcoach Plus <jhobyll.2012@gmail.com>' . "\r\n".
                  'Reply-To: jhobyll.2012@gmail.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
mail($para,$subject,$body,$cabeceras);
    echo '<script> alert("Mail enviado Exitosamente!!!");
    window.history.go(-1);
     </script>';


?>