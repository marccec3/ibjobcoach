<?php
  $servidor = "51.161.34.107";
  $usuario = "jun21cod_ibvirtual2";
  $password = "powerful@doom4d";
  $db="jun21cod_proyecto_ibvirtual";
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $password);      
        
        //echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      //echo "La conexión ha fallado: " . $e->getMessage();
      }
 
  

?>