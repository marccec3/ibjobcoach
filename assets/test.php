<?php include 'listar.php'; ?>
<?php

if(session_status()===PHP_SESSION_NONE){
    session_start();
}     
    if(!isset($_SESSION['usuario'])){
        header ('Location: login.php');
        session_destroy();
        //consulta usuario
    }
    $nombre_usuario1 = $_SESSION['usuario'];

    $sentencia = $connect->prepare("SELECT idusuario FROM usuarios where correo = ?");
    $sentencia->execute([$nombre_usuario1]);

    $persona = $sentencia->fetch(PDO::FETCH_OBJ);

    $idUsuario = $persona->idusuario;

    if($sentencia->rowCount()>0){

        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
$destino = "cm.outplacement.coaching@corpibgroup.com";
$ingles = $_POST["nivel_ingles"];
$idade = $_POST["idade"];
$expectativa_salarial = $_POST["expectativa-salarial"];
$posicao = $_POST["posicao"];
$mobilidade= $_POST["mobilidade"];
$experiencia_internacional = $_POST["experiencia-internacional"];
$formacao = $_POST["formacao"];
$permanencia = $_POST["permanencia"];
$network = $_POST["network"];
$contenido = "Nivel Ingles: " . $ingles . "\nEdad: " . $idade . "\nExpectativa salarial: " . $expectativa_salarial . "\ncarga solicitado: " . $posicao . "\nDisponibilidad de traslado a otros países: " . $mobilidade . "\nExperiencia internacional: " . $experiencia_internacional . "\nFormacion que cuanta hsata el momento: " . $formacao . "\nTiempo medio de permanencia en las empresa que laboro: " . $permanencia . "\nNivel Network: " . $network;
$mensaje = "datos enviados para un analisis de empleabilidad ";
    mail($destino, $mensaje, $contenido);
    //header("Location: https://ibvirtual2.iboutplacement.com/assets/");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar

    $sql1 = "INSERT INTO Analisis_Empleabilidad VALUES (DEFAULT,$idUsuario,'$ingles','$idade','$expectativa_salarial','$posicao','$mobilidade','$experiencia_internacional','$formacao','$permanencia','$network')";
    $sentencia2 = $connect->prepare($sql1);
    $resultado2 =$sentencia2->execute();

    echo "Sus datos fueron registrados.";
    }else{
        echo "Lo invitamos a que se suscriba para disfrutar de los beneficios.";
    }


?>