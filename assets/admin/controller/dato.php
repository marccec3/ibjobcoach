<?php
include_once '../model/registro.php';

class dato{
    public  $valor;
public function __construct()
{
    $this->valor = new registro();
}
 public function index(){
     include_once 'dashboard.php';
 }
 public function tabla(){
    include_once 'tables.php';
}
 public function nuevo(){
     $alu=new registro();
     if(isset($_REQUEST['idarticulo'])){
         $alu=$this->valor->llenarid($_REQUEST['idarticulo']);
     }
    include_once 'contenidos.php';
 }
 public function usuario(){
    $alu=new registro();
    if(isset($_REQUEST['idalumni'])){
        $alu=$this->valor->llenarid($_REQUEST['idalumni']);
    }
   include_once 'user.php';
}
public function foro(){
    $foro=new registro();
    if(isset($_REQUEST['idforo'])){
        $foro=$this->valor->llenaridforo($_REQUEST['idforo']);
    }
   include_once 'foro.php';
}
  public function nuevolink(){
     $alu=new registro();
     if(isset($_REQUEST['idcontenido'])){
         $alu=$this->valor->llenarid($_REQUEST['idcontenido']);
     }
    include_once 'biblioteca.php';
 }
 public function recibir(){
    $nombre=$_FILES['archivo']['name'];
    $destino = "archivo/" . $nombre;
    $ruta = $_FILES['archivo']['tmp_name'];
    $tipo=$_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $alu=new registro();
            $alu->idarticulo=$_POST['idarticulo'];
            $alu->descripcion=$_POST['descripcion'];
            $alu->nombre=$nombre;
            $alu->tipo=$tipo;
            $alu->tamanio=$tamanio;     
            $alu->idcategoria=$_POST['categoria'];
            $alu->idarticulo>0 ?$this->valor->actualizar($alu) : $this->valor->guardar($alu);
             echo "<script>alert('Registo correctamente');location.href ='javascript:history.back()';</script>";
        }
        header("location: index.php");
    }
 }
 public function recibiralumni(){
    $name=$_FILES['foto']['name'];
    $destino = "foto/" . $name; 
    $ruta = $_FILES['foto']['tmp_name'];
    $tipo=$_FILES['foto']['type'];
    $tamanio = $_FILES['foto']['size'];
    
    if ($name != "") {
        if (copy($ruta, $destino)) {
            $alu=new registro();
            $alu->idalumni=$_POST['idalumni'];
            $alu->name=$name;
            $alu->tipo=$tipo;
            $alu->tamanio=$tamanio;     
            $alu->nombre=$_POST['nombre'];
            $alu->email=$_POST['email'];
            $alu->empresa=$_POST['empresa'];
            $alu->posicion=$_POST['posicion'];
            $alu->idalumni>0 ?$this->valor->actualizaralumni($alu) : $this->valor->guardaralumni($alu);
            echo "<script>alert('Registo correctamente');location.href ='javascript:history.back()';</script>";
        }
        header("location: ../examples/index.php");
    }
 }
 public function recibirforo(){
    $name=$_FILES['foto']['name'];
    $destino = "foro/" . $name; 
    $ruta = $_FILES['foto']['tmp_name'];
    $tipo=$_FILES['foto']['type'];
    $tamanio = $_FILES['foto']['size'];
    $estado="Enabled";
    if ($name != "") {
        if (copy($ruta, $destino)) {
            $foro=new registro();
            $foro->idforo=$_POST['idforo'];
            $foro->autor=$_POST['nombre'];
            $foro->foto=$name;
            $foro->tipo=$tipo;
            $foro->tamanio=$tamanio;     
            $foro->titulo=$_POST['titulo'];
            $foro->descripcion=$_POST['descripcion'];
            $foro->estado=$estado;
            $foro->idforo>0 ?$this->valor->actualizarforo($foro) : $this->valor->guardarforo($foro);
            echo "<script>alert('Registo correctamente');location.href ='javascript:history.back()';</script>";
        }
        header("location: ../examples/index.php");
    }
 }
public function recibircontenido(){
    
            $con=new registro();
            $con->idcontenido=$_POST['idcontenido'];
            $con->descripcion=$_POST['descripcion'];
            $con->nombre=$_POST['nombre'];
            $con->url=$_POST['url'];
            $con->idcategoria=$_POST['categoria'];
            $con->idcontenido>0 ?$this->valor->actualizarcontenido($con) : $this->valor->guardarcontenido($con);
             echo "<script>alert('Registo correctamente');location.href ='javascript:history.back()';</script>";
            die();
 }
 public function eliminar(){
     $this->valor->delete($_REQUEST['idarticulo']);
     header("location: index.php");
 }
}
?>


