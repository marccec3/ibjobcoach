<?php
class Conexion{

    private static $instancia;
    private $dbh;

    private function __construct()
    {
        try {

            $this->dbh = new PDO('mysql:host=51.161.34.107;dbname=jun21cod_proyecto_ibvirtual', 'jun21cod_ibvirtual2', 'powerful@doom4d');
            $this->dbh->exec("SET CHARACTER SET utf8");

        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();

            die();
        }
    }

    public function prepare($sql)
    {

        return $this->dbh->prepare($sql);

    }

    public static function singleton_conexion()
    {

        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;

        }

        return self::$instancia;

    }


     // Evita que el objeto se pueda clonar
    public function __clone()
    {

        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);

    }
}
?>
