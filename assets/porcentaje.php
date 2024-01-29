<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';

$data=$_POST['data'];
$id=$_SESSION['idlicencia'];



if(strlen($data)>7){
    $faseClick=$data[6].$data[7];
}else{
    $faseClick=$data[6];
}

$fase=$data[4];


if($fase === '1'){
    $fasen = $_SESSION['fase_1'];
}else if($fase === '2'){
    $fasen = $_SESSION['fase_2'];
}else if($fase === '3'){
    $fasen = $_SESSION['fase_3'];
}


$fasen[$faseClick-1]=1;

//$contsulta = "UPDATE ibvirtuallicencias SET fase_".$fase."=? WHERE  idlicencia=?";


$sentencia = $connect->prepare("UPDATE ibvirtuallicencias SET fase_".$fase."=? WHERE  idlicencia=?");
$resultado = $sentencia->execute([$fasen, $id]);

if($resultado===TRUE){
    if($fase === '1'){
         $_SESSION['fase_1']=$fasen;
    }else if($fase === '2'){
        $_SESSION['fase_2']=$fasen;
    }else if($fase === '3'){
        $_SESSION['fase_3']=$fasen;
    }
    echo $fasen . "+". $faseClick. "+".$data."+".strlen($data);
    
}
else {
    echo"ERROR";
}
