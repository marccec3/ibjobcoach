<?php
session_start();
$_isPost = false;
$_isRespuesta = false;
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';

$idtrabajo="";
$empresa =$_POST['company'];
$nombre_puesto=$_POST['position'];
$area=$_POST['job_area'];
$link=$_POST['job_link'];
$descripcion=$_POST['job_message'];
$pais=$_POST['job_country'];
$contacto="";
$sepa_mas="";



$sentencia = $connect->prepare("INSERT INTO trabajo(empresa,nombre_puesto,area,descripcion,pais,link) VALUES(?,?,?,?,?,?)");
$resultado =$sentencia->execute([$empresa,$nombre_puesto,$area,$descripcion,$pais,$link]);

if($resultado === TRUE)
{
    echo "Trabajo guardado exitosamente" ;
}
else{
    
    echo "Error al registrar el puesto :" . print_r($sentencia->errorInfo());
}

//echo $idtrabajo ." " . $empresa ." ". $pais;

