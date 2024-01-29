<?php
    require_once '../admin/config/coneccion.php';
    session_start();
    class Login
    {
        private static $instancia;
        private $dbh;
        private function __construct()
        {
            $this->dbh = Conexion::singleton_conexion();
        }
        public static function singleton_login()
        {
            if (!isset(self::$instancia)) {
                $miclase = __CLASS__;
                self::$instancia = new $miclase;
            }
            return self::$instancia;
        }
        public function login_users($correo,$password)
        {
            try { 
                $sql = "SELECT TIMEDIFF(CURRENT_TIMESTAMP,fechainscripcion) as dias,correo,clave, opcion from ibvirtuallicencias WHERE correo = :correo AND clave = :password AND status='Enabled'";
                
                $query = $this->dbh->prepare($sql);
                $query->bindParam('correo',$correo);
                $query->bindParam('password',$password);
                $query->execute();
                $count=$query->rowCount();
                $data=$query->fetch(PDO::FETCH_OBJ);
                $this->dbh=null;
                if($count>0)
                    {
                     $fecha = $data->dias; 
                     $opcion = $data->opcion;                  
                     $_SESSION['usuario'] = $data->correo;
                     if(($fecha<5 && $opcion=='Gratis')|| ($opcion=='Pago')){
                        return TRUE;
                    }
                     
                     else{
                        header("Location: ../termino.php");
                     }
                }
                
            }catch(PDOException $e){
                print "Error!: " . $e->getMessage();
                
            }           
        } 
        
        // Evita que el objeto se pueda clonar
        public function __clone()
        {
     
            trigger_error('La clonaci贸n de este objeto no est谩 permitida', E_USER_ERROR);
     
        }
 
    }
?>