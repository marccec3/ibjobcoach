<?php require 'conexion.php' ;

 if ($conexion) 
 {
      $sql = "SELECT * FROM ibvirtuallicencias where opcion ='Pago' ORDER BY idlicencia DESC LIMIT 1";
      $stmt = $conexion->prepare($sql);
      $stmt->execute(); 
      
      //Aquí, cualquiera de los dos procedimientos explicados en b1 y b2. 
  } else {
      echo "Hubo un problema con la conexión";
  }


?>