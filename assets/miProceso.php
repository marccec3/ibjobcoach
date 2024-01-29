<?php
include 'listar.php';

session_start();



$nombre_usuario1 = $_SESSION['usuario'];

$sentencia3 = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia3->execute([$nombre_usuario1]);

$persona3 = $sentencia3->fetch();

if (isset($_POST["detalle_pro"])) {
    if ($persona3["opcion"] == "Pago") {
        $stmt = $connect->prepare("SELECT * FROM mis_procesos p INNER JOIN area a ON p.id_area = a.id_area INNER JOIN pais i ON p.id_pais= i.id_pais WHERE p.id_proceso = :id_li");
        $stmt->bindParam(":id_li", $_POST["detalle_pro"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetch();
        $html = '';

        $html .= '
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4">
                    <b>Empresa</b>
                    <p>'.$respuesta["empresa"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Posición</b>
                    <p>'.$respuesta["posicion"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Area</b>
                    <p>'.$respuesta["nombre_area"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Pais</b>
                    <p>'.$respuesta["nom_pais"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Localización</b>
                    <p>'.$respuesta["localizacion"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Sueldo</b>
                    <p>'.$respuesta["sueldo"].'</p>
                </div>
                <div class="col-xs-12">
                    <b>Acerca de posicion</b>
                    <p>'.$respuesta["sobre_posicion"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Entrevistador</b>
                    <p>'.$respuesta["entrevistador"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Url</b>
                    <p>'.$respuesta["url_posicion"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Correo</b>
                    <p>'.$respuesta["correo"].'</p>
                </div>
            </div>
        </div>
        ';
        echo $html;
    }
}

if (isset($_POST["listarP"])) {

    if ($persona3["opcion"] == "Pago") {

        $html = '';
        if ($_POST["listarP"] == "undefined") {
            $pagina = 1;
        } else {
            $pagina = $_POST["listarP"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM mis_procesos WHERE id_licencias = :id_li LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();

        foreach ($respuesta as $key => $value) :
            $html .= '<div class="panel panel-default panel-job pan-areas">
                        <input type="text" class="proceso" style="display:none;" value="'.$value["id_proceso"].'">
                        <div class="panel-heading" role="tab" id="heading-jobs-2501">
                            <label for="proceso'.$key.'" class="panel-title input_bt"style="width: 100%; ">
                                <span role="button" class="collapsed">
                                '.$value["posicion"].' - '.$value["empresa"].' </span>
                                <span class="label label-default pull-right">
                                    <i class="fas fa-file-archive"></i>
                                </span>
                            </label>
                        </div>
                    </div>';
        endforeach;

        $stmt = $connect->prepare("SELECT * FROM mis_procesos WHERE id_licencias = :id_li");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-proceso" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-proceso" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-proceso" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;

    }

}
if(isset($_POST["company"])){

if ($persona3["opcion"] == "Pago") {

    $stmt = $connect->prepare("INSERT INTO mis_procesos(empresa,posicion,id_area,id_pais,localizacion,sueldo,sobre_posicion,entrevistador,url_posicion,correo,id_licencias) VALUES(:empresa,:posi,:area,:pais,:loca,:sueldo,:posi,:entre,:urlp,:correo,:id_li)");

    $stmt->bindParam(":empresa",$_POST["company"],PDO::PARAM_STR);
    $stmt->bindParam(":posi",$_POST["position"],PDO::PARAM_STR);
    $stmt->bindParam(":area",$_POST["area_id"],PDO::PARAM_INT);
    $stmt->bindParam(":pais",$_POST["country_id"],PDO::PARAM_INT);
    $stmt->bindParam(":loca",$_POST["location"],PDO::PARAM_STR);
    $stmt->bindParam(":sueldo",$_POST["salary"],PDO::PARAM_STR);
    $stmt->bindParam(":posi",$_POST["description"],PDO::PARAM_STR);
    $stmt->bindParam(":entre",$_POST["interviewer"],PDO::PARAM_STR);
    $stmt->bindParam(":urlp",$_POST["url"],PDO::PARAM_STR);
    $stmt->bindParam(":correo",$_POST["email"],PDO::PARAM_STR);
    $stmt->bindParam(":id_li",$persona3["idlicencia"],PDO::PARAM_INT);

    $stmt->execute();

    echo "guardado";
}else{
    echo "no-pago";
}
}