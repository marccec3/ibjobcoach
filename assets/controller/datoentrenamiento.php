<?php
include_once 'model/registro.php';
class dato{
    public  $valor;
public function __construct()
{
    $this->valor = new registro();
}
 public function index(){
     include_once 'view/listaalumnos.php';
 }
 public function nuevo(){
     $alu=new registro();
     if(isset($_REQUEST['id'])){
         $alu=$this->valor->llenarid($_REQUEST['id']);
     }
    include_once 'view/registroalumnos.php';
 }
 public function recibir(){
    $alu=new registro();
    $alu->id=$_POST['id'];
    $alu->nombre=$_POST['nombre'];
    $alu->paterno=$_POST['paterno'];
    $alu->materno=$_POST['materno'];
    $alu->dni=$_POST['dni'];
    $alu->fnac=$_POST['fnac'];
    $alu->genero=$_POST['genero'];

    $alu->id>0 ?$this->valor->actualizar($alu) : $this->valor->guardaralumno($alu);
    header("location: index.php");
 }
 public function eliminar(){
     $this->valor->delete($_REQUEST['id']);
     header("location: index.php");
 }
}
?>


