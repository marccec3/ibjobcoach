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
$jb = $_POST['jb'];
$tipojb = $_POST['tipojb'];

$sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias WHERE idlicencia=?");
$resultadojobs =$sentencia->execute([$id]);
$resultadojobs = $sentencia->fetch(PDO::FETCH_OBJ);
$cadenajb = $resultadojobs  ->jobs;

if($tipojb == "addjb"){
    if($cadenajb == 0){
        $cadenajb = $jb;
    }else{
        $cadenajb = $cadenajb.'|'.$jb; 
    }
}
else if($tipojb == 'removejb'){
        $array = $resultadojobs ->jobs;
        $numerosjb = explode('|',$array);
        $nuevojb="";
        foreach ($numerosjb as $numjb) {
            if($numjb != $jb){
                if($nuevojb == "")
                {
                    $nuevojb = $numjb;
                }else
                {
                    $nuevojb = $nuevojb.'|'.$numjb;
                }
                
            }
            
        }
        if($nuevojb == "")$nuevojb=0;

        $cadenajb=$nuevojb;
}

actualizar($cadenajb,$id);





function actualizar ($jobs,$id){
    include 'listar.php';
    $sentencia = $connect->prepare("UPDATE ibvirtuallicencias SET jobs = ? WHERE idlicencia = ?");
    $sentencia->execute([$jobs,$id]);
    echo "Guardado exitoso";
}