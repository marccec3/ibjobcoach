<?php

function inscert($nomatinm, $fechacert, $archivo, $area){
        $sql= "INSERT INTO cert_lib(nomatinm, fechacert, area, archivo) VALUES ('$nomatinm', '$fechacert','$area', '$archivo')";
        //echo $sql;
        //$this->cons($sql);
}
?>