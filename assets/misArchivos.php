<?php
include 'listar.php';

session_start();

$nombre_usuario1 = $_SESSION['usuario'];

$sentencia3 = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia3->execute([$nombre_usuario1]);

$persona3 = $sentencia3->fetch();

if (isset($_POST["listarM"])) {

    if ($persona3["opcion"] == "Pago") {
        $stmt = $connect->prepare("SELECT * FROM mis_archivos WHERE id_licencia = :id_li");
        $stmt->bindParam(":id_li",$persona3["idlicencia"],PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();
        echo json_encode($respuesta);
    }

}else{

if ($persona3["opcion"] == "Pago") {
    $titulo = $_POST["titulo"];
    $nombre_temporal = $_FILES['archivo']['tmp_name'];
    $nombre = $_FILES['archivo']['name'];
    $ruta = 'miArchivos/' .$nombre;

    $stmt = $connect->prepare("INSERT INTO mis_archivos(titulo_archivo,ruta_archivo,id_licencia) VALUES(:titulo,:ruta,:id_li)");

    $stmt->bindParam(":titulo",$titulo,PDO::PARAM_STR);
    $stmt->bindParam(":ruta",$ruta,PDO::PARAM_STR);
    $stmt->bindParam(":id_li",$persona3["idlicencia"],PDO::PARAM_STR);

    $stmt->execute();

    move_uploaded_file($nombre_temporal, 'miArchivos/' .$nombre);
    echo "guardado";
}else{
    echo "no-pago";
}

}