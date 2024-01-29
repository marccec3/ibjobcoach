<?php

class Database extends PDO{

    public function __construct() {
        try{
            //parent::__construct('mysql:host=localhost;dbname=dareyesm_db','dareyesm_root','root2015');
            parent::__construct('mysql:host=51.161.34.107;dbname=jun21cod_proyecto_ibvirtual','jun21cod_ibvirtual2','powerful@doom4d');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex . '<br>';
            die('Error al conectar a la base de datos.');
        }

    }

}
?>