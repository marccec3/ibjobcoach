<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    //consulta usuario
}
include 'listar.php';

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

  $query = "INSERT into encontre_trabajo(company,position,search_duration,salary, through_genes, recommend_dna, recommend_genes,message) 
    VALUES ('$company', '$position','$search_duration','$salary','$through_genes','$recommend_dna','$recommend_genes','$message')";
  
  $sentencia =$connect->prepare($query);
  
  $result = $sentencia->execute();

  if (!$result) {
    echo "error";
  }

  echo "exito";

}


?>