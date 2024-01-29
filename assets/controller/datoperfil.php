<?php
include_once 'model/registroperfil.php';
 
class datoperfil{
    public  $valor;
public function __construct()
{
    $this->valor = new registroperfil();
}
public function index1(){
    include_once 'index1.php';
}
public function nuevo(){
    $alu=new registroperfil();
    if(isset($_REQUEST['id'])){
        $alu=$this->valor->llenarid($_REQUEST['id']);
    }
   include_once 'profile.php';
}
 public function recibirperfil(){
    $avatar=$_FILES['avatar']['name'];
    $destino = "CV/" . $avatar; 
    $ruta = $_FILES['avatar']['tmp_name'];
    $tipo=$_FILES['avatar']['type'];
    $tamanio = $_FILES['avatar']['size'];
    
    if ($avatar != "") {
        if (copy($ruta, $destino)) {
            $alu=new registroperfil();
            $alu->id=$_POST['id'];
            $alu->name=$_POST['nombre'];            
            $alu->email=$_POST['email'];
            $alu->phone=$_POST['phone'];
            $alu->password=$_POST['password'];
            $alu->password_confirmation=$_POST['password_confirmation'];
            $alu->avatar=$avatar;
            $alu->tipo=$tipo;
            $alu->tamanio=$tamanio;     
            $alu->document=$_POST['document'];
            $alu->linkedin=$_POST['linkedin'];            
            $alu->birth_country_id = $_POST['birth_country_id'];
            $alu->current_country_id = $_POST['current_country_id'];
            $alu->user_countries = $_POST['user_countries'];
            $alu->education = $_POST['education'];
            $alu->institution = $_POST['institution'];
            $alu->languages_en = $_POST['language_en']; 
            $alu->languages_es = $_POST['language_es'];
            $alu->languages_pt = $_POST['language_pt'];
            $alu->experience = $_POST['experience'];
            $alu->working = $_POST['working'];
            $alu->out_of_work = $_POST['out_of_work'];
            $alu->last_company = $_POST['last_company'];
            $alu->min_income = $_POST['min_income'];
            $alu->max_income = $_POST['max_income'];
            $alu->last_position = $_POST['last_position'];
            $alu->target_positions = $_POST['target_positions'];
            $alu->user_areas = $_POST['user_areas'];
            $alu->user_target_areas = $_POST['user_target_areas'];
            $alu->user_markets = $_POST['user_markets'];
            $alu->user_target_markets = $_POST['user_target_markets'];
            $alu->name_0 = $_POST['name_0'];
            $alu->email_0 = $_POST['email_0'];
            $alu->phone_0 = $_POST['phone_0'];
            $alu->company_0 = $_POST['company_0'];
            $alu->position_0 = $_POST['position_0'];
            $alu->name_1 = $_POST['name_1'];
            $alu->email_1 = $_POST['email_1'];
            $alu->phone_1 = $_POST['phone_1'];
            $alu->company_1 = $_POST['company_1'];
            $alu->position_1 = $_POST['position_1'];
            $alu->summary = $_POST['summary'];
            $alu->book_hunting = $_POST['book_hunting']; 
            $alu->id>0 ?$this->valor->actualizarperfil($alu) : $this->valor->guardarperfil($alu);
            echo "<script>alert('Registo correctamente');location.href ='javascript:history.back()';</script>";
        }
    }
}
}
?>


