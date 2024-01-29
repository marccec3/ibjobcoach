<?php
session_start();
$_isPost = false;
$_isRespuesta = false;
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';

//Información personal
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$id=$_SESSION['idlicencia'];

//lo que agregue
$password_confirmation = $_POST['password_confirmation'];
$ruta = $_POST['ruta'];
$document = $_POST['document'];
$linkedin = $_POST['linkedin'];


//localizacion
$birth_country_id = $_POST['birth_country_id'];
$current_country_id = $_POST['current_country_id'];

foreach($_POST['user_countries'] as $user_countries1){
    $user_countries = $user_countries.$user_countries1.'|';
}

//Educación
$education = $_POST['education'];
$institution = $_POST['institution'];
$language_en = $_POST['language_en']; 
$language_es = $_POST['language_es'];
$language_pt = $_POST['language_pt'];

//Informaciones profesionales
$experience = $_POST['experience'];
$working = $_POST['working'];
$out_of_work = $_POST['out_of_work'];
$last_company = $_POST['last_company']; 
$min_income = $_POST['min_income']; 
$last_position = $_POST['last_position'];
$target_positions = $_POST['target_positions'];

foreach($_POST['user_areas'] as $user_areas1){
    $user_areas = $user_areas.trim($user_areas1).'|';
}

foreach($_POST['user_target_areas'] as $user_target_areas1){
    $user_target_areas = $user_target_areas.trim($user_target_areas1).'|';
}

foreach($_POST['user_markets'] as $user_markets1){
    $user_markets = $user_markets.trim($user_markets1).'|';
}

foreach($_POST['user_target_markets'] as $user_target_markets1){
    $user_target_markets = $user_target_markets.trim($user_target_markets1).'|';
}

//Referencias Profesionales
$name_0 = $_POST['name_0'];
$email_0 = $_POST['email_0'];
$phone_0 = $_POST['phone_0'];
$company_0=$_POST['company_0'];
$position_0 =$_POST['position_0'];
$resumen_perfil = $_POST['resumen_perfil'];
$archivo = $_FILES['archivo'];
$filename = $archivo['name'];
$tipo = $archivo['type'];
 
