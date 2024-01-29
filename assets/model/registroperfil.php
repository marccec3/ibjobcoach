<?php
class registroperfil
{
    public $CNX;
    public $id;
    public $name;
    public $emal;
    public $phone;
    public $password;
    public $password_confirmation;
    public $avatar;
    public $tipo;
    public $tamanio;
    public $document;
    public $linkedin;
    public $birth_country_id ;
    public $current_country_id;
    public $user_countries;
    public $education ;
    public $institution;
    public $languages_en ; 
    public $languages_es;
    public $languages_pt;
    public  $experience ;
    public $working ;
    public $out_of_work;
    public  $last_company;
    public  $min_income;
    public  $max_income;
    public  $last_position;
    public  $target_positions;
    public  $user_areas;
    public  $user_target_areas ;
    public   $user_markets;
    public   $user_target_markets ;
    public  $name_0 ;
    public  $email_0;
    public  $phone_0 ;
    public  $company_0 ;
    public  $position_0 ;
    public  $name_1 ;
    public  $email_1 ;
    public  $phone_1 ;
    public  $company_1 ;
    public  $position_1 ;
    public $summary ;
    public $book_hunting; 
    public function __construct()
    {
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function guardarperfil(registroperfil $data){
        try {
            $query="INSERT INTO cliente (name,email,phone,password,password_confirmation,avatar,tipo,tamanio,document,linkedin,birth_country_id,current_country_id,user_countries,education,institution,languages_en,languages_es,languages_pt,experience,working,out_of_work,last_company,min_income,max_income,last_position,target_positions,user_areas,user_target_areas,user_markets,user_target_markets,name_0,email_0,phone_0,company_0,position_0,name_1,email_1,phone_1,company_1,position_1,summary,book_hunting) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->name,$data->email,$data->phone,$data->password,$data->password_confirmation,$data->avatar,$data->tipo,$data->tamanio,$data->document,$data->linkedin,$data->birth_country_id,$data->current_country_id,$data->user_countries,$data->education,$data->institution,$data->languages_en,$data->languages_es,$data->languages_pt,$data->experience,$data->working,$data->out_of_work,$data->last_company,$data->min_income,$data->max_income,$data->last_position,$data->target_positions,$data->user_areas,$data->user_target_areas,$data->user_markets,$data->user_target_markets,$data->name_0,$data->email_0,$data->phone_0,$data->company_0,$data->position_0,$data->name_1,$data->email_1,$data->phone_1,$data->company_1,$data->position_1,$data->summary,$data->book_hunting));
            
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function actualizarperfil($data){
        try {
            $query="UPDATE cliente SET name=?,email=?,phone=?,password=?,password_confirmation=?,avatar=?,tipo=?,tamanio=?,document=?, linkedin=? WHERE  id=?";
            $this->CNX->prepare($query)->execute(array($data->name,$data->email,$data->phone,$data->password,$data->password_confirmation,$data->avatar,$data->tipo,$data->tamanio,$data->document,$data->linkedin));
            
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
    public function llenarid($id){
        try {
            $query="SELECT * FROM cliente where id = ?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
   
}
?>