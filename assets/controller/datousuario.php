<?php
include_once 'model/registrousuario.php';
class datousuario{
    public  $valor;
public function __construct()
{
    $this->valor = new registrousuario();
}
public function index(){
    include_once 'registrarusuario.php';
}
 public function nuevo(){
     $usu=new registrousuario();
     if(isset($_REQUEST['id'])){
         $usu=$this->valor->llenarid($_REQUEST['id']);
     }
    include_once 'index.php';
 }
 public function recibir(){

    $usu=new registrousuario();
    $usu->nombre=$_POST['name'];
    $usu->apellido=$_POST['last_name'];
    $usu->pais=$_POST['country'];   
    $usu->telefono=$_POST['phone'];
    $usu->cargo=$_POST['position'];
    $usu->correo=$_POST['email']; 
    $usu->password=$_POST['password'];
    $this->valor->guardar($usu);
    header("location: index.php");
 }
 
}
?>


