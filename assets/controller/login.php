<?php
require_once '../model/login.class.php';
$nuevoSingleton = Login::singleton_login();
if(isset($_POST['email']) && isset($_POST['password']))
{
    $correo = $_POST['email'];
    $password = $_POST['password'];
    if($correo=='admin@gmail.com' && $password=='123456789'){
        header("Location: ../admin/examples/index.php");
    }
    //accedemos al método usuarios y los mostramos
    $usuario = $nuevoSingleton->login_users($correo,$password);
    if($usuario==true)
    {
        $_SESSION['autorizado'] = true;
        session_regenerate_id();
        echo"exito";
    }
    else{
        echo "incorrecto";
    }
    
}

else{
    echo "expirada";
    
    session_destroy();
}
?>