<?php

class contenidolinkedin
{
    public $CNX;

    public function __construct()
    {
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function listararticulo(){
        try {
            $query="SELECT * FROM articulos where idcategoria=8";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarbiblioteca(){
        try {
            $query="SELECT * FROM articulos where idcategoria=1";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
}
?>