<?php

class registro
{
    public $CNX;
    public $id;
    public $nombre;
    public $paterno;
    public $materno;
    public $dni;
    public $fnac;
    public $genero;

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
            $query=" SELECT * FROM listaalumnos";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function llenargenero(){
        try {
            $query=" SELECT * FROM genero";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        }
    }
  
    public function guardaralumno(registro $data){
        try {
            $query="INSERT INTO alumnos (nombre,paterno,materno,dni,fnac,genero) Values(?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->nombre,$data->paterno,$data->materno,$data->dni,$data->fnac,$data->genero));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizar($data){
        try {
            $query="UPDATE   alumnos SET nombre=?,paterno=?,materno=?,dni=?,fnac=?,genero=? WHERE  id=?";
            $this->CNX->prepare($query)->execute(array($data->nombre,$data->paterno,$data->materno,$data->dni,$data->fnac,$data->genero,$data->id));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function delete($id){
        try {
            $query="DELETE FROM alumnos where id=?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($id));
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function llenarid($id){
        try {
            $query="SELECT * FROM alumnos where id = ?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
   
}
?>