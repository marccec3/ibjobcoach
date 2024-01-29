<?php
$correo="taly2598@gmail.com";
$asunto="VOUCHER DE PAGO";

function form_mail($sPara, $sAsunto, $sTexto, $sDe)
{
    $bHayFicheros = 0;
    $sCabeceraTexto = "";
    $sAdjuntos = "";
     $sTexto1 = "";
     $sTexto .= "LOS DATOS DEL ALUMNO SON:\n";

    if ($sDe)$sCabeceras = "From:".$sDe."\n";
    else $sCabeceras = "";
    $sCabeceras .= "MIME-version: 1.0\n";

    foreach ($_POST as $sNombre => $sValor){
    $sTexto1 = $sTexto1."\n".$sNombre." = ".$sValor; }
    $sTexto .= $sTexto1;


    foreach($_FILES["archivo1"]['tmp_name'] as $key => $tmp_name)
    {  
        $filename = $_FILES["archivo1"]["name"][$key]; //Obtenemos el nombre original del archivo
        $source = $_FILES["archivo1"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
        $tipo1 = $_FILES["archivo1"]["type"][$key];
        $size1 = $_FILES["archivo1"]["size"][$key];
            
        
                if ($bHayFicheros == 0){
                    $bHayFicheros = 1;
                    $sCabeceras .= "Content-type: multipart/mixed;";
                    $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

                    $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
                    $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
                    $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

                    $sTexto = $sCabeceraTexto.$sTexto;
                }
                if ($size1 > 0){
                    $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
                    $sAdjuntos .= "Content-type: ".$tipo1.";name=\"".$filename."\"\n";;
                    $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
                    $sAdjuntos .= "Content-disposition: attachment;filename=\"".$filename."\"\n\n";

                    $oFichero = fopen($source, 'r');
                    $sContenido = fread($oFichero, filesize($source));
                    $sAdjuntos .= chunk_split(base64_encode($sContenido));
                    fclose($oFichero);
                }
        

    }
    foreach($_FILES["archivo1"]['tmp_name'] as $key => $tmp_name){
        $filename2 = $_FILES["archivo1"]["name"][$key];
        $tipo2 = $_FILES["archivo1"]["type"][$key];
        if(empty($filename2)){
            echo "<script>
                alert('Cargue una imagen.');
                window.location = '../inicio';
                </script>";
        }else{
            if(!($tipo2 == "image/jpg" || $tipo2 == "image/jpeg" || $tipo2 == "image/png" )){
                echo "<script>
                alert('Cargar en formato png,jpeg o jpg.');
                window.location = '../inicio';
                </script>";
            }else {
                if ($bHayFicheros)
                $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
                return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
            }

        }

    }
    
}

//cambiar aqui el email
if (form_mail("taly2598@gmail.com", $asunto,
                "Los datos introducidos en el formulario son:\n\n", $correo)){
                echo '<script>
                alert ("El usuario ha sido editado correctamente");
                window.location = "../inicio";
                </script>';
                }else {echo "<script>
                alert('error al enviar :(');
                window.location = '../inicio';
                </script>";
                }

?>