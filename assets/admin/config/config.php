<?php
 class conexion{
     public static function conectar(){
         $PDO =new PDO('mysql:host=51.161.34.107;dbname=jun21cod_proyecto_ibvirtual','jun21cod_ibvirtual2','powerful@doom4d');
         $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         return $PDO;
     }
 }
?>