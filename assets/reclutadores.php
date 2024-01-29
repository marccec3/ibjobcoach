<?php
session_start();
$_isPost = false;
$_isRespuesta = false;
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';
$id=$_SESSION['idlicencia'];
$rc = $_POST['rc'];
$tip = $_POST['tip'];

$sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias WHERE idlicencia=?");
$resultadoreclu =$sentencia->execute([$id]);
$resultadoreclu = $sentencia->fetch(PDO::FETCH_OBJ);
$cadenar = $resultadoreclu  ->reclutadores;

if($tip == "addr"){
    if($cadenar == 0){
        $cadenar = $rc;
    }else{
        $cadenar = $cadenar.'|'.$rc; 
    }
}
else if($tip == 'remover'){
        $array = $resultadoreclu ->reclutadores;
        $numerosr = explode('|',$array);
        $nuevor="";
        foreach ($numerosr as $numr) {
            if($numr != $rc){
                if($nuevor == "")
                {
                    $nuevor = $numr;
                }else
                {
                    $nuevor = $nuevor.'|'.$numr;
                }
                
            }
            
        }
        if($nuevor == "")$nuevor=0;

        $cadenar=$nuevor;
}

actualizar($cadenar,$id);





function actualizar ($reclutadores,$id){
    include 'listar.php';
    $sentencia = $connect->prepare("UPDATE ibvirtuallicencias SET reclutadores = ? WHERE idlicencia = ?");
    $sentencia->execute([$reclutadores,$id]);
    echo "Guardado exitoso";
}