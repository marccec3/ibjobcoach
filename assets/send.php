<?php
$company= $_POST['company'];
$position=$_POST['position'];
$search_duration=$_POST['search_duration'];
$salary=$_POST['salary'];
$through_genes=$_POST['through_genes'];
$recommend_dna=$_POST['recommend_dna'];
$recommend_genes=$_POST['recommend_genes'];
$message=$_POST['message'];

if ($company=='' || $position=='' || $search_duration=='' || $salary==''){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{
    require("../archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();
    
    $mail->From     = $company;
    $mail->AddAddress("cm.outplacement.coaching@corpibgroup.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Encontre_Trabajo";
    $mail->Body     =  "Compañia: $company \n<br />".    
    "Puesto : $position \n<br />". 
    "tiempo de busqueda: $search_duration \n<br />".
    "salario con el que cuenta: $salary \n<br />". 
    "Encontro trabajo con IBjobcoach?: $through_genes \n<br />".
    "Si recomendaria IBjobcoach a sus contactos?: $recommend_dna \n<br />". 
    "Si recomendaria IBOutPlacement a sus contactos?:$recommend_genes \n<br />".     
    "comentario: $message \n<br />";

    // Datos del servidor SMTP
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>