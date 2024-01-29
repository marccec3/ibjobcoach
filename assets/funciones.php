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
$hh = $_POST['hh'];
$tipo = $_POST['tipo'];

$sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias WHERE idlicencia=?");
$resultado =$sentencia->execute([$id]);
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
$cadena = $resultado ->headhunters;

if($tipo == "add"){
    if($cadena == 0){
        $cadena = $hh;
    }else{
        $cadena = $cadena.'|'.$hh; 
    }
}
else if($tipo == 'remove'){
        $array = $resultado ->headhunters;
        $numeros = explode('|',$array);
        $nuevo="";
        foreach ($numeros as $num) {
            if($num != $hh){
                if($nuevo == "")
                {
                    $nuevo = $num;
                }else
                {
                    $nuevo = $nuevo.'|'.$num;
                }
                
            }
            
        }
        if($nuevo == "")$nuevo=0;

        $cadena=$nuevo;
}

actualizar($cadena,$id);





function actualizar ($heandunter,$id){
    include 'listar.php';
    $sentencia = $connect->prepare("UPDATE ibvirtuallicencias SET headhunters = ? WHERE idlicencia = ?");
    $sentencia->execute([$heandunter,$id]);
    echo "exito";
}
