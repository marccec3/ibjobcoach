<?php include 'listar.php'; ?>
<?php

$idioma = "";

foreach($_POST['language'] as $lenguaje){
        $lenguajes = $lenguajes.$lenguaje.'|';
        if($lenguaje=='es'){
            $idioma = "Español,";
        }elseif($lenguaje=='en'){
            $idioma.= " Inglés,";
        }else{
            $idioma.= " Portugués.";
        } 
}

$email = $_POST['email'];

$archivo = $_FILES['file'];

$nombre_archivo = $archivo['name'];

$string = "";
$posible = "1234567890abcdefghijklmnopqrstuvwxyz";
$i = 0;
while($i < 2){
    $char = substr($posible, mt_rand(0, strlen($posible)-1),1);
    $string .= $char;
    $i++;
}

$archivo1="CV-".$string.".pdf";

$ruta="ArchivosCv/".$archivo1;

$tipo = $archivo['type'];



$mensaje = "Nuevo Cv."."<br>"
            ."Idiomas a traducir: ".$idioma."<br>"
            ."Reenviar a: ".$email;

$posicion_coincidencia = strpos($tipo,'pdf');

if($posicion_coincidencia === FALSE){
 echo "Carga un archivo en formato pdf.";
}else {
$sql = "SELECT idusuario FROM usuarios where correo = '$email' and status = 'Enabled'";
$query = $connect->prepare($sql);
$query->execute();
$data=$query->fetch(PDO::FETCH_OBJ);

if($query->rowCount() > 0){

$idUsuario = $data->idusuario;

$sql2 = "INSERT INTO traduccion_cv(id_usuario,mensaje,cv,estado,idioma_traduccion) VALUES ($idUsuario,'$mensaje1','$archivo1','Pendiente','$lenguajes');";
$query2 = $connect->prepare($sql2);
$query2->execute();

move_uploaded_file($archivo['tmp_name'], $ruta);

$to = 'alejandra.vargas@corporacionibgroup.pe';

//remitente del correo
$from = 'cm.outplacement.coaching@corpibgroup.com';
$fromName='TRADUCCIÓN CV';

//Asunto del email
$asunto="Traducción CV.";

//Ruta del archivo adjunto
$file = $ruta;

//Contenido del Email
$htmlContent = '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head><body><p>'.$mensaje.'</p></body>';

//Encabezado para información del remitente
$headers = "From: ".$fromName." <".$from.">";

//Limite Email
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparación de archivo
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($files[$i])."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
mail($to, $asunto, $message, $headers, $returnpath); 

//Estado de envío de correo electrónico
//echo $mail?"Recibirá su cv traducido a su correo.":"El envío de correo falló.";
echo "Recibirá su cv traducido a su correo.";
}else{
    echo "Te invitamos a que te suscribas en uno de nuestros planes para acceder a estos beneficios";
}
}
?>

