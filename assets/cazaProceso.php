<?php
include 'listar.php';

session_start();

$nombre_usuario1 = $_SESSION['usuario'];

$sentencia3 = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia3->execute([$nombre_usuario1]);

$persona3 = $sentencia3->fetch();

if (isset($_POST["name"])) {

    if ($persona3["opcion"] == "Pago") {

        $stmt = $connect->prepare("INSERT INTO caza_proceso(nom_contacto,correo_contacto,tel_contacto,emp_contacto,pos_contacto,id_pais,id_area,id_mercado,id_licencia) VALUES(:nom,:correo,:tele,:empre,:posi,:pais,:area,:mercado,:idli)");

        $stmt->bindParam(":nom", $_POST["name"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $_POST["email"],PDO::PARAM_STR);
        $stmt->bindParam(":tele", $_POST["phone"],PDO::PARAM_STR);
        $stmt->bindParam(":empre", $_POST["company"],PDO::PARAM_STR);
        $stmt->bindParam(":posi", $_POST["position"],PDO::PARAM_STR);
        $stmt->bindParam(":pais", $_POST["country_id"],PDO::PARAM_INT);
        $stmt->bindParam(":area", $_POST["area_id"],PDO::PARAM_INT);
        $stmt->bindParam(":mercado", $_POST["market_id"],PDO::PARAM_INT);
        $stmt->bindParam(":idli", $persona3["idlicencia"],PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "guardado";
        }else{
            echo $stmt->errorInfo();
        }

        $stmt = null;

    }else{
        echo "no-pago";
    }

}

if (isset($_POST["listarC"])) {
    if ($persona3["opcion"] == "Pago") {

        $html = '';
        if ($_POST["listarC"] == "undefined") {
            $pagina = 1;
        } else {
            $pagina = $_POST["listarC"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM caza_proceso WHERE id_licencia = :id_li LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();

        if (count($respuesta) < 1) {
            echo '<div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            Todavía no recibió notificaciones.
        </div>';
        }

        foreach ($respuesta as $key => $value) :
            $html .= '<div class="panel panel-default panel-job pan-areas">
                        <input type="text" class="caza" style="display:none;" value="'.$value["id_caza"].'">
                        <div class="panel-heading" role="tab" id="heading-jobs-2501">
                            <label for="caza'.$key.'" class="panel-title input_ca"style="width: 100%; ">
                                <span role="button" class="collapsed">
                                '.$value["nom_contacto"].' - '.$value["emp_contacto"].' </span>
                                <span class="label label-default pull-right">
                                    <i class="fas fa-user"></i>
                                </span>
                            </label>
                        </div>
                    </div>';
        endforeach;

        $stmt = $connect->prepare("SELECT * FROM caza_proceso WHERE id_licencia = :id_li");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-caza" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-caza" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-caza" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;

    }
}

if (isset($_POST["detalle_ca"])) {
    if ($persona3["opcion"] == "Pago") {
        $stmt = $connect->prepare("SELECT * FROM caza_proceso p INNER JOIN area a ON p.id_area = a.id_area INNER JOIN pais i ON p.id_pais= i.id_pais INNER JOIN mercado m ON p.id_mercado= m.id_mercado WHERE p.id_caza = :id_li");
        $stmt->bindParam(":id_li", $_POST["detalle_ca"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetch();
        $html = '';

        $html .= '
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4">
                    <b>Nombre Contac.</b>
                    <p>'.$respuesta["nom_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Correo</b>
                    <p>'.$respuesta["correo_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Telefono</b>
                    <p>'.$respuesta["tel_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Empresa</b>
                    <p>'.$respuesta["emp_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Posición</b>
                    <p>'.$respuesta["pos_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Pais</b>
                    <p>'.$respuesta["nom_pais"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Area</b>
                    <p>'.$respuesta["nombre_area"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Mercado</b>
                    <p>'.$respuesta["mercado_contacto"].'</p>
                </div>
            </div>
        </div>
        ';
        echo $html;
    }
}

if (isset($_POST["listarR"])) {
    if ($persona3["opcion"] == "Pago") {

        $html = '';
        if ($_POST["listarR"] == "undefined") {
            $pagina = 1;
        } else {
            $pagina = $_POST["listarR"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM caza_proceso WHERE  id_licencia <> :id_li LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();
        if (count($respuesta) < 1) {
            echo '<div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            Todavía no recibió notificaciones.
        </div>';
        }

        foreach ($respuesta as $key => $value) :
            $html .= '<div class="panel panel-default panel-job pan-areas">
                        <input type="text" class="caza" style="display:none;" value="'.$value["id_caza"].'">
                        <div class="panel-heading" role="tab" id="heading-jobs-2501">
                            <label for="caza'.$key.'" class="panel-title input_caR"style="width: 100%; ">
                                <span role="button" class="collapsed">
                                '.$value["nom_contacto"].' - '.$value["emp_contacto"].' </span>
                                <span class="label label-default pull-right">
                                    <i class="fas fa-user"></i>
                                </span>
                            </label>
                        </div>
                    </div>';
        endforeach;

        $stmt = $connect->prepare("SELECT * FROM caza_proceso WHERE id_licencia = :id_li");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-cazaR" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-cazaR" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-cazaR" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;

    }
}

if (isset($_POST["detalle_caR"])) {
    if ($persona3["opcion"] == "Pago") {
        $stmt = $connect->prepare("SELECT * FROM caza_proceso p INNER JOIN area a ON p.id_area = a.id_area INNER JOIN pais i ON p.id_pais= i.id_pais INNER JOIN mercado m ON p.id_mercado= m.id_mercado WHERE p.id_caza = :id_li");
        $stmt->bindParam(":id_li", $_POST["detalle_caR"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetch();
        $html = '';

        $html .= '
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4">
                    <b>Nombre Contac.</b>
                    <p>'.$respuesta["nom_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Correo</b>
                    <p>'.$respuesta["correo_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Telefono</b>
                    <p>'.$respuesta["tel_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Empresa</b>
                    <p>'.$respuesta["emp_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Posición</b>
                    <p>'.$respuesta["pos_contacto"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Pais</b>
                    <p>'.$respuesta["nom_pais"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Area</b>
                    <p>'.$respuesta["nombre_area"].'</p>
                </div>
                <div class="col-xs-4">
                    <b>Mercado</b>
                    <p>'.$respuesta["mercado_contacto"].'</p>
                </div>
            </div>
        </div>
        ';
        echo $html;
    }
}