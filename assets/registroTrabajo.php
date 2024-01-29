<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}

include 'listar.php';


$id=$_SESSION['idlicencia'];
$sentenci1=$connect->prepare("SELECT * FROM ibvirtuallicencias where idlicencia=?");//se conecta y busca si hay el idlicencia
$resultado=$sentenci1->execute([$id]);//compara el idliciencia de sesion con el de la tabla idlicencia
$resultado=$sentenci1->fetch(PDO::FETCH_OBJ);//crea nombre de la variable del objeto tal como se accedieron
$cadenar=$resultado->idlicencia;//obtiene el idlicencia de tabla ibvirtual..

if(isset($_POST['company'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $company= $_POST['company'];
    $position=$_POST['position'];
    $search_duration=$_POST['search_duration'];
    $salary=$_POST['salary'];
    $through_genes=$_POST['through_genes'];
    $recommend_dna=$_POST['recommend_dna'];
    $recommend_genes=$_POST['recommend_genes'];
    $message=$_POST['message'];

  $query = "INSERT INTO encontre_trabajo(company,position,search_duration,salary,through_genes,recommend_dna,recommend_genes,message,idlicencia)
   VALUES ('$company', '$position','$search_duration','$salary','$through_genes','$recommend_dna','$recommend_genes','$message','$cadenar')";


  $sentencia =$connect->prepare($query);
  $result = $sentencia->execute();

 // if (!$result) {
 //   var_dump($sentencia);
 //   var_dump($result);
 //   die();
 // }
 // echo "exito";die();
}
?>