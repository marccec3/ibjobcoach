<?php
include 'listar.php';

session_start();

$nombre_usuario1 = $_SESSION['usuario'];

$sentencia3 = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia3->execute([$nombre_usuario1]);

$persona3 = $sentencia3->fetch();

if (isset($_POST["listarM"])) {

    if ($persona3["opcion"] == "Pago" && $_POST["dato"] == "undefined") {
        $html = '';
        if ($_POST["listarM"] == "undefined" || empty($_POST["listarM"])) {
            $pagina = 1;
        } else {
            $pagina = $_POST["listarM"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 1 and id_licencia = :id_li LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();

        foreach ($respuesta as $key => $value) :
            $nombre = explode(".", $value["nom_arch"]);
            if ($nombre[1] == "csv") {
                $icono = '<i class="far fa-file-excel"></i>';
            } else {
                $icono = '<i class="fas fa-file-archive"></i>';
            }
                $html .= '
                        <div class="col-12">
                            <div class="panel panel-default panel-job pan-areas">
                                <div class="panel-heading" role="tab" id="heading-jobs-2501">
                                    <div class="pull-left">
                                        <form class="user_check" role="tablist">
                                            <input type="hidden" class="input-check" value="' . $value["id_linke"] . '">
                                            <div class="form-check">
                                                <input class="form-check-input check-ajax" type="checkbox" value="job" id="2501">
                                            </div>
                                        </form>
                                    </div>
                                    <h4 class="panel-title">
                                        <a href="' . $value["url_link"] . '" role="button" class="open-dis">
                                        ' . $nombre[0] . ' </a>
                                        <span class="label label-default pull-right">' . $icono . '</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        ';
        endforeach;


        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 1 and id_licencia = :id_li");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-linked" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-linked" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-linked" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;
    }else{
        $html = '';
        if ($_POST["listarM"] == "undefined" || empty($_POST["listarM"])) {
            $pagina = 1;
        } else {
            $pagina = $_POST["listarM"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 1 and id_licencia = :id_li and nom_arch LIKE '%".$_POST["dato"]."%' LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();

        foreach ($respuesta as $key => $value) :
            $nombre = explode(".", $value["nom_arch"]);
            if ($nombre[1] == "csv") {
                $icono = '<i class="far fa-file-excel"></i>';
            } else {
                $icono = '<i class="fas fa-file-archive"></i>';
            }
                $html .= '
                        <div class="col-12">
                            <div class="panel panel-default panel-job pan-areas">
                                <div class="panel-heading" role="tab" id="heading-jobs-2501">
                                    <div class="pull-left">
                                        <form class="user_check" role="tablist">
                                            <input type="hidden" class="input-check" value="' . $value["id_linke"] . '">
                                            <div class="form-check">
                                                <input class="form-check-input check-ajax" type="checkbox" value="job" id="2501">
                                            </div>
                                        </form>
                                    </div>
                                    <h4 class="panel-title">
                                        <a href="' . $value["url_link"] . '" role="button" class="open-dis">
                                        ' . $nombre[0] . ' </a>
                                        <span class="label label-default pull-right">' . $icono . '</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        ';
        endforeach;


        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 1 and id_licencia = :id_li AND nom_arch LIKE '%".$_POST["dato"]."%'");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-linked" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-linked" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-linked" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;
    }
}

if (isset($_POST["listaVa"])) {

    if ($persona3["opcion"] == "Pago" && $_POST["dato"] == "undefined") {
        $html = '';
        if ($_POST["listaVa"] == "undefined" || empty($_POST["listaVa"])) {
            $pagina = 1;
        } else {
            $pagina = $_POST["listaVa"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 2 and id_licencia = :id_li LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();
        $print = '';
        foreach ($respuesta as $key => $value) :
            $nombre = explode(".", $value["nom_arch"]);
            if ($nombre[1] == "csv") {
                $icono = '<i class="far fa-file-excel"></i>';
            } else {
                $icono = '<i class="fas fa-file-archive"></i>';
            }
                $print .= '
                        <div class="col-12">
                            <div class="panel panel-default panel-job pan-areas">
                                <div class="panel-heading" role="tab" id="heading-jobs-2501">
                                    <div class="pull-left">
                                        <form class="user_check" role="tablist">
                                            <input type="hidden" class="input-check" value="' . $value["id_linke"] . '">
                                            <div class="form-check">
                                                <input class="form-check-input check-ajax" type="checkbox" value="job" id="2501" checked>
                                            </div>
                                        </form>
                                    </div>
                                    <h4 class="panel-title">
                                        <a href="' . $value["url_link"] . '" role="button" class="open-dis">
                                        ' . $nombre[0] . ' </a>
                                        <span class="label label-default pull-right">' . $icono . '</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        ';
        endforeach;

        $html .= $print;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin  WHERE valor = 2 and id_licencia = :id_li");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-linked2" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-linked2" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-linked2" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;
    }else{

        $html = '';
        if ($_POST["listaVa"] == "undefined" || empty($_POST["listaVa"])) {
            $pagina = 1;
        } else {
            $pagina = $_POST["listaVa"];
        }

        $limite = 5;
        $inicio = ($pagina - 1) * $limite;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin WHERE valor = 2 and id_licencia = :id_li AND nom_arch LIKE '%".$_POST["dato"]."%' LIMIT $inicio, $limite");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = $stmt->fetchAll();
        $print = '';
        foreach ($respuesta as $key => $value) :
            $nombre = explode(".", $value["nom_arch"]);
            if ($nombre[1] == "csv") {
                $icono = '<i class="far fa-file-excel"></i>';
            } else {
                $icono = '<i class="fas fa-file-archive"></i>';
            }
                $print .= '
                        <div class="col-12">
                            <div class="panel panel-default panel-job pan-areas">
                                <div class="panel-heading" role="tab" id="heading-jobs-2501">
                                    <div class="pull-left">
                                        <form class="user_check" role="tablist">
                                            <input type="hidden" class="input-check" value="' . $value["id_linke"] . '">
                                            <div class="form-check">
                                                <input class="form-check-input check-ajax" type="checkbox" value="job" id="2501" checked>
                                            </div>
                                        </form>
                                    </div>
                                    <h4 class="panel-title">
                                        <a href="' . $value["url_link"] . '" role="button" class="open-dis">
                                        ' . $nombre[0] . ' </a>
                                        <span class="label label-default pull-right">' . $icono . '</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        ';
        endforeach;

        $html .= $print;

        $stmt = $connect->prepare("SELECT * FROM arc_linkedin  WHERE valor = 2 and id_licencia = :id_li AND nom_arch LIKE '%".$_POST["dato"]."%'");
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_INT);
        $stmt->execute();
        $respuesta1 = $stmt->fetchAll();

        $total_pagina = ceil(count($respuesta1) / $limite);

        $html .= '
            <nav style="display:flex; justify-content: center;"><ul class="pagination pagination-md">
        ';
        if ($pagina > 1) {
            $html .= '<li class="page-item"><a class="page-link pages-linked2" href="#" page="' . ($pagina - 1) . '">Anterior</a></li>';
        }
        for ($i = 1; $i <= $total_pagina; $i++) {
            $clase_activa = "";
            if ($i == $pagina) {
                $clase_activa = "active";
            }
            $html .= '<li class="page-item ' . $clase_activa . '"><a class="page-link pages-linked2" href="#" page="' . $i . '">' . $i . '</a></li>';
        }

        if ($pagina < $total_pagina) {
            $pagina++;
            $html .= '<li class="page-item"><a class="page-link pages-linked2" href="" page="' . $pagina . '">Siguiente</a></li>';
        }

        $html .= '</ul></nav>';

        echo $html;

    }

}


if (isset($_POST["actuaL"]) && isset($_POST["id"])) {

    if ($_POST["actuaL"] == "1") {
        $stmt = $connect->prepare("UPDATE arc_linkedin SET valor = :valor WHERE id_linke = :id");
        $stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
        $stmt->bindParam(":valor", $_POST["actuaL"], PDO::PARAM_STR);
        $stmt->execute();
    }

    if ($_POST["actuaL"] == "2") {
        $stmt = $connect->prepare("UPDATE arc_linkedin SET valor = :valor WHERE id_linke = :id");
        $stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
        $stmt->bindParam(":valor", $_POST["actuaL"], PDO::PARAM_STR);
        $stmt->execute();
    }
} if(isset($_FILES['linkedin-file-upload-input'])) {

    if ($persona3["opcion"] == "Pago") {
        $nombre_temporal = $_FILES['linkedin-file-upload-input']['tmp_name'];
        $nombre = $_FILES['linkedin-file-upload-input']['name'];
        $ruta = 'miArchivos/linkedin/' . $nombre;
        $valor = "1";
        $stmt = $connect->prepare("INSERT INTO arc_linkedin(url_link,nom_arch,valor,id_licencia) VALUES(:ruta,:nom,:valor,:id_li)");

        $stmt->bindParam(":ruta", $ruta, PDO::PARAM_STR);
        $stmt->bindParam(":nom", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":valor", $valor, PDO::PARAM_STR);
        $stmt->bindParam(":id_li", $persona3["idlicencia"], PDO::PARAM_STR);

        $stmt->execute();

        move_uploaded_file($nombre_temporal, 'miArchivos/linkedin/' . $nombre);
        echo "guardado";
    } else {
        echo "no-pago";
    }
}
