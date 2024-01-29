<?php

class registro
{
    public $CNX;
    public $idarticulo;
    public $descripcion;
    public $nombre;
    public $tipo;
    public $tamanio;
    public $ruta;
    public $idcategoria;
    public $idcontenido;
    public $url;
    public $idforo;
    public $autor;
    public $estado;
    public $titulo;
    public $foto;
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
            $query="SELECT * FROM articulos";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listartecnicas(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=1";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarsesiones(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=2";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listaretapas(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=3";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarmarketing(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=4";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarnetworking(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=5";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listaremprendimiento(){
        try {
            $query="SELECT count(*) as cantidad  FROM articulos where idcategoria=6";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarprimer(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=7";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarbiblioteca(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=8";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
   
     public function listartemplates(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=9";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarcv(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarmatch(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=11";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarpropuesta(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=12";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarcontenido(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=13";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarcasa(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=14";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarconocimiento(){
        try {
            $query="SELECT count(*) as cantidad FROM articulos where idcategoria=15";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listararticulo(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.tipo,a.tamanio, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria order by fechapublicacion DESC limit 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listartecnicas1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=1 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarsesiones1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=2 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listaretapas1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=3 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarmarketing1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=4 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarnetworking1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=5 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listaremprendimiento1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=6 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarprimer1(){
        try {
            $query="SELECT a.idarticulo,a.nombre,a.fechapublicacion, c.nombre as categoria FROM articulos a INNER JOIN categoriaarticulo c ON a.idcategoria=c.idcategoria where c.idcategoria=7 ORDER BY a.fechapublicacion DESC LIMIT 10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    
    /* lista de contenidos antiguos*/
     public function listarbibliotecaa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=1";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarempresaindustriaa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=2";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarcontenidolinkedina(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=3";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarcva(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=4";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarmatcha(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=5";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarpropuestaa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=6";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listartecnicasa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=7";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listartemplatea(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=8";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarvideoa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=9";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarcursoa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=10";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarpeliculaa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=11";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarboardsa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=12";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarprospecciona(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=13";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
      public function listarconocimientoa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=14";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listarcoworkingsa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=15";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
     public function listaremprendimientoa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=16";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
      public function listarprimertrabajoa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=17";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
      public function listartendenciasa(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=18";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function listarjovena(){
        try {
            $query="SELECT count(*) as cantidad FROM contenidos where idcategoria=19";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        } 
    }
    public function llenarcategoria(){
        try {
            $query="SELECT * FROM categoriaarticulo";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        }
    }
    public function llenarcategoriacontenido(){
        try {
            $query="SELECT * FROM categoriacontenido";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //throw $th;
        }
    }
    public function guardar(registro $data){
        try {
            $query="INSERT INTO articulos (descripcion,nombre,tipo,tamanio,idcategoria) Values(?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->descripcion,$data->nombre,$data->tipo,$data->tamanio,$data->idcategoria));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function guardaralumni(registro $data){
        try {
            $query="INSERT INTO alumni (nombre,name,tipo,tamanio,email,empresa,posicion) Values(?,?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->nombre,$data->name,$data->tipo,$data->tamanio,$data->email,$data->empresa,$data->posicion));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function guardarforo(registro $data){
        try {
            $query="INSERT INTO foro (autor,foto,tipo,tamanio,titulo, descripcion,estado) Values(?,?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->autor,$data->foto,$data->tipo,$data->tamanio,$data->titulo,$data->descripcion, $data->estado));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
     public function guardarcontenido(registro $data){
        try {
            $query="INSERT INTO contenidos (descripcion,nombre,url,idcategoria) Values(?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->descripcion,$data->nombre,$data->url,$data->idcategoria));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizar($data){
        try {
            $query="UPDATE articulos SET descripcion=?,nombre=?,tipo=?,tamanio=?,idcategoria=? WHERE  id=?";
            $this->CNX->prepare($query)->execute(array($data->descripcion,$data->nombre,$data->tipo,$data->tamanio,$data->idcategoria));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizaralumni($data){
        try {
            $query="UPDATE alumni SET nombre=?,name=?,tipo=?,tamanio=?,empresa=?, posicion=? WHERE  idalumi=?";
            $this->CNX->prepare($query)->execute(array($data->nombre,$data->name,$data->tipo,$data->tamanio,$data->email,$data->empresa.$data->posicion));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizarforo($data){
        try {
            $query="UPDATE foro SET autor=?,foto=?,tipo=?,tamanio=?,titulo=?,descripcion=?, estado=? WHERE  idforo=?";
            $this->CNX->prepare($query)->execute(array($data->autor,$data->foto,$data->tipo,$data->tamanio,$data->titulo,$data->descripcion,$data->estado));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizarcontenido($data){
        try {
            $query="UPDATE contenidos SET descripcion=?,nombre=?,url=?,idcategoria=? WHERE  id=?";
            $this->CNX->prepare($query)->execute(array($data->descripcion,$data->nombre,$data->url,$data->idcategoria));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function delete($idarticulo){
        try {
            $query="DELETE FROM articulos where idarticulo=?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($idarticulo));
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function llenarid($idarticulo){
        try {
            $query="SELECT * FROM articulos where idarticulo = ?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($idarticulo));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
    public function llenaridforo($idforo){
        try {
            $query="SELECT * FROM foro where idforo = ?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($idforo));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
   
}
?>