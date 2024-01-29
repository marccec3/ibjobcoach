<?php

class registrousuario
{
    public $CNX;
    public $id;
    public $nombre;
    public $apellido;
    public $pais;
    public $telefono;
    public $cargo;
    public $correo;
    public $password;

    public function __construct()
    {
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function listar(){
        try {
            $query=" SELECT * FROM ibvirtuallicencias";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function guardar(registrousuario $data){
        try {
            $query="INSERT INTO ibvirtuallicencias (nombre,apellido,pais,telefono,cargo,correo,password) Values(?,?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->nombre,$data->apellido,$data->pais,$data->telefono,$data->cargo,$data->correo,$data->password));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
  
    public function llenarid($id){
        try {
            $query="SELECT * FROM ibvirtuallicencias where id = ?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
   
}
?>