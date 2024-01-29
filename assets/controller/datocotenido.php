<?php
include_once 'model/contenidolinkedin.php';
class datocontenido{
    public  $valor;
public function __construct()
{
    $this->valor = new contenidolinkedin();
}
    
   public function index(){
     include_once 'learning.php';
 } 
}
?>