if(!($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "")){
    //echo "<script>swal('Suba un archivo de imagen.')</script>";
    echo "error1";
}else{

if($password == $password_confirmation){

$sentencia = $connect->prepare("UPDATE ibvirtuallicencias SET nombrecliente=?,apellidocliente=?,telefono=?,pais=?,clave=? WHERE idlicencia=?");
$resultado = $sentencia->execute([$nombres, $apellidos, $phone, $current_country_id,$password, $id]);

$sentencia1 = $connect->prepare("SELECT correo FROM ibvirtuallicencias WHERE  idlicencia=?");
$sentencia1->execute([$id]);
$resultado1=$sentencia1->fetch(PDO::FETCH_OBJ);

$sentencia2 = $connect->prepare("SELECT correo FROM usuarios WHERE  correo=?");
$sentencia2->execute([$resultado1->correo]);

if($sentencia2->rowCount()>0){
$sentencia3 = $connect->prepare("UPDATE usuarios SET nombre=?,apellido=?,telefono=?,pais=?,password=? WHERE correo=?");
$sentencia3->execute([$nombres, $apellidos, $phone, $current_country_id,$password, $resultado1->correo]);
}


$consulta = $connect->prepare("SELECT idlicencia,avatar from cliente WHERE idlicencia=?");
$consulta->execute([$id]);
$resultadoConsulta = $consulta->fetch(PDO::FETCH_OBJ);

//* Sección para guardar la foto */
//Como el elemento es un array utilizamos foreach para extraer todos los valores
    //Validamos que el archivo exista

    if(empty($filename)){
        $avatar=$ruta;
    }else{
    $source = $archivo['tmp_name']; //Declaramos una variable y guardamos el nombre temporal del archivo
            //$foldername=Date("G.i.s..dFY"); // esto imprimirá 15.20.38..14September2020"
            // creamos una variable donde guardaremos el nombre de la carpeta que vamos a crear 
            //en este caso la carpeta tendrá la fecha actual Ejemplo= 14September2020.
    $foldername="image/users";  
            //Declaramos una variable con la ruta donde guardaremos los archivos
    $directory = $foldername.'/';
            //Validamos si la ruta de destino existe, si no la creamos
            if(!file_exists($directory)){
                //el 0777 es para darle permisos de lo contrario muestre mensaje no se creó
                mkdir($directory, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }
            //creamos una variable y guardamos la extension del archivo original
            $extension=pathinfo($filename,PATHINFO_EXTENSION);
            //Abrimos el directorio de destino
            $dir=opendir($directory);
            //Guardamos la ruta de destino, nombre del archivo y extension de esta manera:
            // los archivos se guardarán con la hora minutos y segundos del momento de cargue
            //Ejemplo: 16September2020/17.44.51.jpg
            $string = "";
            $posible = "1234567890abcdefghijklmnopqrstuvwxyz";
            $i = 0;
            while($i < 2){
                $char = substr($posible, mt_rand(0, strlen($posible)-1),1);
                $string .= $char;
                $i++;
            }
            if(!(empty($resultadoConsulta->avatar))){
                unlink($resultadoConsulta->avatar);
            }
                $avatar = $directory.'User'.$string."_".$id.".".$extension;
 
            //Validamos que el archivo se haya cargado correctamente
            //$source es el origen
            //$avatar es el destino
            move_uploaded_file($archivo['tmp_name'], $avatar);
            closedir($dir); //Cerramos el directorio de destino
    }

   
    
    if($consulta->rowCount() == 0){
        $sentencia6 = $connect->prepare("INSERT INTO cliente( idlicencia, password_confirmation, avatar, document, linkedin, birth_country_id, current_country_id, user_countries, education, institution, language_en, language_es, language_pt, experience, working, out_of_work, last_company, min_income, last_position, target_positions, user_areas, user_target_areas, user_markets, user_target_markets, name_0, email_0, phone_0, company_0, position_0,resumen_perfil) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
        $resultadoConsulta1 = $sentencia6->execute([$id, $password_confirmation, $avatar, $document, $linkedin, $birth_country_id, $current_country_id, $user_countries, $education, $institution, $language_en, $language_es, $language_pt, $experience, $working, $out_of_work, $last_company, $min_income, $last_position, $target_positions, $user_areas, $user_target_areas, $user_markets, $user_target_markets, $name_0, $email_0, $phone_0, $company_0, $position_0, $resumen_perfil]);
        if($resultadoConsulta1 === TRUE){
                echo "<script> var nom_imagen='".$avatar."';</script>";         
        }
    }else{
        $sentencia7 = $connect->prepare("UPDATE cliente SET password_confirmation =?, avatar =?, document =?, linkedin =?, birth_country_id =?, current_country_id =?, user_countries =?, education =?, institution =?, language_en =?, language_es =?, language_pt =?, experience =?, working =?, out_of_work =?, last_company =?, min_income =?, last_position =?, target_positions =?, user_areas =?, user_target_areas =?, user_markets =?, user_target_markets =?, name_0 =?, email_0 =?, phone_0 =?, company_0 =?, position_0 =?, resumen_perfil=? WHERE  idlicencia=?");
        $resultado7 = $sentencia7->execute([$password_confirmation, $avatar, $document, $linkedin, $birth_country_id, $current_country_id, $user_countries, $education, $institution, $language_en, $language_es, $language_pt, $experience, $working, $out_of_work, $last_company, $min_income, $last_position, $target_positions, $user_areas, $user_target_areas, $user_markets, $user_target_markets, $name_0, $email_0, $phone_0, $company_0, $position_0, $resumen_perfil, $id]);
        if($resultado7 === TRUE)
        {
                echo "<script> var nom_imagen='".$avatar."';</script>";
        }
    }
}else{
    echo "error2";
}
}

