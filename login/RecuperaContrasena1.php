
<?php include '../assets/listar.php'; ?>
<?php
$token1 = $_POST["link1"];
$token = substr($token1, -20);  

$contrasena = $_POST['contrasena'];
$contrasena_copy = $_POST['contrasena-copy'];



if($contrasena == $contrasena_copy){

$sql = "SELECT token,correo FROM usuarios where token = '$token'";
$query = $connect->prepare($sql);
$query->execute();
$lista = $query->fetch(PDO::FETCH_OBJ);
$correo = $lista->correo;

if($query->rowCount() > 0){

    $sql1 = "UPDATE usuarios SET PASSWORD = '$contrasena_copy' WHERE token = '$token'";
    $query1 = $connect->prepare($sql1);
    $query1->execute();

    $sql2 = "UPDATE ibvirtuallicencias SET clave = '$contrasena_copy' WHERE correo = '$correo' and status='Enabled'";
    $query2 = $connect->prepare($sql2);
    $query2->execute();

    $sql3 = "UPDATE usuarios SET token = '' WHERE token = '$token';";
    $query3 = $connect->prepare($sql3);
    $query3->execute();

    $sql4 = "SELECT idlicencia FROM ibvirtuallicencias WHERE correo = '$correo'";
    $query4 = $connect->prepare($sql4);
    $query4->execute();
    $result = $query4->fetch(PDO::FETCH_OBJ);

    $sql5 = "UPDATE cliente SET password_confirmation = '$contrasena_copy' WHERE idlicencia = $result->idlicencia";
    $query5 = $connect->prepare($sql5);
    $query5->execute();

echo "<script>alert('Su contraseña ha sido cambiada correctamente');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
                                                                                    //http://localhost:81/ibvirtual2/assets/login.php
}else{
echo "<script>alert('Este link ya no es válido');location.href ='http://ibjobcoach.com/assets/login.php';</script>";
                                                                //http://localhost:81/ibvirtual2/assets/login.php
}

}else{
    echo "<script>alert('Las contraseñas no coinciden');location.href ='javascript:history.back()';</script>";
}


?>