<?php
session_start();
 $name = $_POST['nombre'] ?? '';
 $last_name = $_POST['apellido'] ?? '';
 $email = $_POST['email'] ?? '';
 $telefono = $_POST['telefono'] ?? '';
 $country = $_POST['pais'] ?? '';
 $cargo = $_POST['cargo'] ?? '';
 
 $dato="IBVitual contacto de empresas";
if ($name=='' || $email=='' || $telefono=='' || $country=='' || $cargo==''){
echo "<script>alert('Necesita llenar todos los datos');location.href ='javascript:history.back()';</script>";
}else{
    
    $para = 'cm.outplacement.coaching@corpibgroup.com';

    $asunto = "QUIERO MI EBOOK.";

    $mensaje = "LA SOLICITUS FUE REALIZADA DE IBJOBCOACH [QUIERO MI EBOOK]"."\n".
                "Aquí estan los detalles:"."\n".
                "Nombre: ".$name. " ".$last_name."\n".
                "Email: ".$email."\n".
                "Telefono: ".$telefono."\n".
                "Cargo: ".$cargo."\n".
                "Pais: ".$country;


    // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
    // Cabeceras adicionales
     $cabeceras .= 'From: Encuentra trabajo mas rapido ¡Quiero mi Ebook! <cm.outplacement.coaching@corpibgroup.com>' . "\r\n".
   
    //$cabeceras .= 'From: Encuentra trabajo mas rapido <cm.outplacement.coaching@corpibgroup.com>' . "\r\n".
                  'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
    //Se hace el env铆o
    mail($para, $asunto, $mensaje, $cabeceras);
    echo "<script>alert('Formulario enviado exitosamente, verifique su correo para acceder.');location.href ='javascript:history.back()';</script>";

}

?> 