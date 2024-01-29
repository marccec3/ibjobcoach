<?php

class Users{
	
	public $objDb;
	public $objSe;
	public $result;
	public $rows;
	public $useropc;
	
	public function __construct(){
		
		$this->objDb = new Database();
		$this->objSe = new Sessions();
		
	}
	
	public function login_in(){
		
            $sth = $this->objDb->prepare('SELECT * FROM usuarios where password=:password and correo=:email');
            
            $sth->bindParam(':password', $_POST["password"]);
            $sth->bindParam(':email', $_POST["email"]);
            $sth->execute();

            $result = $sth->fetchAll();    
                 
                       header('Location: index.php'); 
         	
	}
	
}

?>