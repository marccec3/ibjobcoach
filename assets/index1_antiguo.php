<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    session_destroy();
    //consulta usuario
}
$_SESSION['prueba'] = "prueba1";
include 'listar.php';
$nombre_usuario = $_SESSION['usuario'];

$sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
$sentencia->execute([$nombre_usuario]);

$persona = $sentencia->fetch(PDO::FETCH_OBJ);



$usuario = $persona->correo;
$estado = $persona->opcion;
$usuariPost = $persona->nombrecliente;
$usuariPost1 = $persona->apellidocliente;
$_SESSION['name_user'] = $usuariPost;
$_SESSION['last_name'] = $usuariPost1;
$_SESSION['idlicencia'] = $persona->idlicencia;
$_SESSION['fase_1'] = $persona->fase_1;
$_SESSION['fase_2'] = $persona->fase_2;
$_SESSION['fase_3'] = $persona->fase_3;
$fase1 = $persona->fase_1;
$fase2 = $persona->fase_2;
$fase3 = $persona->fase_3;

//consulta datos2
$sentencia_2 = $connect->prepare("SELECT * FROM cliente where idlicencia = ?");
$sentencia_2->execute([$persona->idlicencia]);
$persona2 = $sentencia_2->fetch(PDO::FETCH_OBJ);

$memuero = $persona2->document;
//Consultas para el foro
$sentencia = $connect->query("SELECT f.idforo, f.autor,f.foto,f.fecha,f.titulo,f.vistas FROM foro f ORDER BY fecha DESC");
$foros = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es-cl">

<head>
    <!-- Google Tag Manager -->
    <!--
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DRTM5D');

    </script>
-->
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title>IBjobcoach</title>
    <base href="index.php">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="./admin/fonts/css/all.css">
    <link rel="stylesheet" href="./admin/fonts/css/v4-shims.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/intl-tel-input/build/css/intlTelInput.css"> -->

    <link rel="stylesheet" type="text/css" href="plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="dna/css/outplacement.css"> -->
    <link rel="stylesheet" type="text/css" href="dna/css/user-tasks.css">
    <link rel="stylesheet" type="text/css" href="dna/css/material-kit.css">
    <link rel="stylesheet" type="text/css" href="admin/css/chat.css">
    <link rel="stylesheet" type="text/css" href="admin/css/forum.css">
    <link rel="stylesheet" type="text/css" href="dna/css/styles.css?v=20200416">
    <link rel="stylesheet" type="text/css" href="dna/css/font-icons.css">
    <link rel="stylesheet" type="text/css" href="dna/css/font-icons2.css">
    <link rel="stylesheet" type="text/css" href="dna/css/circle.css">
    <link rel="stylesheet" type="text/css" href="dna/css/head.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="icon" href="dna/img/icono.png">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="//js.hs-analytics.net/analytics/1592572500000/6674506.js" type="text/javascript" id="hs-analytics"></script>

</head>

<body class="loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CJBNJV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <header class="tarja-azul">
        <div class="container" style="padding: 0">
            <div class="row">
                <div class="col-xs-3 col-md-2">
                    <a class="logo" href="index1.php">
                        <img src="dna/img/ibjobcoach.jpg" style="height:100%; width: 170px; margin-top:10px">
                    </a>
                </div>
                <div class="col-xs-9 col-md-10">
                    <div class="header-nav">
                        <ul class="scroll-to-tab">
                            <b class="col-xs-2">
                                <li class="active">
                                    <a href="/#manual-tab" onclick="openNavArea('manual'); closeNav()" class="a-nav-button" aria-controls="manual-tab" role="tab" data-toggle="tab" aria-expanded="true">
                                        <i class="far fa-compass"></i>
                                        <br>
                                        <span>Manual del Usuario</span>
                                    </a>
                                </li>
                            </b>
                            <b class="col-xs-2">
                                <li class="active">
                                    <a href="#fases-genes" onclick="openNavArea('fases-genes'); closeNav()" class="a-nav-button" aria-controls="fases-genes" role="tab" data-toggle="tab" aria-expanded="true">
                                        <i class="fas fa-tasks"></i>
                                        <br>
                                        <span>Mi Programa</span>
                                    </a>
                                </li>
                            </b>
                            <b class="col-xs-1">
                                <li class="active">
                                    <a href="/#jobs-tab" onclick="openNavArea('jobs'); closeNav()" class="a-nav-button" aria-controls="jobs-tab" role="tab" data-toggle="tab">
                                        <i class="fas fa-briefcase"></i>
                                        <br />
                                        <span>Jobs</span>
                                    </a>
                                </li>
                            </b>
                            <b class="col-xs-2" id="library-nav-b">
                                <li class="active">
                                    <a href="/#library-tab" onclick="openNavArea('library'); closeNav()" class="a-nav-button" aria-controls="library" role="tab" data-toggle="tab">
                                        <i class="fas fa-book"></i>
                                        <br />
                                        <span>Biblioteca</span>
                                    </a>
                                </li>
                            </b>
                            <b id="right-nav-buttons" class="col-md-5 col-lg-5 col-xs-12">
                                <li class="header-profile" onclick="toggleProfile()">
                                    <div class="dropdown" id="perfil">
                                        <div id="dropdownPerfil" class="dropdown-toggle" alt="Pablo Perez">
                                            <i class="fas fa-user"></i>
                                            <br />
                                            <span>Mi Perfil</span>
                                        </div>
                                        <div class="dropdown-menu active" aria-labelledby="dropdownPerfil">
                                            <a class="dropdown-item scroll-to-tab" href="/#perfil-tab" onclick="openNavArea('perfil'); closeNav()" aria-controls="perfil-tab" role="tab" data-toggle="tab" aria-expanded="true">
                                                <img src="<?php echo ($persona2->avatar == NULL || $persona2->avatar == "") ? "image/users/usuario_default.png" : $persona2->avatar; ?>" alt="foto" class="img-fluid img-thumbnail rounded-circle previsualizar">
                                                <div class="dropdown-profile-text ">
                                                    <p class="profile-user-name bold" name="email"><?php echo $persona->nombrecliente . " " . $persona->apellidocliente ?></p>
                                                    <p class="profile-see-profile">Ver Perfil</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item no-scroll" href="javascript: void(0);" data-toggle="modal" data-target="#modal-found-a-job" class="btn btn-primary btn-sm">
                                                <span>Encontré Trabajo</span>
                                            </a>
                                            <a class="dropdown-item logout-item no-scroll" href="log_out.php" class="btn btn-primary btn-sm" id="logout">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Salir</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li onclick="toogleNav()" style="margin-left: 18px;">
                                    <a href="javascript:void(0)" class="no-scroll">
                                        <i class="fas fa-list"></i>
                                        <br />
                                        <span>Herramientas</span>
                                    </a>
                                </li>
                            </b>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="side-menu">
        <div class="close-side-menu">
            <a class="close-menu-button" href="javascript:void(0)" onclick="toogleNav()">&times;</a>
        </div>
        <ul class="scroll-to-tab side-menu-area-item">
            <a href="https://www.poliglota.org/test-online" target="_blank">
                <li>
                    <div class="menu-icon">
                        <img src="dna/img/poliglota-logo.png" width="20px" alt="Poliglota">
                        <!-- <i class="icon-poliglota"></i> -->
                    </div>
                    <span>Poliglota - Prueba de Inglés</span>
                </li>
            </a>
            <a href="/#jobs-tab" aria-controls="jobs-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('jobs'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-briefcase"></i></div>
                    <span>Jobs</span>
                </li>
            </a>
            <a href="/#videos-tab" aria-controls="videos-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('videos'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-file-video-o"></i></div>
                    <span>Videos de los Programa</span>
                </li>
            </a>
            <a href="/#outplacement-tab" aria-controls="outplacement-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('Templates'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-file-o"></i></div>
                    <span>Templates</span>
                </li>
            </a>
            <a href="/#headhunters-tab" aria-controls="headhunters-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('headhunters'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-street-view"></i></div>
                    <span>HeadHunters</span>
                </li>
            </a>
            <a href="/#recruiters-tab" aria-controls="recruiters-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('reclutadores'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-search"></i></div>
                    <span>Reclutadores</span>
                </li>
            </a>
            <a href="/#smtm-tab" aria-controls="smtm-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('smtm'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-money"></i></div>
                    <span>Informes Salariales</span>
                </li>
            </a>
            <a href="/#employability-tab" aria-controls="employability-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('employability'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-area-chart"></i></div>
                    <span>Análisis de Empleabilidad</span>
                </li>
            </a>
            <a href="/#agenda-tab" aria-controls="agenda-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('agenda'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-calendar"></i></div>
                    <span>Planilla de Agenda Optima</span>
                </li>
            </a>
            <a href="/#companies-tab" aria-controls="companies-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('companies'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-building"></i></div>
                    <span>Empresas por industria</span>
                </li>
            </a>
            <a href="/#descriptions-tab" aria-controls="descriptions-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('descriptions'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-id-card-o"></i></div>
                    <span>Descripciones de Cargos</span>
                </li>
            </a>
            <a href="/#translation-tab" aria-controls="translation-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('translation'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-font"></i></div>
                    <span>Traducción de CV</span>
                </li>
            </a>
            <a href="/#business-tab" aria-controls="business-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('Emprendimiento'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-puzzle-piece"></i></div>
                    <span>Emprendimiento</span>
                </li>
            </a>
            <a href="/#shelf-tab" aria-controls="shelf-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('Peliculas y Libros'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-film"></i></div>
                    <span>Peliculas y Libros</span>
                </li>
            </a>
            <a href="/#linkedin-content-tab" aria-controls="linkedin-content-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('linkedin-content'); closeNav()">
                    <div class="menu-icon"><i class="fab fa-linkedin-in"></i></div>
                    <span>Contenido de Linkedin</span>
                </li>
            </a>
            <a href="/#financial-tab" aria-controls="financial-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('financial'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-calculator"></i></div>
                    <span>Herramienta de planificación financiera</span>
                </li>
            </a>
            <a href="/#tendencies-tab" aria-controls="tendencies-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('tendencies'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-line-chart"></i></div>
                    <span>Nuevas Tendencias Laborales</span>
                </li>
            </a>
            <a href="/#young-tab" aria-controls="young-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('young'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-child"></i></div>
                    <span>Joven Emprendedor</span>
                </li>
            </a>
            <a href="/#coworks-tab" aria-controls="coworks-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('coworks'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-link"></i></div>
                    <span>Lista de Coworkings</span>
                </li>
            </a>
            <a href="/#forum-tab" aria-controls="forum-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('forum'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-comments-o"></i></div>
                    <span>Foro de discusión</span>
                </li>
            </a>
            <a href="/#my-area-tab" aria-controls="my-area-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('my-area'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-user"></i></div>
                    <span>Mi información</span>
                </li>
            </a>
            <a href="/#live-tab" aria-controls="live-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('live'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-video-camera"></i></div>
                    <span>Webinars en vivo</span>
                </li>
            </a>
            <a href="/#firstjob-tab" aria-controls="firstjob-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('firstjob'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-search"></i></div>
                    <span>Buscando tu primer Trabajo</span>
                </li>
            </a>
            <a href="/#linkedin-tab" aria-controls="linkedin-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('linkedin'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-linkedin-square"></i></div>
                    <span>LinkedIn</span>
                </li>
            </a>
            <a href="/#cv-tab" aria-controls="cv-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('cv'); closeNav()">
                    <div class="menu-icon"><i class="far fa-file-alt"></i></div>
                    <span>CV</span>
                </li>
            </a>
            <a href="/#prospeccao-redes-tab" aria-controls="prospeccao-redes-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('prospeccao-redes'); closeNav()">
                    <div class="menu-icon"><i class="fas fa-chart-area"></i></div>
                    <span>Prospección y redes</span>
                </li>
            </a>
            <a href="/#proposta-valor-tab" aria-controls="proposta-valor-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('proposta-valor'); closeNav()">
                    <div class="menu-icon"><i class="fas fa-chart-line"></i></div>
                    <span>Propuesta de Valor</span>
                </li>
            </a>
            <a href="areas.php?=#tecnicas-entrevista-tab" aria-controls="tecnicas-entrevista-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('tecnicas-entrevista'); closeNav()">
                    <div class="menu-icon"><i class="far fa-comments"></i></div>
                    <span>Técnicas de entrevistas</span>
                </li>
            </a>
            <a href="/#valor-mercado-tab" aria-controls="valor-mercado-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('valor-mercado'); closeNav()">
                    <div class="menu-icon"><i class="fas fa-money-bill"></i></div>
                    <span>Valor de mercado</span>
                </li>
            </a>
            <a href="/#match-mercado-tab" aria-controls="match-mercado-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('match-mercado'); closeNav()">
                    <div class="menu-icon"><i class="far fa-building"></i></div>
                    <span>Match de Mercado</span>
                </li>
            </a>
            <a href="/#conhecimento-pessoal-tab" aria-controls="conhecimento-pessoal-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('conhecimento-pessoal'); closeNav()">
                    <div class="menu-icon"><i class="fas fa-user"></i></div>
                    <span>Conocimiento personal</span>
                </li>
            </a>
            <a href="/#manual-tab" aria-controls="manual-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('manual'); closeNav()">
                    <div class="menu-icon"><i class="far fa-compass"></i></div>
                    <span>Manual del Usuario</span>
                </li>
            </a>
            <a href="/#boards-tab" aria-controls="boards-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('boards'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-address-book-o"></i></div>
                    <span>Job Boards</span>
                </li>
            </a>
            <a href="/#alumni-tab" aria-controls="alumni-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('alumni'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-user-circle-o"></i></div>
                    <span>Alumni de usuários</span>
                </li>
            </a>
            <a href="/#courses-tab" aria-controls="courses-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('courses'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-hand-pointer-o"></i></div>
                    <span>Cursos Online</span>
                </li>
            </a>
            <a href="/#process-tab" aria-controls="process-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('process'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-file-text"></i></div>
                    <span>Caza al Proceso</span>
                </li>
            </a>
            <a href="/#partners-tab" aria-controls="partners-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('partners'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-building-o"></i></div>
                    <span>Empresas Partners</span>
                </li>
            </a>
            <a href="/#my-consultant-tab" aria-controls="my-consultant-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('my-consultant'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-graduation-cap"></i></div>
                    <span>Mi Consultor</span>
                </li>
            </a>
            <a href="/#library-tab" aria-controls="library-tab" role="tab" data-toggle="tab">
                <li onclick="openNavArea('Biblioteca'); closeNav()">
                    <div class="menu-icon"><i class="fa fa-book"></i></div>
                    <span>Biblioteca de empleabilidad</span>
                </li>
            </a>

        </ul>
    </div>
    <div id="menu-overflow" onclick="toogleNav()"></div>
    <!----------------------------------------------------------------------------- todo lo relacionado a menus-------------------------->

    <!-- Modal Encontré Trabajo -->
    <div class="modal fade" id="modal-found-a-job" tabindex="-1" role="dialog" aria-labelledby="modal-found-a-job-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="registroTrabajo.php" method="post" class="ajax1">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="modal-title center " id="modal-found-a-job-label">¡ENCONTRÉ TRABAJO!</h1>
                    </div>
                    <div class="modal-body">
                        <h3 class="center">Felicidades! Es hora de asumir un nuevo desafío!</h3>
                        <h3 class="center">Outplacement lo felicita!</h3>
                        <h3 class="center">Ayúdenos a entender sobre este paso en su carrera</h3>
                        <h3 class="center"> contestando a las siguientes preguntas:</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="working-company">
                                        <!--<i class="far fa-building"></i>-->
                                        EMPRESA:
                                    </label>
                                    <input type="text" name="company" id="working-company" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="working-position">
                                        <!--<i class="fas fa-cubes"></i>-->
                                        POSICIÓN:
                                    </label>
                                    <input type="text" name="position" id="working-position" class="form-control" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="working-search_duration">
                                        <!--<i class="fad fa-search"></i>-->
                                        MESES BUSCANDO TRABAJO:
                                    </label>
                                    <select name="search_duration" id="working-search_duration" class="form-control">
                                        <option value="">(Seleccione)</option>
                                        <option value="0">Menos de 1 mes</option>
                                        <option value="1">1 mes</option>
                                        <option value="2">2 meses </option>
                                        <option value="3">3 meses </option>
                                        <option value="4">4 meses </option>
                                        <option value="5">5 meses </option>
                                        <option value="6">6 meses </option>
                                        <option value="7">7 meses </option>
                                        <option value="8">8 meses </option>
                                        <option value="9">9 meses </option>
                                        <option value="10">10 meses </option>
                                        <option value="11">11 meses </option>
                                        <option value="12">1 año </option>
                                        <option value="24">2 años </option>
                                        <option value="36">3 años </option>
                                        <option value="48">4 años </option>
                                        <option value="60">5 años </option>
                                        <option value="72">6 años </option>
                                        <option value="84">7 años </option>
                                        <option value="96">8 años </option>
                                        <option value="108">9 años </option>
                                        <option value="120">10 años ou mais </option>
                                    </select>
                                </div>
                            </div><!-- Modal Encontre trabajo -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="working-salary">
                                        <!--<i class="fas fa-dollar-sign"></i>-->
                                        SUELDO:
                                    </label>
                                    <input type="text" name="salary" id="working-salary" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="working-through_genes">
                                        <!--<i class="fa"></i>-->
                                        Encontró la posición </br>a través de IBjobcoach?
                                    </label>
                                    <div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="through_genes" value="yes" id="working-through_genes">
                                                Sí </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="through_genes" value="no">
                                                No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="working-recommend_dna">
                                        <!--<i class="fa"></i>-->
                                        Recomendaría IBjobcoach </br>a sus contactos?
                                    </label>
                                    <div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="recommend_dna" value="yes" id="working-recommend_dna">
                                                Sí </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="recommend_dna" value="no">
                                                No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="working-recommend_genes">
                                        <!--<i class="fa"></i>-->
                                        Recomendaría IBOutPlacement </br>a sus contactos?
                                    </label>
                                    <div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="recommend_genes" value="yes" id="working-recommend_genes">
                                                Sí </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="recommend_genes" value="no">
                                                No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="message">
                                        <i class="fa"></i>
                                        DEJE SUS COMENTARIOS: </label>
                                    <textarea name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer center">
                        <input type="hidden" name="name" value="Pablo Perez">
                        <input type="hidden" name="email" value="ppabloperez905@gmail.com">
                        <input type="hidden" name="phone" value="">
                        <input type="hidden" name="formId" value="found-a-job">
                        <input type="hidden" name="user_id" value="14714">
                        <input type="hidden" name="country" value="Perú">
                        <button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fim da Modal Encontrei um Trabalho -->

    <!-- VÍDEO (espanhol) -->
    <div class="modal fade" id="modal-tutorial-es" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-test="">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn-fechar-tutorial" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Manejo del estres en tiempo de coronavirus</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 2em;">
                        <iframe src="https://www.youtube.com/embed/aHXneAtL5Jw" frameborder="0" class="embed-responsive-item" id="video-es"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-fechar-tutorial" data-dismiss="modal">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO VÍDEO -->

    <!----------------------------------panel y carrusel de Perfil ------------------------->
    <div class="container p-0 banner-perfil-dna">
        <div class="" id="perfilcontent">
            <!--enlace--><a href="/#perfil-tab" onclick="openNavArea('perfil'); closeNav()" aria-controls="perfil-tab" role="tab" data-toggle="tab">
                <figure class="img">
                    <img src="<?php echo ($persona2->avatar == NULL || $persona2->avatar == "") ? "image/users/usuario_default.png" : $persona2->avatar; ?>" alt="foto" class="img-fluid img-thumbnail rounded-circle previsualizar1">
                </figure>
            </a>
            <div class="col-md-6 perfil-left">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <div class="row col-md-7 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-1 ">
                            <div class="col-md-12">
                                <p class="txt-banner-section center p-1"><?php echo $usuariPost ?>, este es tu progreso... </p>
                            </div>
                            <!------------------------  PROGRESO DINAMICO  ------------------------------->
                            <div class="col-md-12">
                                <!--enlace-->
                                <a href="/#jobs-tab" class="" aria-controls="jobs-tab" role="tab" data-toggle="tab">
                                    <i class="fas fa-id-card-alt icone-novos-conteudos" onclick="openNavArea('jobs'); closeNav()"></i>
                                </a>
                                <!------------------------  JOBS CONTABLE-------------------------------->
                                <p class="num-dados-novos margin-dados job"><?php echo ($persona->jobs == "0") ? "0" : count(explode('|', $persona->jobs)); ?> </p>
                                <p class=" margin-dados">Jobs aplicados</p>
                            </div>
                            <div class="col-md-12">
                                <!--enlace--><a href="/#headhunters-tab" onclick="openNavArea('headhunters'); closeNav()" class="" aria-controls="headhunters-tab" role="tab" data-toggle="tab">
                                    <i class="fas fa-users icone-novos-conteudos"></i>
                                </a>
                                <!------------------------  HEADHUNTERS CONTABLE-------------------------------->
                                <p class="num-dados-novos margin-dados headhunter"><?php echo ($persona->headhunters == "0") ? "0" : count(explode('|', $persona->headhunters)); ?> </p>
                                <p class=" margin-dados">Headhunters contactados</p>
                            </div>
                            <div class="col-md-12">
                                <!--enlace--><a href="/#recruiters-tab" onclick="openNavArea('reclutadores'); closeNav()" class="" aria-controls="recruiters-tab" role="tab" data-toggle="tab">
                                    <i class="fas fa-street-view icone-novos-conteudos"></i>
                                </a>
                                <!------------------------  RECLUTADORES CONTABLE-------------------------------->
                                <p class="num-dados-novos margin-dados recruiter"><?php echo ($persona->reclutadores == "0") ? "0" : count(explode('|', $persona->reclutadores)); ?></p>
                                <p class=" margin-dados">Reclutadores contactados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 perfil-right">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="txt-banner-section center txt-right">Novedades en IBjobcoach </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="banner owl-carousel owl-theme">
                                <div class="item banner col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 half-left">
                                            <i class="fas fa-id-card-alt icone-dados"></i>
                                        </div>
                                        <div class="col-md-6 half-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left first">+ 10.007 </p>
                                                    <p class="txt-dados left">en este mes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left">244.419 </p>
                                                    <p class="txt-dados left">Ofertas de empleo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item banner col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 half-left">
                                            <i class="fa fa-folder-open icone-dados"></i>
                                        </div>
                                        <div class="col-md-6 half-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left first">+ 0 </p>
                                                    <p class="txt-dados left">en este mes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left">
                                                        45 </p>
                                                    <p class="txt-dados left">Templates</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item banner col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 half-left">
                                            <i class="fas fa-file icone-dados"></i>
                                        </div>
                                        <div class="col-md-6 half-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left first"> + 11 </p>
                                                    <p class="txt-dados left">en este mes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!------////////biblioteca BD///////------>
                                                    <?php

                                                    $consulta = $connect->prepare("SELECT COUNT(nombre) FROM contenidos where idcategoria=1");
                                                    $consulta->execute();
                                                    $contotalbiblio = $consulta->fetchColumn();
                                                    ?>
                                                    <p class="num-title-novos left"> <?php echo $contotalbiblio; ?></p>
                                                    <!------/////// fin ///////////------>
                                                    <p class="txt-dados left">Contenidos de la biblioteca</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item banner col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 half-left">
                                            <i class="fas fa-file icone-dados"></i>
                                        </div>
                                        <div class="col-md-6 half-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left first"> + 216 </p>
                                                    <p class="txt-dados left">en este mes</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="num-title-novos left"> Material Coaching </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-arrow prev banner"><i class="fas fa-angle-left"></i></div>
                            <div class="carousel-arrow next banner"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="collapse" id="perfilusuario">
        <div class="container margem-perfil">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Información Personal </h3>
                            <div class="panel-tools">
                                <a href="profile.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Editar Perfil">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="sessions-progress">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-center">
                                            Usted completó <strong>0</strong> de las <strong>0</strong> sesiones programadas con los
                                            consultores. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">País de Nacimiento</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">País Actual</p>
                                    <p> <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Países Meta</p>
                                    <p> <img src="./dna/img/bandeirinhas/peru.png" width="10px"> Perú</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Formación (Curso Superior)</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Universidad</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Idiomas</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Experiencia</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Estás trabajando?</p>
                                    <p>No</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">¿Desde hace cuánto tiempo?</p>
                                    <p>N/D</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Última Empresa</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Última Posición</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Posiciones Meta</p>
                                    <p>N/D</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="title">Áreas con Experiencia</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="title">Áreas Meta</p>
                                    <p>Administración</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="title">Mercados con Experiencia</p>
                                    <p>N/D</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="title">Mercados Meta</p>
                                    <p>Energía</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="title">Perfil Profesional</p>
                                    <p>N/D</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Cliente Desde</p>
                                    <p>May. de 2020</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Acceso</p>
                                    <p>Usuario Pleno</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <p class="title">Book de Candidatos</p>
                                    <p><i class="fas fa-fw fa-check-square-o text-success"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------mensaje de alerta -->
    <div class="container alert-video">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="alert alert-success" style="margin-top: 1em; padding: 10px 10px 10px 10px; background-color: red;">
                    <p class="center">Manejo de estrés<a onclick="showTutorialVideo('es', 14714);  hideAlert('alert-video');" href="javascript:void(0);"> aqui</a>
                        <a onclick="hideAlert('alert-video');" href="javascript:void(0);"> <i class="fas fa-times pull-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------- fin mensaje ed alerta ----------------------->
    <!--------------------------- Area de los tres puntos entreanmients , programas  y areas ---------------------------->
    <!--------------------------- Area de los tres puntos entreanmients , programas  y areas ---------------------------->
    <div class="container ">
        <div class="row py-auto" id="big-areas">
            <div class="col-md-5 col-xs-12 big-area-item">
                <img src="dna/img/1.png" width="200" height="200" style="cursor: pointer" onclick="openTrainingArea()" />
                <div class="info-item">
                    <h3>ENTRENAMIENTO</h3>
                    <div>
                        <p class="main_area_desc">Para profesionales que busquen afinar su perfil profesional técnicamente</p>
                        <p class="main-area-obj">OBJETIVO: <br> Desarrollar competencias técnicas y blandas</p>
                    </div>
                </div>
            </div>
            <div class=" big-area-item col-md-5 col-xs-12 ">
                <img src="dna/img/2.jpg" width="200" height="200" style="cursor: pointer" onclick="openProgramArea()" />
                <div class="info-item">
                    <h3>PROGRAMA</h3>
                    <div>
                        <p class="main_area_desc">Para profesionales con un buen perfil que deseen aprender a encontrar más
                            oportunidades laborales.</p>
                        <p class="main-area-obj">OBJETIVO: <br> Recolocarse en el mercado laboral más rápido.</p>
                    </div>
                </div>
            </div>
            <div class=" big-area-item col-md-5 col-xs-12">
                <img src="dna/img/3.png" width="200" height="200" style="cursor: pointer;" onclick="openAreas()" />
                <div class="info-item">
                    <h3>ÁREAS</h3>
                    <div>
                        <p class="main_area_desc">Para profesionales que buscan atacar desafíos puntuales durante su proceso de reinserción.</p>
                        <p class="main-area-obj">OBJETIVO: <br> Encontrar información puntual para continuar el proceso de recolocación.</p>
                    </div>
                </div>
            </div>
            <div class=" big-area-item col-md-5 col-xs-12">
                <img src="dna/img/4.png" width="200" height="200" style="cursor: pointer" onclick="openLearning()" />
                <div class="info-item">
                    <h3>MATERIAL COACHING</h3>
                    <div>
                        <p class="main_area_desc">Para profesionales que buscan nuevas tendencias del mercado.</p>
                        <p class="main-area-obj">OBJETIVO: <br> Encontrar información acorde a las exigencias del mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------ETRENAMIENTO------------------------------------------------>
    <?php
    //include('entrenamiento1.php');
    ?>
    <div class="container hide" id="training-genes">
        <div id="training-wrapper" data-countries="3">
            <div class="panel-group" id="training-content" role="tablist" aria-multiselectable="true">
                <div class="row">
                    <div class="col-md-12">
                        <div class="program-title">
                            <div class="title-in row row-eq-height">
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <a style="padding:0 10px" href="#" onclick="backToHome(event)">
                                        <i class="fa fa-angle-left"></i>
                                        <img src="dna/img/1.png" class="img-fluid img-focus" width="128px" height="128px">
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <h4 class="font-upper">Entrenamiento</h4>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <p class="text-top" style="margin-right: 10%;">
                                        ¿Sabes cuáles son tus oportunidades de mejora? <br>Hemos identificado 41 situaciones que pueden dificultar tu desempeño laboral y te proponemos una serie de videos que te ayudarán a superar tus barreras profesionales. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="nav-tabs-custom">
                                <ul id="training-items" class="nav nav-tabs item-tab color-black owl-carousel owl-theme owl-loaded owl-drag" first-interaction="3" role="tablist">

                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-3" genes-training="3" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Reestructuración</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>

                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-5" genes-training="5" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Rendimiento</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>

                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-6" genes-training="6" data-toggle="tab" aria-expanded="true">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Actitud</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>

                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-7" genes-training="7" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Técnico</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-8" genes-training="8" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Bajo Liderazgo</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-9" genes-training="9" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Baja visión Estratégica</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-11" genes-training="11" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Ética / Compliance</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-12" genes-training="12" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Renta alta</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class="active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-13" genes-training="13" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Mala relación con equipo</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item active" style="width: 204.5px; margin-right: 5px;">
                                        <li class=" active" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-14" genes-training="14" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Baja Motivación</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-15" genes-training="15" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Falta Actualización</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-16" genes-training="16" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Sobre-capacitado</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-17" genes-training="17" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Adaptación</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-18" genes-training="18" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Análisis y resolución de Problemas</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-19" genes-training="19" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Autovalencia</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-20" genes-training="20" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Compromiso</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-21" genes-training="21" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Desarrollo Personal</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-22" genes-training="22" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Desarrollo de Personas</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-23" genes-training="23" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Comunicación</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-24" genes-training="24" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Falta de Desición</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-25" genes-training="25" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Fit Cultural</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-26" genes-training="26" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Gestión del Cambio</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-27" genes-training="27" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Gestión del Estrés</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-28" genes-training="28" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Habilidades de Negociación</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-29" genes-training="29" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Habilidades Comerciales</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-30" genes-training="30" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Innovación</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-31" genes-training="31" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Orientación al Cliente</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-32" genes-training="32" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Orientación al Objetivo</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-33" genes-training="33" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Resultados</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-34" genes-training="34" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Orientación Conceptual</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-35" genes-training="35" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Planificación y Organización</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-36" genes-training="36" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Proactividad</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-37" genes-training="37" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Reconocer Errores</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-38" genes-training="38" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Relaciones Interpersonales</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-39" genes-training="39" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Satisfacción con el cargo</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-40" genes-training="40" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Trabajo a presión</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-41" genes-training="41" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Equilibrio entre gestion de personas / resultados del negocio</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-42" genes-training="42" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Inteligencia Emocional</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-43" genes-training="43" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Accountability</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 204.5px; margin-right: 5px;">
                                        <li class="" style="text-align: center">
                                            <span>
                                                <a href="#training-content-wrapper-44" genes-training="44" data-toggle="tab">
                                                    <div class="icon-menu-open" style="font-size: 30px">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </div>
                                                    <p>Manejo de Directorio</p>
                                                </a>
                                            </span>
                                        </li>
                                    </div>
                                </ul>
                                <div class="carousel-arrow prev" id="training-arrow-prev"><i class="fas fa-angle-left"></i></div>
                                <div class="carousel-arrow next" id="training-arrow-next"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="container contenido-entrenamiento">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------fin de ETRENAMIENTO------------------------------------------------>

    <!--------------------------------------------programas------------------------------------->
    <?php
    include('programas.php');
    ?>
    <!-------------------------------------------------- fin de programas---------------------------->
    <?php
    include('areas.php');
    ?>
    <!-----------------------------------------------fin de areas---------------------------------->
    <!-------------------------------------------------- fin de learning---------------------------->
    <?php
    include('learning.php');
    ?>
    <!-----------------------------------------------fin de learning---------------------------------->

    <!--------------------------------------------------- inicio de branco areas------------------------------------->
    <div class="bg-branco hide" id="itens-menu">
        <div class="up-triangle white"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="privatecontent-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Materiales Exclusivos para Usted</p>
                                </div>
                            </div>
                            <div id="privatecontent-wrapper" data-countries="3">
                                <div class="panel-group" id="privatecontent-content" role="tablist" aria-multiselectable="true">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-info">
                                                <i class="fas fa-info-circle"></i>
                                                Todavía no hay materiales exclusivos para usted. Revise las pestañas arriba para ver otros contenidos.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Sesión con los Consultores</p>
                                    <div class="panel-group" id="sessions" role="tablist" aria-multiselectable="true">
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle"></i>
                                            No se encontraron sesiones para su perfil, por el momento.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="descriptions-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <div class="form-group is-empty">
                                                        <label class="control-label" for="descriptionSearch">
                                                            Buscar </label>
                                                        <input type="text" class="form-control" id="descriptionSearch" placeholder="Búsqueda">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="descriptions-wrapper" data-countries="3">
                                <div class="row">
                                    <div class="panel-body descriptions-panel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="center">Descripciones disponibles</h3>
                                                <div class="panel-group" id="descriptions-content" role="tablist" aria-multiselectable="true"> <input type="hidden" class="hidden" value="0" id="descriptions-offset">
                                                    <input type="hidden" class="hidden" value="10" id="descriptions-limit">
                                                    <input type="hidden" class="hidden" value="5" id="descriptions-total">
                                                    <div class="panel panel-default panel-job">
                                                        <div class=" panel-heading" role="tab" id="heading-descriptions-31">
                                                            <div class="pull-right">
                                                                <span class="label label-default subtype">
                                                                    <span class="fas fa-graduation-cap"> &nbsp; </span>Pregrado </span>
                                                                <span class="label label-default">
                                                                    <span class="fas fa-comments"> &nbsp; </span>Inglés Mediano </span>
                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="description" id="31">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#descriptions-content" href="/#collapse-descriptions-31" aria-expanded="false" aria-controls="collapse-descriptions-31">
                                                                    Analista Administrativo Financiero - Administrativo &amp; Financiero </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-descriptions-31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-descriptions-31">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b>
                                                                            QUÉ HACE UN ANALISTA ADMINISTRATIVO FINANCIERO? </b>
                                                                        <br><br>
                                                                        Apoyar en el análisis del mercado financiero, revisando, observando y examinando la información de productos y servicios, a fin de levantar los informes correspondientes. De acuerdo a los procedimientos establecidos, lineamientos institucionales y normativa vigente. <br><br>
                                                                        <br>
                                                                        <b>CUÁLES SON SUS PRINCIPALES ACTIVIDADES</b>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong> Perfil </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Técnico:</strong> Contador o administrador con al menos 3 años de experiencia
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Pessoal:</strong> Proactivo, orientado a resultados, minucioso, con habilidad para el trabajo en equipo y capacidad de comunicación así como orientación al cliente.
                                                                            </li>
                                                                        </ul>
                                                                        <strong> Nivel de relación </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Interno:</strong> Coordinador de Contabilidad y Finanzas<br>Jefe del Departamento de Administración, Finanzas y Recursos Humanos
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Externo:</strong> N/D
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default panel-job">
                                                        <div class=" panel-heading" role="tab" id="heading-descriptions-36">
                                                            <div class="pull-right">
                                                                <span class="label label-default subtype">
                                                                    <span class="fas fa-graduation-cap"> &nbsp; </span>Pregrado </span>
                                                                <span class="label label-default">
                                                                    <span class="fas fa-comments"> &nbsp; </span>Inglés Básico </span>
                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="description" id="36">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#descriptions-content" href="/#collapse-descriptions-36" aria-expanded="false" aria-controls="collapse-descriptions-36">
                                                                    Analista de Auditoría - Administrativo &amp; Financiero </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-descriptions-36" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-descriptions-36">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b>
                                                                            QUÉ HACE UN ANALISTA DE AUDITORíA? </b>
                                                                        <br><br>
                                                                        Determinar si las cuentas anuales de la entidad objeto de revisión reflejan la imagen fiel y contienen toda la información necesaria y suficiente para que un tercero pueda hacerse una idea de la situación económico financiera de la entidad. <br><br>
                                                                        <br>
                                                                        <b>CUÁLES SON SUS PRINCIPALES ACTIVIDADES</b>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong> Perfil </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Técnico:</strong> Egresado de la carrera de Ing. Industrial, Contabilidad o Administración
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Pessoal:</strong> Profesional metódico, planificado y analítico
                                                                            </li>
                                                                        </ul>
                                                                        <strong> Nivel de relación </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Interno:</strong> Director General<br>Gerente de Administración y Finanzas<br>Directores Locales<br>Administrador<br>Personal de Oficinas de Apoyo.<br>Contralor
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Externo:</strong> N/D
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default panel-job">
                                                        <div class=" panel-heading" role="tab" id="heading-descriptions-38">
                                                            <div class="pull-right">
                                                                <span class="label label-default subtype">
                                                                    <span class="fas fa-graduation-cap"> &nbsp; </span>Pregrado </span>
                                                                <span class="label label-default">
                                                                    <span class="fas fa-comments"> &nbsp; </span>Inglés Mediano </span>
                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="description" id="38">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#descriptions-content" href="/#collapse-descriptions-38" aria-expanded="false" aria-controls="collapse-descriptions-38">
                                                                    Analista de Contabilidad - Administrativo &amp; Financiero </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-descriptions-38" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-descriptions-38">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b>
                                                                            QUÉ HACE UN ANALISTA DE CONTABILIDAD? </b>
                                                                        <br><br>
                                                                        Efectuar asientos de las diferentes cuentas, revisando, clasificando y registrando documentos, a fin de mantener actualizados los movimientos contables que se realizan en la empresa <br><br>
                                                                        <br>
                                                                        <b>CUÁLES SON SUS PRINCIPALES ACTIVIDADES</b>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong> Perfil </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Técnico:</strong> Auditor o Comercial con al menos 3 años de experiencia
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Pessoal:</strong> Proactivo, orientado a resultados, minucioso, con habilidad para el trabajo en equipo y capacidad de comunicación así como orientación al cliente.
                                                                            </li>
                                                                        </ul>
                                                                        <strong> Nivel de relación </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Interno:</strong> Coordinador de Contabilidad y Finanzas<br>Jefe del Departamento de Administración, Finanzas y Recursos Humanos
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Externo:</strong> N/D
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default panel-job">
                                                        <div class=" panel-heading" role="tab" id="heading-descriptions-45">
                                                            <div class="pull-right">
                                                                <span class="label label-default subtype">
                                                                    <span class="fas fa-graduation-cap"> &nbsp; </span>Pregrado </span>
                                                                <span class="label label-default">
                                                                    <span class="fas fa-comments"> &nbsp; </span>Inglés Mediano </span>
                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="description" id="45">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#descriptions-content" href="/#collapse-descriptions-45" aria-expanded="false" aria-controls="collapse-descriptions-45">
                                                                    Analista de Contraloría - Administrativo &amp; Financiero </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-descriptions-45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-descriptions-45">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b>
                                                                            QUÉ HACE UN ANALISTA DE CONTRALORíA? </b>
                                                                        <br><br>
                                                                        Preparar la información financiera de la empresa, así como captura de la propia contabilidad, pagos provisionales, declaraciones anuales y mensuales <br><br>
                                                                        <br>
                                                                        <b>CUÁLES SON SUS PRINCIPALES ACTIVIDADES</b>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong> Perfil </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Técnico:</strong> Manejo de sistemas y dominio de Microsoft office,contabilidad y finanzas, Excel avanzado, sistemas de inventarios
                                                                                Licenciado en Administración o contador Auditor, más de 2 años de experiencia
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Pessoal:</strong> Persona organizada, que sepa organizar prioridades y buscar soluciones a problemas diarios, escalando temas según su importancia y las reglas internas, apegada a reglas, honesta, orientada a resultados, con iniciativa, proactiva, buena comunicación interpersonal y trabajo en equipo, buena adaptación al cambio.
                                                                            </li>
                                                                        </ul>
                                                                        <strong> Nivel de relación </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Interno:</strong> Contraloría interna<br>Director General
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Externo:</strong> N/D
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default panel-job">
                                                        <div class=" panel-heading" role="tab" id="heading-descriptions-67">
                                                            <div class="pull-right">
                                                                <span class="label label-default subtype">
                                                                    <span class="fas fa-graduation-cap"> &nbsp; </span>Pregrado </span>
                                                                <span class="label label-default">
                                                                    <span class="fas fa-comments"> &nbsp; </span>Inglés Mediano </span>
                                                            </div>
                                                            <div class="pull-left">
                                                                <form class="user_check" role="tablist">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="description" id="67">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#descriptions-content" href="/#collapse-descriptions-67" aria-expanded="false" aria-controls="collapse-descriptions-67">
                                                                    SubGerente Administrativo Financiero - Administrativo &amp; Financiero </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-descriptions-67" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-descriptions-67">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b>
                                                                            QUÉ HACE UN SUBGERENTE ADMINISTRATIVO FINANCIERO? </b>
                                                                        <br><br>
                                                                        &lt;br&gt;Planifican, dirigen y coordinan las actividades de los departamentos, secciones, áreas o divisiones financieras y administrativas en empresas públicas y privadas, bajo la conducción general de los directores responsables y en consulta con directores de otros departamentos. <br><br>
                                                                        <br>
                                                                        <b>CUÁLES SON SUS PRINCIPALES ACTIVIDADES</b>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong> Perfil </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Técnico:</strong> El perfil ideal es un Ingeniero Comercial, Civil, Economista o profesional afín, con más de 5 años de experiencia laboral en puesto similar.
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Pessoal:</strong> Persona con liderazgo, proactivo, acostumbrado a trabajar bajo presión, orientado a resultado
                                                                            </li>
                                                                        </ul>
                                                                        <strong> Nivel de relación </strong>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Interno:</strong> Consejo de Administración<br>Coordinador Operativo<br>Administrador<br>Equipo de Acompañamiento Técnico<br>Personal de OA <br>Gerente Comercial<br>Gerente Operaciones
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <strong>Externo:</strong> N/D
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="descriptions-load" style="display: none;">
                                                    <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                    <p class="text-center">Cargando…</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="center">Descripciones aplicadas</h3>
                                                <div class="panel-group" id="descriptions-checked-content" role="tablist" aria-multiselectable="true">
                                                    <div class="alert alert-info">No fueron encontradas descripciones para su perfil por el momento.</div>
                                                </div>

                                                <div id="descriptions-checked-load" style="display: none;">
                                                    <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                    <p class="text-center">Cargando…</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="pagination pagination-md" id="descriptions-pagination">
                                                    <li class="page-item first disabled"><a href="#" class="page-link">Primero</a></li>
                                                    <li class="page-item prev disabled"><a href="#" class="page-link">Anterior</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item next disabled"><a href="#" class="page-link">Siguiente</a></li>
                                                    <li class="page-item last disabled"><a href="#" class="page-link">Último</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="employability-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Análisis de empleabilidad</p>
                                </div>
                                <div class="col-md-12">
                                    <p>En algún momento de nuestras carreras profesionales seguramente sentiremos la voluntad, tendremos
                                        la ambición o la simple curiosidad de saber cómo somos evaluados por el mercado: una visión de
                                        nuestras carreras, de nuestros estudios, de quiénes somos. ¡Todo esto se traduce en la palabra
                                        EMPLEABILIDAD! Este término se refiere al modo como las empresas nos evalúan, cómo entienden si
                                        podemos o no formar parte de ellas y cuán "interesantes" somos profesionalmente.</p>

                                    <p>¡Pues bien! Reunimos a algunos <strong>CEO</strong>, <strong>directores de Recursos
                                            Humanos</strong>, <strong>Directores de área</strong> y <strong>Headhunters</strong> para definir
                                        juntos un modelo de evaluación para cada ítem que conforma la empleabilidad de un profesional. A
                                        través de un poderoso algoritmo, evaluamos su carrera en detalle e indicamos cómo una empresa evalúa
                                        este historial, entregando al final, una evaluación general, algunos consejos sobre los puntos
                                        positivos presentados y, principalmente, consejos sobre cómo mejorar su
                                        <strong>EMPLEABILIDAD</strong>, haciendo mas más atractivo para la compañía de tus sueños.
                                    </p>

                                    <p>Haga el <strong>TEST </strong>abajo, respondiendo de forma honesta a las preguntas. Es rápido e
                                        intuitivo. ¡Esperamos que el resultado le ayude a tomar mejores decisiones profesionales!</p>
                                </div>
                            </div>
                            <div class="row conten">
                                <div class="col-md-12" id="MensajeEmp">
                                    <!--***********************************************************INICIO DE FORMULARIO***********************************************************************-->
                                    <form action="test.php" method="post" accept-charset="UTF-8" class="form marg-t-50 br" id="AnalisisEmp">
                                        <div style="border:solid 2px black; border-radius:40px; padding: 10px;">
                                            <div class="panel-heading" role="tab" id="heading-empregabilidade">
                                                <h1 class="p-t panel-title"> REALIZAR TEST </h1>
                                            </div>
                                            <div id="collapse-empregabilidade" class="panel-body" role="tabpanel" aria-labelledby="heading-empregabilidade">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="ingles">
                                                                    NIVEL DE INGLÉS <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="nivel_ingles" id="nivel_ingles" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Basico" class="opt1">Básico</option>
                                                                    <option value="Intermediario" class="opt2">Intermedio</option>
                                                                    <option value="Avanzado" class="opt3">Avanzado</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="idade">
                                                                    EDAD <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="idade" id="idade" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="20-30" class="opt1">20-30 años</option>
                                                                    <option value="30-40" class="opt2">30-40 años</option>
                                                                    <option value="40-50" class="opt3">40-50 años</option>
                                                                    <option value="50-60" class="opt4">50-60 años</option>
                                                                    <option value="+60" class="opt5">+60 años</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="expectativa-salarial">
                                                                    EXPECTATIVA SALARIAL <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="expectativa-salarial" id="expectativa-salarial" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Abajo" class="opt1">Abajo del mercado</option>
                                                                    <option value="Igual" class="opt2">Correspondiente al mercado</option>
                                                                    <option value="Arriba" class="opt3">Sobre el mercado</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="experiencia-internacional">
                                                                    EXPERIENCIA INTERNACIONAL <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" id="experiencia-internacional" name="experiencia-internacional" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Si" class="opt1">Sí</option>
                                                                    <option value="No" class="opt2">No</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="formacao">
                                                                    FORMACIÓN <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" id="formacao" name="formacao" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Pregrado" class="opt1">Pregrado</option>
                                                                    <option value="MBA" class="opt2">MBA</option>
                                                                    <option value="MBAInternacional" class="opt3">MBA Internacional</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="posicao">
                                                                    CARGO <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="posicao" id="posicao" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Analista" class="opt1">Analista</option>
                                                                    <option value="Especialista" class="opt2">Experto</option>
                                                                    <option value="Supervisor" class="opt3">Supervisor</option>
                                                                    <option value="Gerente" class="opt4">Gerente</option>
                                                                    <option value="Diretor" class="opt5">Director</option>
                                                                    <option value="CLevel" class="opt6">C-Level</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="display:flex; flex-direction:column; justify-content:center;">
                                                            <div class="form-group">
                                                                <label class="control-label" for="mobilidade">
                                                                    ¿CUÁL ES SU DISPONIBILIDAD DE TRASLADO A OTROS PAÍSES? <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="mobilidade" id="mobilidade" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Bajo" class="opt1">Bajo</option>
                                                                    <option value="Media" class="opt2">Media</option>
                                                                    <option value="Alta" class="opt3">Alto</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="permanencia">
                                                                    ¿CUÁL ES SU TIEMPO DE PERMANENCIA EN LA EMPRESA? <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="permanencia" id="permanencia" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="0-1" class="opt1">0 a 1 año</option>
                                                                    <option value="1-3" class="opt2">1 a 3 años</option>
                                                                    <option value="3-7" class="opt3">3 a 7 años</option>
                                                                    <option value="+7" class="opt4">+7 años</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="network">
                                                                    NIVEL DE NETWORKING <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="form-control Fond_form" name="network" id="network" required="required">
                                                                    <option value="" disabled selected>Elegir opción</option>
                                                                    <option value="Bajo" class="opt1">Bajo</option>
                                                                    <option value="Medio" class="opt2">Mediano</option>
                                                                    <option value="Alto" class="opt3">Alto</option>
                                                                </select>
                                                            </div>
                                                            <input type="hidden" name="name" value="javier Bendezu">
                                                            <input type="hidden" name="email" value="cm.outplacement.coaching@corpibgroup.com">
                                                            <input type="hidden" name="telefone" value="">
                                                            <div class="form-group pull-right" style="display:flex; justify-content:center;">
                                                                <button type="submit" class="empCalc btn btn-primary">
                                                                    <i class="fas fa-save"></i>
                                                                    Calcular </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="smtm-tab" data-dynamic="no">

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Informes Salariales</p>
                                </div>
                                <div class="col-md-12 text-center bg-warning">
                                    <div role="tabpanel" class="tab-pane fade active in" id="manual-tabs">
                                        <div class="row">
                                            <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title" style="text-align: left;">
                                                        Enlace </h3>
                                                </div>
                                                <div class="panel-body" id="manual">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="list-group list-user-files">

                                                                <li class="list-group-item" style="text-align: left;">
                                                                    <i class="far fa-file"></i>
                                                                    <a href="https://smtm.co/dollar-bill/" target="_blank">https://smtm.co/dollar-bill/</a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="process-tab" data-dynamic="no">

                            <!-- Modal para Indicação de Contatos -->
                            <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="modal-add-contact-label">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post" id="form_caza">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modal-add-contact-label">Indicar Contacto</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Gracias por la recomendación. Por favor, sea preciso en las informaciones.</p>
                                                <p>Campos indicados con * son obligatorios.</p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-name">
                                                                <i class="fa"></i>
                                                                Nombre del Contacto *
                                                            </label>
                                                            <input type="text" name="name" id="indication-form-name" class="form-control" placeholder="Nombre del Contacto *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-email">
                                                                <i class="fa"></i>
                                                                Correo del Contacto *
                                                            </label>
                                                            <input type="email" name="email" id="indication-form-email" class="form-control" placeholder="Correo del Contacto *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-phone">
                                                                <i class="fa"></i>
                                                                Teléfono de Contacto </label>
                                                            <input type="tel" name="phone" id="indication-form-phone" class="form-control" placeholder="Teléfono de Contacto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-company">
                                                                <i class="fa"></i>
                                                                Empresa del Contacto *
                                                            </label>
                                                            <input type="text" name="company" id="indication-form-company" class="form-control" placeholder="Empresa del Contacto *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-position">
                                                                <i class="fa"></i>
                                                                Posición del Contacto </label>
                                                            <input type="text" name="position" id="indication-form-position" class="form-control" placeholder="Posición del Contacto">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-country">
                                                                <i class="fa"></i>
                                                                País del Contacto </label>
                                                            <select name="country_id" id="indication-form-country" class="form-control">
                                                                <?php
                                                                $sentencia3 = $connect->prepare("SELECT * FROM pais");
                                                                $sentencia3->execute();
                                                                $respuesta = $sentencia3->fetchAll();

                                                                foreach ($respuesta as $key => $value) : ?>

                                                                    <option value="<?php echo $value["id_pais"]; ?>"><?php echo $value["nom_pais"]; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-area">
                                                                <i class="fa"></i>
                                                                Área del Contacto *
                                                            </label>
                                                            <select name="area_id" id="indication-form-area" class="form-control" required="required">
                                                                <option value="">(Seleccione)</option>

                                                                <?php
                                                                $sentencia3 = $connect->prepare("SELECT * FROM area");
                                                                $sentencia3->execute();
                                                                $respuesta = $sentencia3->fetchAll();

                                                                foreach ($respuesta as $key => $value) : ?>

                                                                    <option value="<?php echo $value["id_area"]; ?>"><?php echo $value["nombre_area"]; ?></option>

                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="indication-form-market">
                                                                <i class="fa"></i>
                                                                Mercado del Contacto *
                                                            </label>
                                                            <select name="market_id" id="indication-form-market" class="form-control" required="required">
                                                                <option value="">(Seleccione)</option>

                                                                <?php
                                                                $sentencia3 = $connect->prepare("SELECT * FROM mercado");
                                                                $sentencia3->execute();
                                                                $respuesta = $sentencia3->fetchAll();

                                                                foreach ($respuesta as $key => $value) : ?>

                                                                    <option value="<?php echo $value["id_mercado"]; ?>"><?php echo $value["mercado_contacto"]; ?></option>

                                                                <?php endforeach; ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim da Modal para Indicação de Contatos -->

                            <!-- Indicações -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-group" id="my-area-content" role="tablist" aria-multiselectable="true">

                                        <div class="panel panel-default panel-my-area">
                                            <div class="panel-heading" role="tab" id="heading-my-area-indications">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#my-area-content" href="/#collapse-my-area-indications" aria-expanded="false" aria-controls="collapse-my-area-indications">

                                                        Programa de Recomendación de Contactos
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-my-area-indications" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-my-area-indications">
                                                <div class="panel-body">
                                                    <h5>Cómo Funciona?</h5>
                                                    <p>Usted indica un contacto de su red, y recibe <strong>dos</strong> de vuelta de nuestro
                                                        amplio banco de datos, siempre relacionados a sus áreas y mercados de interés.</p>
                                                    <p>Son directores, CEOs otras personas influyentes en empresas que pueden ser de su interés.
                                                    </p>

                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact">
                                                            <i class="fas fa-address-card"></i>
                                                            Recomendar un Contacto </button>
                                                    </div>

                                                    <h5>Contactos que Usted Recomendó</h5>


                                                    <div class="alert alert-info" style="display:none;">
                                                        <i class="fas fa-info-circle"></i>
                                                        Todavía no recibimos recomendaciones suyas.
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6" style="padding:1em;" id="caza_proceso">
                                                            <div class="panel-group" id="jobs-content" role="tablist" aria-multiselectable="true"> <input type="hidden" class="hidden" value="0" id="jobs-offset">
                                                                <div class="panel panel-default panel-job pan-areas">
                                                                    <div class="panel-heading checked-progress" role="tab" id="heading-jobs-2501">
                                                                        <div class="pull-left">
                                                                            <form class="user_check" role="tablist">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="job" id="2501" checked="">
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#jobs-content" href="/#collapse-jobs-251" aria-expanded="false" aria-controls="collapse-jobs-250850" class="collapsed">
                                                                                IBOUTPLACEMENT: programador </a>
                                                                            <span class="label label-default pull-right">
                                                                                <img src="./dna/img/bandeirinhas/peru.png" width="10px">
                                                                                peru</span>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse-jobs-251" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-jobs-2501" aria-expanded="false" style="height: 0px;">
                                                                        <div class="panel-body">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <b>Descripción: </b>
                                                                                    <p>
                                                                                        desarrollador web </p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Publicado en:
                                                                                                <br></strong> 28/05/2020
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <strong>
                                                                                                Expira en: <br></strong>
                                                                                            No informado
                                                                                        </li>
                                                                                    </ul>

                                                                                    <div class="btn-group-vertical block" role="group" aria-label="Job Actions">


                                                                                        <a href="https://ibvirtual2.iboutplacement.com/" class="btn btn-primary" target="_blank">
                                                                                            Sepa Más <i class="fas fa-external-link"></i>
                                                                                        </a>



                                                                                        <button type="button" class="btn btn-primary" data-toggle="job-test-user" disabled="">
                                                                                            Contacto <i class="fas fa-envelope"></i>
                                                                                        </button>


                                                                                    </div>


                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item " id="job-alerting-2501">
                                                                                            La oferta de trabajo <b>no
                                                                                                está vigente</b> o ya
                                                                                            <b>expiró</b>? Avísanos <a href="javascript:void(0);" onclick="expireJob(2501);">
                                                                                                acá</a>.
                                                                                        </li>
                                                                                        <li class="list-group-item hide" id="job-expired-2501">
                                                                                            Gracias, su aviso ya fue
                                                                                            enviado a los
                                                                                            administradores. </li>
                                                                                        <li class="list-group-item hide" id="job-sending-2501">
                                                                                            <img src="admin/img/loading-spinner-grey.gif">
                                                                                            <spam>Enviando</spam>
                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="padding:1em;" id="caza_detalle">
                                                            
                                                        </div>
                                                    </div>




                                                    <h5>Contactos que Recibió</h5>
                                                    <div class="row">
                                                        <div id="indication-template" style="padding:1em;" class="col-md-6">
                                                        
                                                        </div>
                                                        <div id="indication-templateD" style="padding:1em;" class="col-md-6">
                                                        
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim das Indicações -->


                            <!-- Conteúdos Dinâmicos -->
                            <div id="process-wrapper" data-countries="3">
                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;" class="center-block" style="margin-top: 150px;">
                                <p class="text-center">Cargando&hellip;</p>
                                <div class="panel-group" id="process-content" role="tablist" aria-multiselectable="true">
                                </div>
                            </div>
                            <!-- Fim dos Conteúdos Dinâmicos -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="companies-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Empresas por industria</p>
                                </div>
                                <div class="col-md-12">
                                    <p></p>
                                </div>
                            </div>
                            <div id="companies-wrapper" data-countries="3">


                                <div class="panel-group" id="companies-content" role="tablist" aria-multiselectable="true">
                                    <?php include('EmpresasIndustria.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="library-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Materiales Relevantes Diversos</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Un centenar de textos e información que permitiran diferenciarte como profesional</p>
                                    <p>El conocimiento te permite estar un paso mas adelante que los demás candidatos en el mercado. IBjobcoach
                                        disponibiliza millares de textos y contenidos para que puedas perfeccionarte y trabajar tus
                                        competencias.</p>
                                </div>
                            </div>
                            <div id="library-wrapper" data-countries="3">
                                <div class="panel-group" id="library-content" role="tablist" aria-multiselectable="true">
                                    <?php
                                    include('biblioteca.php');
                                    ?>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="linkedin-content-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Contenido de Linkedin</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Parte del proceso de relocalización / transición profesional está en la construcción y
                                        mantenimiento de su red profesional de contactos. Linkedin es una aplicación digital que le permite
                                        entrar en contacto con sus redes actuales, además de crear nuevas redes de contactos para acelerar
                                        su búsqueda de empleo. En esta sección, descubrirá cómo aprovechar al máximo la herramienta
                                        Linkedin.</p>
                                </div>
                            </div>

                            <div id="linkedin-content-wrapper" data-countries="3">
                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;" class="center-block" style="margin-top: 150px;">
                                <p class="text-center">Cargando&hellip;</p>

                                <div class="panel-group" id="linkedin-content-content" role="tablist" aria-multiselectable="true">
                                </div>
                            </div>

                            <div id="linkedin-content-wrapper" data-countries="3">
                                <div class="panel-group" id="linkedin-content-content" role="tablist" aria-multiselectable="true">
                                    <div id="ContenidosLinkedIn">
                                        <?php include('ContenidoLinkedIn.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="cv-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">CV</p>
                                </div>
                                <div class="col-md-12">
                                    <p>La construcción de tu curriculum vitae debe ser clara, resumida y dirigida hacia el empleo y
                                        empleador que buscas. Es por eso que debes tener en cuenta muchos factores para que tu CV sea
                                        considerado. Conoce en esta sección muchos contenidos acerca de la creación y optimización de tu
                                        hoja de vida</p>
                                </div>
                            </div>
                            <div id="cv-wrapper" data-countries="3">
                                <div class="panel-group" id="cv-content" role="tablist" aria-multiselectable="true">
                                    <?php include('CvContenido.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="match-mercado-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Match de Mercado</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Tu perfil profesional y personal y el perfil de empresas deben coincidir en varias variables para
                                        obtener un trabajo satisfactorio para ambas partes. Es por eso que en esta sección recibirás
                                        contenidos asociados a las empresas adecuadas para tu perfil profesional.</p>
                                </div>
                            </div>

                            <div id="match-mercado-wrapper" data-countries="3">
                                <div class="panel-group" id="match-mercado-content" role="tablist" aria-multiselectable="true">
                                    <?php include('MatchMercado.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="proposta-valor-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Propuesta de Valor</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Cada persona es única e irrepetible. Tu trayectoria personal, académica y profesional va forjando
                                        un profesional con habilidades, conocimientos y características únicas. Muchas veces dejamos esto de
                                        lado y pensamos que no tenemos ningún diferencial versus otros profesionales de la misma industria o
                                        sector. En esta sección conocerás contenidos asociados a valorizar y sacar brillo a tu marca
                                        profesional. Existen muchas cualidades que te hacen único!.</p>
                                </div>
                            </div>
                            <div id="proposta-valor-wrapper" data-countries="3">
                                <div class="panel-group" id="proposta-valor-content" role="tablist" aria-multiselectable="true">
                                    <?php include('PropuestaValor.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tecnicas-entrevista-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Técnicas de Entrevista</p>
                                </div>
                                <div class="col-md-12">
                                    <p>La entrevista de trabajo puede ser uno de los momentos de mayor nerviosismo y ansiedad durante los
                                        procesos de recolocación laboral. Estar preparado es clave para tener un buen desempeño en ellas. En
                                        esta sección encontrarás tips y trucos de cómo abordar de la mejor manera posible las entrevistas
                                        laborales.</p>
                                </div>
                            </div>
                            <div id="tecnicas-entrevista-wrapper" data-countries="3">
                                <div class="panel-group" id="tecnicas-entrevista-content" role="tablist" aria-multiselectable="true">
                                    <?php include('TecnicasEntrevistas.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="outplacement-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 10px">
                                    <p class="text-top-area">Porque la forma es tan importante como el contenido, ofrecemos plantillas
                                        para una comunicación efectiva.</p>

                                    <p class="text-top-area">Cada etapa de un proceso de búsqueda exige información a ser trabajada. IBjobcoach
                                        entrega las orientaciones para cada una de estas etapas a traves de templates personalizados y
                                        executivos. Profesionaliza tu información.</p>
                                </div>
                            </div>
                            <div id="outplacement-wrapper" data-countries="3">
                                <div class="panel-group" id="outplacement-content" role="tablist" aria-multiselectable="true">
                                    <?php include('Templates.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="videos-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 10px">
                                    <p class="text-top-area">Contenido exclusivo ofrecido por profesionales en Capital Humano, a su
                                        disposición 24x7 para que lo vea cuando sea necesario. <br /><br /></p>
                                    <p class="text-top-area">Encuentra con IBjobcoach videos orientativos y webinars con contenido fundamental
                                        para que puedas perfeccionar tu perfil y así destacarte entre otros candidatos. Todo el material es
                                        desarrollado por empresas partners expertas en recolocación y reclutamiento.</p>
                                </div>
                            </div>
                            <div id="videos-wrapper" data-countries="3">
                                <div class="panel-group" id="videos-content" role="tablist" aria-multiselectable="true">
                                    <?php include('videosprograma.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="agenda-tab" data-dynamic="no">
                            <div class="row">

                                <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Descargue de la agenda </h3>
                                    </div>
                                    <div class="panel-body" id="planilha">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group list-user-files">

                                                    <li class="list-group-item">
                                                        <i class="fas fa-file-o"></i>
                                                        <a href="dna/Página Planilla de Agenda Óptima.pdf" target="_blank">PDF (Español)</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="financial-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-top-area">La planificación financiera te permite saber cuánto tiempo tendrás para
                                        recolocarte antes de tener problemas financieros. Nuestra plantilla también hace una comparación de
                                        riesgo considerando su último cargo. A medida que se sube en las posiciones profesionalmente, hay
                                        menos ofertas disponibles en el mercado, lo que aumenta el tiempo de recolocación. ¡Éxito en su
                                        proceso! </p>
                                </div>
                                <div class="col-md-12">
                                </div>
                            </div>
                            <div class="row">
                                <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Descargue de la planilla </h3>
                                    </div>
                                    <div class="panel-body" id="planilha">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group list-user-files">
                                                    <li class="list-group-item">
                                                        <i class="fas fa-file-o"></i>
                                                        <a href="dna/Planificación financiera.pdf" target="_blank">Planilla
                                                            (Español)</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="forum-tab" data-dynamic="no">
                            <div id="forum-wrapper">
                                <!-- MODAL PARA CADASTRO DE TÓPICOS -->
                                <div id="new-thread" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="image-crop" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <form action="insertar.php" method="post" id="forum-post-form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title">Reponder al foro</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="autor">
                                                                    <i class="fa"></i>
                                                                    Autor <span class="required" data-toggle="tooltip" title="Este campo es obligatorio">
                                                                        * </span>
                                                                </label>
                                                                <input type="text" name="autor" id="autor" class="form-control" required="required" value="<?php echo $usuariPost ?>">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="mensaje">
                                                                    <i class="fa"></i>
                                                                    Mensaje <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <textarea name="mensaje" id="mensaje" class="form-control" required="required" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="subscribe" id="thread-subscribe" value="yes" checked="checked">
                                                                <label for="thread-subscribe">
                                                                    Recibir notificaciones cuando haya respuestas a este tópico </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                                        Cerrar </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-save"></i>
                                                        Grabar </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- FIM DA MODAL PARA CADASTRO DE TÓPICOS -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="lead">Foro</p>
                                    </div>
                                    <div class="col-md-12" style="font-size: 16px; font-weight: 500;">
                                        <p style="margin:0px;">IBjobcoach indica los eventos que tienen que ser parte de tu ruta hacia el éxito.</p>
                                        <p>Para estar al dia de lo que pasa en el mundo laboral es importante ser parte de los principales
                                            eventos y fóruns de información. IBjobcoach permite que ninguno de ellos escape de tu radar.</p>
                                    </div>
                                </div>

                                <div class="contend1">

                                    <div class="contend2">
                                        <div style="padding:6%;">
                                            <img src="admin/img/9.png" width="85px" height="85px">
                                        </div>
                                        <div class="contend_letras">
                                            <?php
                                            $consulta = $connect->prepare("SELECT COUNT(idforo) FROM (foro)");
                                            $consulta->execute();
                                            $consulForo = $consulta->fetchColumn();
                                            ?>
                                            <p style="margin:0px;">NUEVOS</p>
                                            <p style="margin:0px;">FOROS</p>
                                            <p id="Numero_foro" style="font-size:20px;"><?php echo $consulForo; ?></p>
                                        </div>
                                    </div>


                                    <div class="contend3">
                                        <div style="padding:6%;">
                                            <img src="admin/img/10.png" width="73px" height="73px">
                                        </div>
                                        <div class="contend_letras">
                                            <?php

                                            $consulta = $connect->prepare("SELECT COUNT(idrespuesta) FROM(respuestas) ");
                                            $consulta->execute();
                                            $consulRespuesta = $consulta->fetchColumn();
                                            ?>
                                            <p style="margin:0px;">RESPUESTAS</p>
                                            <p id="Respuestas_foro" style="font-size:20px;"><?php echo $consulRespuesta; ?></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 nuevo">
                                        <div class="panel-group" id="forum-tablist" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading-forum-threads">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#forum-tablist" href="/#panel-collapse-threads" aria-expanded="true" aria-controls="panel-collapse-threads">
                                                            Tópicos </a>
                                                    </h4>
                                                </div>
                                                <div id="panel-collapse-threads" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-forum-threads">
                                                    <div class="panel-body">

                                                        <!--
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-thread" style="margin-bottom: 25px;">
                                                            <i class="fas fa-plus" style="margin-right: 10px;"></i>
                                                            Nuevo Tópico prueb <div class="ripple-container"></div></button>
                                                        -->

                                                        <div id="thread-list">
                                                            <ul class="list-group forum-messages">
                                                                <!---//////////////MOSTRAR TOTAL FORO Y REPSUESTAS////////----->

                                                                <div class="list-group-item contenedor_titulos">
                                                                    <h3 class="col-md-1 col-xs-2 titulos_foro">FORO</h3>
                                                                    <h3 class="col-md-7 col-xs-6 titulos_foro">TEMA A TRATAR</h3>
                                                                    <h3 class="col-md-2 col-xs-3 titulos_foro"><i class='tamano far'>&#xf27a;</i> RESPUESTAS</h3>
                                                                    <h3 class="col-md-2 col-xs-2 titulos_foro"><i class='tamano far'>&#xf06e;</i> VISITAS</h3>
                                                                </div>

                                                                <?php
                                                                foreach ($foros as $dato) {
                                                                ?>
                                                                    <li class="list-group-item">
                                                                        <div class="row" style="display:flex; flex-direction:row; float:none; margin:0%; height:100%;">
                                                                            <div class="col-md-1 col-xs-2 avatar">
                                                                                <img src="admin/examples/foro/<?php echo $dato->foto ?>" alt="Imagen de Usuario" class="img-circle profile-pic">
                                                                            </div>

                                                                            <div class="col-md-7 col-xs-6 avatar2">
                                                                                <h4 class="list-group-item-heading">

                                                                                    <a style="text-decoration: none; color:#054E4E;" name="<?php echo $usuariPost ?>" href="" title="Eventos de Recursos Humanos no Brasil" id="<?php echo $dato->idforo ?>" class="<?php echo $persona->idlicencia ?> foro">
                                                                                        <?php echo $dato->titulo; ?>

                                                                                    </a>
                                                                                </h4>
                                                                                <p class="metadata parrafo_img">
                                                                                    <span class="author">
                                                                                        <i class="fas fa-fw fa-user text-muted"></i>
                                                                                        <?php echo $dato->autor; ?> </span>
                                                                                    <span class="date">
                                                                                        <i class="fas fa-fw fa-clock text-muted"></i>
                                                                                        <?php echo $dato->fecha; ?></span>
                                                                                </p>
                                                                            </div>

                                                                            <div class="col-md-2 col-xs-3 numbers">
                                                                                <?php
                                                                                $consulta = $connect->prepare("SELECT COUNT(*) FROM(respuestas) WHERE(idforo=$dato->idforo)");
                                                                                $consulta->execute();
                                                                                $conrespuesta = $consulta->fetchColumn();
                                                                                ?>
                                                                                <p class="answers" id="Rptas<?php echo $dato->idforo ?>">
                                                                                    <?php echo $conrespuesta; ?>
                                                                                </p>

                                                                            </div>

                                                                            <div class="col-md-2 col-xs-2 numbers">

                                                                                <p class="answers visitas<?php echo $dato->idforo ?>">
                                                                                    <?php echo $dato->vistas; ?>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                <?php
                                                                }
                                                                ?>


                                                                <!--   <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-10">
                                                                            <div class="avatar">
                                                                                <img src="/online/images/users/0156/ic.jpg" alt="Imagen de Perfil para Isabel Carrasco - Directora DNA Outplacement" class="img-circle profile-pic">
                                                                            </div>
                                                                            <h4 class="list-group-item-heading">
                                                                                <a href="https://www.genesnextstep.com/online/forum/threads/1" title="Como y cuando pedir a tu empresa un programa de Outplacement">
                                                                                    Como y cuando pedir a tu empresa un
                                                                                    programa de Outplacement </a>
                                                                            </h4>
                                                                            <p class="metadata">
                                                                                <span class="author">
                                                                                    <i class="fas fa-fw fa-users text-muted"></i>
                                                                                    Isabel Carrasco - Directora DNA
                                                                                    Outplacement </span>
                                                                                <span class="date">
                                                                                    <i class="fas fa-fw fa-clock-o text-muted"></i>
                                                                                    21/06/2017 21:00 </span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="numbers">
                                                                                <p class="answers">
                                                                                    Respuestas:
                                                                                    <span class="number">
                                                                                        1 </span>
                                                                                </p>
                                                                                <p class="visits">
                                                                                    Visitas:
                                                                                    <span class="number">
                                                                                        90 </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>
                                                            <div id="thread-pagination" class="text-center">
                                                            </div>
                                                        -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading-forum-messages">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#forum-tablist" href="/#panel-collapse-messages" aria-expanded="true" aria-controls="panel-collapse-messages">
                                                            Mensajes </a>
                                                    </h4>
                                                </div>
                                                <div id="panel-collapse-messages" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-forum-messages">

                                                    <div id="message-list" class="panel-body">

                                                        <div class="alert alert-info">
                                                            Elija un tópico para exhibir los mensajes.
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="live-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Live</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Transmisiones en tiempo real para que esté siempre a dia de nuevas tecnologias y tendencias en el
                                        mercado laboral.</p>

                                    <p>El mercado de trabajo es dinámico y exige estar siempre actualizado. IBjobcoach ofrece transmisiones en
                                        tiempo real con especialistas que ayudaran a que este siempre al dia con las nuevas tecnologias y
                                        tendencias.</p>
                                </div>
                            </div>

                            <div id="live-wrapper">
                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;" class="center-block" style="margin-top: 150px;">
                                <p class="text-center">Cargando&hellip;</p>
                                <div class="panel-group" id="live-content" role="tablist" aria-multiselectable="true">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="courses-tab" data-dynamic="no">
                            <div id="courses-wrapper" class="partial-wrapper" data-countries="3">
                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;" class="center-block" style="margin-top: 150px;">
                                <p class="text-center">Cargando&hellip;</p>
                                <div class="panel-group" id="courses-content" role="tablist" aria-multiselectable="true">
                                    <?php include('CursosOnline.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="shelf-tab" data-dynamic="no">
                            <div id="shelf-wrapper" data-countries="3">
                                <div class="panel-group" id="shelf-content" role="tablist" aria-multiselectable="true">
                                    <?php include('Peliculas_Libros.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="alumni-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Alumni</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Una gran red de personas conectadas por un punto en común: IBjobcoach</p>
                                    <p>Todas las personas que utilizaron IBjobcoach pasam a tener su perfil creado en nuestra plataforma ...
                                    </p>
                                </div>
                            </div>
                            <div id="alumni-wrapper" data-countries="3">
                                <div class="panel-group" id="alumni-content" role="tablist" aria-multiselectable="true">
                                    <?php include('AlumniUsuarios.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="jobs-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-top-area">Todas las vacantes disponibles en el mercado para que ganes
                                        tiempo en la búsqueda de tu nuevo desafio profesional.</p>

                                    <p class="text-top-area">La tecnologia de IBJOBCOACH permite que planifiques el perfil de
                                        tu búsqueda accediendo en forma automática a todas las vacantes disponibles en
                                        los mercados que tu elijas. Son centenas de posibilidades disponibles en TU
                                        IBJOBCOACH.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default" style="margin-top: 20px;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <div class="form-group is-empty">
                                                        <label class="control-label" for="jobsSearch">
                                                            Buscar </label>
                                                        <input type="text" class="form-control" id="jobsSearch" placeholder="Búsqueda">
                                                        <span class="material-input"></span>
                                                    </div>
                                                    <?php
                                                    $nombrepagina = "job.php";
                                                    $area = "#jobs-content";
                                                    ?>
                                                    <div style="display:flex;justify-content: center;">
                                                        <button onclick="paginacionjobs(1,'<?php echo $nombrepagina; ?>','<?php echo $area; ?>')" class="btn btn-primary">Buscar</buttton>
                                                        <button onclick="paginacion(1,'<?php echo $nombrepagina; ?>','<?php echo $area; ?>')" class="btn btn-danger">Quitar filtro</buttton>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                        <div id="jobs-wrapper" data-countries="3">
                                            <div class="row">
                                                <div class="panel-body job-panel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <a href="javascript: void(0);" data-toggle="modal" data-target="#modal-suggest-job">
                                                                <button class="btn btn-primary suggest-job">
                                                                    <i class="fas fa-angle-double-up"></i>
                                                                    Indicar oferta laboral </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="center">Jobs disponibles</h3>
                                                            <div class="panel-group" id="jobs-content" role="tablist" aria-multiselectable="true"> <input type="hidden" class="hidden" value="0" id="jobs-offset">
                                                                <?php include('job.php'); ?>
                                                            </div>

                                                            <div id="jobs-load" style="display: none;">
                                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                                <p class="text-center">Cargando…</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="center">Jobs aplicados</h3>
                                                            <div class="panel-group" id="jobs-checked-content" role="tablist" aria-multiselectable="true">
                                                                <div class="alert alert-info">No se encontraron
                                                                    vacantes.</div>
                                                            </div>

                                                            <div id="jobs-checked-load" style="display: none;">
                                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                                <p class="text-center">Cargando…</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Modal Sugerir Vaga -->
                            <div class="modal fade" id="modal-suggest-job" tabindex="-1" role="dialog" aria-labelledby="modal-suggest-job-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post" class="ajax">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="modal-suggest-job-label">Indicar oferta
                                                    laboral</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Conoces alguna oferta laboral que no está listada?</p>
                                                <p>Completa los campos abajo y nuestro equipo lo disponibilizará en el
                                                    sistema:</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_company">
                                                                <i class="fa"></i>
                                                                Empresa <span class="required" data-toggle="tooltip" title="" data-original-title="Este campo es obligatorio"> *
                                                                </span>
                                                            </label>
                                                            <input type="text" name="company" id="job_company" class="form-control" required="required">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_position">
                                                                <i class="fa"></i>
                                                                Posición <span class="required" data-toggle="tooltip" title="" data-original-title="Este campo es obligatorio"> *
                                                                </span>
                                                            </label>
                                                            <input type="text" name="position" id="job_position" class="form-control" required="required">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_area">
                                                                Area </label>
                                                            <select id="job_area" name="job_area" class="form-control">
                                                                <option value="">(Selecione)</option>

                                                                <option value="Administrativo &amp; Financiero">
                                                                    Administrativo &amp; Financiero</option>
                                                                <option value="Alta Gerencia">Alta Gerencia</option>
                                                                <option value="Comercial &amp; Ventas">Comercial &amp;
                                                                    Ventas</option>
                                                                <option value="Ingeniería">Ingeniería</option>
                                                                <option value="Legal">Legal</option>
                                                                <option value="Marketing">Marketing</option>
                                                                <option value="Operaciones &amp; Supply">Operaciones
                                                                    &amp; Supply</option>
                                                                <option value="Recursos Humanos">Recursos Humanos
                                                                </option>
                                                                <option value="Tecnología de la Información">Tecnología
                                                                    de la Información</option>

                                                            </select>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_country">
                                                                País </label>
                                                            <select id="job_country" name="job_country" class="form-control">
                                                                <option value="">(Selecione)</option>

                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Brasil">Brasil</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="Estados Unidos">Estados Unidos</option>
                                                                <option value="Perú">Perú</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="México">México</option>
                                                                <option value="Ecuador">Ecuador</option>

                                                            </select>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_link">
                                                                <i class="fa"></i>
                                                                Enlace <span class="required" data-toggle="tooltip" title="" data-original-title="Este campo es obligatorio"> *
                                                                </span>
                                                            </label>
                                                            <input type="url" id="job_link" name="job_link" class="form-control" required="required" maxlength="255">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group is-empty">
                                                            <label class="control-label" for="job_message">
                                                                <i class="fa"></i>
                                                                Otros comentarios </label>
                                                            <textarea name="job_message" id="job_message" class="form-control"></textarea>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="name" value="Pablo Perez">
                                                <input type="hidden" name="email" value="edgarmc2217@gmail.com">
                                                <input type="hidden" name="phone" value="">
                                                <input type="hidden" name="formId" value="suggest-job">
                                                <input type="hidden" name="user_country" value="Perú">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim da Modal Encontrei um Trabalho -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="boards-tab" data-dynamic="no">
                            <div id="boards-wrapper" data-countries="3">
                                <div class="panel-group" id="boards-content" role="tablist" aria-multiselectable="true">
                                    <?php include('JobBoard.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="translation-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Traducción de CV</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 margin-top-35">
                                            <div class="row">
                                                <div class="col-md-8 right">
                                                    <a target="_blank" href="https://www.enotraspalabras.cl/"><img src="dna/img/logo-enotras-traducao.png" alt="Logo Empresa de tradução: En Otras Palabras"></a>
                                                </div>
                                                <div class="col-md-4 left">
                                                    <div class="row">
                                                        <div class="col-md-12 center">
                                                            <img src="dna/img/bandeirinhas/peru.png" style="width:20px; height:20px; margin-top: 5;" alt="Bandeira do Brasil">
                                                            <img src="dna/img/bandeirinhas/espana.png" style="width:20px; height:20px; margin-top: 5;" alt="Bandeira da Espanha">
                                                            <img src="dna/img/bandeirinhas/chile.png" style="width:20px; height:20px; margin-top: 5;" alt="Bandeira dos EUA">
                                                            <img src="dna/img/bandeirinhas/mexico.png" style="width:20px; height:20px; margin-top: 5;" alt="Bandeira da França">
                                                            <img src="dna/img/bandeirinhas/colombia.png" style="width:20px; height:20px; margin-top: 5;" alt="Bandeira da Itália">
                                                        </div>
                                                        <div class="col-md-12 center">
                                                            <a href="https://www.enotraspalabras.cl/" target="_blank">www.enotraspalabras.cl</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="top">Dra. Luciana Pissolato Oliveira</h3>
                                            <b class="upper">Formactión</b><br>
                                            Licenciada en Letras – UFSCAR – Universidad Federal de São Carlos - 2002<br>
                                            Magíster – USP – Universidade de São Paulo - 2007<br>
                                            Doctorado – USP – Universidad de São Paulo - 2011<br><br>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>El CV es la primera imagen que una empresa tiene de ti. Tenerlo revisado, bien traducido y sin
                                        errores gramaticales te ayuda a dejar una buena primera impresión.</p>
                                    <p>Los Partners Externos de IBjobcoach les pueden ayudar en eso, en tiempos records y valores accesibles.
                                        Contacte nuestros colaboradores para saber cómo funciona. ¡Valores promocionales!</p>
                                    Servicios: <ul>
                                        <li>Traducción: traducimos tu Cv al idioma que necesites</li>
                                        <li>Revisión: revisamos la ortografía y gramática de tu Cv</li>
                                        <li>Localización: ajustamos tu CV a los idiomas o variantes locales</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row">

                                <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Enviar para traducción </h3>
                                    </div>
                                    <div class="panel-body" id="cv-upload">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">

                                                <!--*******************************************************************************************************************************-->
                                                <form name="traduccion_cv" method="post" enctype="multipart/form-data" id="traduccion_cv" style="display:flex; flex-direction:column; justify-content:center;">
                                                    <!--DETERMINAR EL TIPO DE INFORMACIÓN-->
                                                    <div class="form-group">
                                                        <label class="control-label" for="languages">
                                                            Seleccione el idioma destino al cual quiere traducir </label>
                                                    </div>
                                                    <div class="checkbox-group required" style="display:flex; justify-content:center;">

                                                        <input type="hidden" name="email" value="<?php echo $nombre_usuario ?>">

                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="language[]" value="es">Español </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="language[]" value="en">Inglés </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="language[]" value="pt">Portugués </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label class="control-label" for="my-cv-upload-input">
                                                                Archivo </label>

                                                            <div class="input-group">
                                                                <input type="text" readonly="" class="form-control" placeholder="Envíe su curriculum" name="archivo">
                                                                <span class="input-group-btn input-group-sm">
                                                                    <button type="button" class="btn  btn-round btn-default" style="position:relative;">
                                                                        <input type="file" name="file" id="my-cv-upload-input" required="true" class="boton_adjuntar">
                                                                        <i class="fa fa-file"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group pull-right" style="display:flex; justify-content:center;">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fas fa-cloud"></i>
                                                            Enviar </button>
                                                    </div>
                                                </form>
                                                <!--*******************************************************************************************************************************-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="headhunters-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">HeadHunters</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Tu CV en las manos de las principales empresas de reclutamiento y selección del
                                        pais. En forma automática.</p>

                                    <p>IBJobcoach posee en su base de datos el contacto de todos los Headhunters del mercado.
                                        Eso significa que tu CV llegue a las manos de las personas que manejan las
                                        vacantes disponibles en el mercado, en forma automática y precisa.</p>
                                </div>
                            </div>
                            <div id="headhunters-wrapper" data-countries="3">
                                <div class="row">
                                    <div class="panel-body headhunters-panel">
                                        <div class="row">
                                            <div class="panel-group" id="headhunters-content" role="tablist" aria-multiselectable="true"><input type="hidden" class="hidden" value="0" id="headhunters-offset">


                                                <?php include('Headhunters.php'); ?>


                                            </div>
                                            <div id="headhunters-load" style="display: none;">
                                                <img src="ibvirtual/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                <p class="text-center">Cargando…</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="recruiters-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Reclutadores</p>
                                </div>
                                <div class="col-md-12">
                                    <p>La manera más efectiva de que tu información llegue a las manos de los reclutadores de las
                                        empresas.</p>

                                    <p>Através de esta opción puedes acceder al mail de contacto de los encargados de reclutamiento en
                                        cada empresa, acortando los tiempos de postulación a las vacantes disponibles o simplemente logrando
                                        generar reuniones para darte a conocer.</p>
                                </div>
                            </div>
                            <div id="recruiters-wrapper" data-countries="3">
                                <div class="row">
                                    <div class="panel-body recruiters-panel">
                                        <div class="row">
                                            <div class="panel-group" id="recruiters-content" role="tablist" aria-multiselectable="true"><input type="hidden" class="hidden" value="0" id="recruiters-offset">
                                                <div id="contenidoRecluters">
                                                    <?php include('Recluters.php'); ?>
                                                </div>
                                            </div>
                                            <div id="recruiters-load" style="display: none;">
                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                <p class="text-center">Cargando…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prospeccao-redes-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Prospección y redes</p>
                                </div>
                                <div class="col-md-12">
                                    <p>No todo en el mundo es redes sociales digitales. Cada contacto profesional que realices es un
                                        potencial apoyo para tu proceso de creación de redes. En esta sección conocerás contenidos asociados
                                        al proceso de prospección profesional y de construcción de redes de contactos.</p>
                                </div>
                            </div>
                            <div id="prospeccao-redes-wrapper" data-countries="3">
                                <div class="panel-group" id="prospeccao-redes-content" role="tablist" aria-multiselectable="true">
                                    <?php include('ProspeccionRedes.php'); ?>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="partners-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Empresas Partners</p>
                                </div>
                                <div class="col-md-12">
                                    <p><strong>IBjobcoach te da la oportunidad de que miles de empresas vean tu perfil!</strong></p>
                                    <p>A continuación, encontrarás una lista de empresas que reciben información de los usuarios de IBjobcoach
                                        semanalmente. Esas empresas pueden estar buscando un perfil exactamente como el tuyo y nuestro
                                        trabajo es hacer que se conozcan.</p>
                                    <p>Garantizamos que sus informaciones llegarán de manera efectiva a las empresas más grandes del
                                        mercado, y en manos de las personas que toman las decisiones.</p>
                                    <p>Para incluir su histórico en los envíos periódicos que hacemos, es necesario que nos autorice, por
                                        médio de la plataforma IBjobcoach, la inclusión de sus datos en nuestro <b>Book OPM</b>.</p>
                                </div>
                            </div>
                            <div id="partners-wrapper" data-countries="3">
                                <div class="panel-group" id="partners-content" role="tablist" aria-multiselectable="true">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Hay <code>2</code> empresas parceiras cadastradas.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="partner">
                                                <img src="./image/partners/abengoa.jpg" class="img-responsive block-center">
                                                <h3>
                                                    <img src="./dna/img/bandeirinhas/peru.png"> <span class="unicode-to-emoji">Abengoa Peru</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="partner">
                                                <img src="./image/partners/unilever.jpg" class="img-responsive block-center">
                                                <h3>
                                                    <img src="./dna/img/bandeirinhas/peru.png"> <span class="unicode-to-emoji">Unilever</span>
                                                </h3>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="linkedin-tab" data-dynamic="no">
                            <!-- MODAL DE UPLOAD -->
                            <div class="modal fade" id="linkedin-file-upload" tabindex="-1" role="dialog" aria-labelledby="linkedin-file-upload-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post" enctype="multipart/form-data" id="linkedin-file-upload-form">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="linkedin-file-upload-label">
                                                    Envío de Archivo </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-warning">
                                                            <i class="fas fa-warning"></i>
                                                            No abra o edite el archivo antes de importar. Debe estar en
                                                            formato ZIP o CSV y debe poseer el estándar definido por
                                                            LinkedIn.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group is-empty is-fileinput">
                                                            <label class="control-label" for="linkedin-file-upload-input">
                                                                Archivo </label>
                                                            <input type="file" name="linkedin-file-upload-input" id="linkedin-file-upload-input" required="true">
                                                            <div class="input-group">
                                                                <input type="text" readonly="" class="form-control text-file" placeholder="Envíe su archivo.">
                                                                <span class="input-group-btn input-group-sm">
                                                                    <button type="button" class="btn btn-fa btn-round btn-default">
                                                                        <i class="fas fa-file"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Cerrar </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-cloud-upload"></i>
                                                    Enviar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM DA MODAL DE UPLOAD -->
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">LinkedIn</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Importe y organice todos sus contactos de LinkedIn.</p>
                                    <p>
                                        <a href="https://www.linkedin.com/help/linkedin/answer/66844/exporting-connections-from-linkedin?lang=es" target="_blank">
                                            <i class="fas fa-question-circle"></i> Aprenda cómo exportar sus datos de
                                            LinkedIn </a>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary" id="linkedin-upload-button">
                                            <i class="fas fa-plus"></i>
                                            Importar Archivo </button>

                                    </p>
                                </div>
                                <div class="col-12">
                                    <div class="row" id="miLinke" style="display:none; padding: 1.2em;">



                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default" style="margin-top: 20px;">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <form method="POST" class="form-group is-empty" id="formLinke">
                                                        <label class="control-label" for="linkedinSearch">
                                                            Buscar </label>
                                                        <input type="text" class="form-control" id="linkedinSearch" placeholder="Búsqueda">
                                                        <span class="material-input"></span>
                                                        <div style="display:flex;justify-content: center; padding-top: 10px;">
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                            <button type="button" id="quitar-filL" class="btn btn-danger">Quitar Filtro</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="linkedin-wrapper" data-countries="3">
                                            <div class="row">
                                                <div class="panel-body job-panel" id="linke">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="center">Disponible</h3>
                                                            <div class="row" id="disponible" style="padding: 0px 15px;">

                                                            </div>
                                                            <div id="linkedin-load" style="display: none;">
                                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                                <p class="text-center">Cargando…</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="center">Contacto</h3>
                                                            <div class="row" id="contactado" style="padding: 0px 15px;">

                                                            </div>
                                                            <div id="linkedin-checked-load" style="display: none;">
                                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando…" class="center-block">
                                                                <p class="text-center">Cargando…</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="my-area-tab" data-dynamic="no">

                            <!-- MODAL DE UPLOAD -->
                            <div class="modal fade my-file-upload" id="my-file-upload" tabindex="-1" role="dialog" aria-labelledby="my-file-upload-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/online/files/upload" method="post" enctype="multipart/form-data" id="my-file-upload-form">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="my-file-upload-label">
                                                    Envío de Archivo </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-file-upload-input">
                                                                Archivo </label>
                                                            <input type="file" name="archivo" id="archivo" required="true">
                                                            <div class="input-group">
                                                                <input type="text" readonly="" class="form-control" placeholder="Envíe su archivo.">
                                                                <span class="input-group-btn input-group-sm">
                                                                    <button type="button" class="btn btn-fa btn-round btn-default">
                                                                        <i class="fas fa-file"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-file-upload-title">
                                                                Título (Opcional)
                                                            </label>
                                                            <input type="text" name="titulo" id="my-file-upload-title" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-info alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <i class="fas fa-info-circle"></i>
                                                            El límite para el envío de archivos en este servidor es de 200 MB.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Cerrar </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-cloud-upload"></i>
                                                    Enviar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM DA MODAL DE UPLOAD -->

                            <!-- MODAL DE RENOMEAR ARQUIVOS -->
                            <div class="modal fade" id="my-file-rename" tabindex="-1" role="dialog" aria-labelledby="my-file-rename-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/online/files/rename" method="post">
                                            <input type="hidden" name="id" value="">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="my-file-rename-label">
                                                    Edición de Archivo </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-file-rename-title">
                                                                Título (Opcional)
                                                            </label>
                                                            <input type="text" name="name" id="my-file-rename-title" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Cerrar </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save"></i>
                                                    Grabar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM DA MODAL DE RENOMEAR ARQUIVOS -->

                            <!-- MODAL DE CADASTRO DE PROCESSO -->
                            <div class="modal fade" id="my-interview" tabindex="-1" role="dialog" aria-labelledby="my-interview-label">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post" id="mi_proceso">
                                            <input type="hidden" name="id" value="">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="my-interview-label">
                                                    Mi Proceso </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-company">
                                                                Empresa <span class="required" data-toggle="tooltip" title="Este campo es obligatorio">
                                                                    * </span>
                                                            </label>
                                                            <input type="text" name="company" class="form-control" placeholder="Empresa donde Trabajará" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-position">
                                                                Posición <span class="required" data-toggle="tooltip" title="Este campo es obligatorio">
                                                                    * </span>
                                                            </label>
                                                            <input type="text" name="position" class="form-control" placeholder="Posición en que trabajará" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-area">
                                                                Area <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> *
                                                                </span>
                                                            </label>
                                                            <select name="area_id" class="form-control" id="my-interview-area" required="required">
                                                                <option value="">(Seleccione)</option>
                                                                <?php
                                                                $sentencia = $connect->prepare("SELECT * FROM area");
                                                                $sentencia->execute();

                                                                $area = $sentencia->fetchAll();
                                                                foreach ($area as $key => $value) : ?>
                                                                    <option value="<?php echo $value["id_area"]; ?>">
                                                                        <?php echo $value["nombre_area"]; ?> </option>
                                                                <?php
                                                                endforeach;
                                                                ?>

                                                                <!--<option value="172">
                                                                    Administrativo & Financiero </option>
                                                                <option value="179">
                                                                    Alta Gerencia </option>
                                                                <option value="178">
                                                                    Comercial & Ventas </option>
                                                                <option value="175">
                                                                    Ingeniería </option>
                                                                <option value="173">
                                                                    Legal </option>
                                                                <option value="177">
                                                                    Marketing </option>
                                                                <option value="176">
                                                                    Operaciones & Supply </option>
                                                                <option value="180">
                                                                    Recursos Humanos </option>
                                                                <option value="174">
                                                                    Tecnología de la Información </option>-->

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-country">
                                                                País <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> *
                                                                </span>
                                                            </label>
                                                            <select name="country_id" class="form-control" id="my-interview-country" required="required">
                                                                <option value="">(Seleccione)</option>
                                                                <?php
                                                                $sentencia = $connect->prepare("SELECT * FROM pais");
                                                                $sentencia->execute();

                                                                $area = $sentencia->fetchAll();
                                                                foreach ($area as $key => $value) : ?>
                                                                    <option value="<?php echo $value["id_pais"]; ?>">
                                                                        <?php echo $value["nom_pais"]; ?> </option>
                                                                <?php
                                                                endforeach;
                                                                ?>

                                                                <!--<option value="9">
                                                                    Argentina </option>
                                                                <option value="2">
                                                                    Brasil </option>
                                                                <option value="1">
                                                                    Chile </option>
                                                                <option value="4">
                                                                    Estados Unidos </option>
                                                                <option value="3">
                                                                    Perú </option>
                                                                <option value="20">
                                                                    Colombia </option>
                                                                <option value="104">
                                                                    México </option>
                                                                <option value="107">
                                                                    Ecuador </option>-->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-location">
                                                                Localización </label>
                                                            <input type="text" name="location" class="form-control" placeholder="Ubicación en la que trabajará">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-salary">
                                                                Sueldo </label>
                                                            <input type="text" name="salary" class="form-control" placeholder="Valor ofrecido o que piensa pedir">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-company">
                                                                Sobre la posición </label>
                                                            <textarea class="form-control" name="description" placeholder="Si sabe más informaciones sobre la posición o el proceso, informe acá."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-interviewer">
                                                                Entrevistador </label>
                                                            <input type="text" name="interviewer" class="form-control" placeholder="Con quién va a hablar en la empresa?">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-url">
                                                                URL de la Posición </label>
                                                            <input type="url" name="url" class="form-control" placeholder="Página web donde salió la posición">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="my-interview-email">
                                                                Correo </label>
                                                            <input type="email" name="email" class="form-control" placeholder="Correo para contacto sobre la posición o del entrevistador">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Cerrar </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save"></i>
                                                    Grabar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- FIM DA MODAL DE CADASTRO DE PROCESSO -->


                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Mi información</p>
                                </div>
                                <div class="col-md-12">
                                    <p>Repositorio de toda la información acerca del usuario: CV, Linkedin, entre otros.</p>

                                    <p>Para que IBjobcoach pueda multiplicar la información acerca de sus usuarios es fundamental que este
                                        completa y en un mismo lugar. Revisa esta funcionalidad y garantiza que este siempre actualizada.
                                    </p>
                                </div>
                            </div>

                            <br />


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-group" id="my-area-content" role="tablist" aria-multiselectable="true">

                                        <!-- MEUS ARQUIVOS -->
                                        <div class="panel panel-default panel-my-area" id="my-files-panel">
                                            <div class="panel-heading" role="tab" id="heading-my-area-files">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#my-area-content" href="/#collapse-my-area-files" aria-expanded="false" aria-controls="collapse-my-area-files">
                                                        Mis Archivos </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-my-area-files" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-my-area-files">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="alert alert-info alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <p>Usted puede añadir acá sus archivos, como su CV, por ejemplo.</p>
                                                                <p>Sus archivos son confidenciales y privados. Solo usted y los administradores del
                                                                    sistema tienen acceso a ellos.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-primary" id="my-files-upload-button">
                                                                    <i class="fas fa-plus"></i>
                                                                    Añadir Archivo </button>
                                                                <button type="button" class="btn btn-primary" id="misArchivos">
                                                                    <i class="fas fa-eyes"></i>
                                                                    Ver mis Archivos
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="ArchivosMi" style="display: none;">

                                                    </div>
                                                    <div class="loading">
                                                        <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;">
                                                        <p class="text-center">Cargando&hellip;</p>
                                                    </div>
                                                    <div class="row" id="user-files-list"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIM DOS MEUS ARQUIVOS -->

                                        <!-- MEUS PROCESSOS -->
                                        <div class="panel panel-default panel-my-area" id="my-processes-panel">
                                            <div class="panel-heading" role="tab" id="heading-my-area-processes">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#my-area-content" href="/#collapse-my-area-processes" aria-expanded="false" aria-controls="collapse-my-area-processes">
                                                        Mis procesos </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-my-area-processes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-my-area-processes">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="alert alert-info alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <p>Usted puede añadir acá los procesos de selección y entrevistas que hará.</p>
                                                                <p>Los consultores de Outplacement podrán ayudarle con tips específicos sobre la
                                                                    empresa, posición o sobre el entrevistador.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button class="btn btn-primary" data-trigger="add-interview">
                                                                    <i class="fas fa-plus"></i>
                                                                    Incluir Proceso </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <form class="col-md-6">
                                                            <h3 class="center">MI Procesos</h3>
                                                            <div id="proceso-i"></div>
                                                        </form>
                                                        <div class="col-md-6">
                                                            <h3 class="center">Proceso</h3>
                                                            <div id="proceso-v" style="box-shadow: 0 1px 6px 0 rgb(0 0 0 / 12%), 0 1px 6px 0 rgb(0 0 0 / 12%);">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="loading">
                                                                <img src="dna/img/loading-spinner-grey.gif" alt="Cargando&hellip;">
                                                                <p class="text-center">Cargando&hellip;</p>
                                                            </div>
                                                            <ul id="interview-list" class="list-group"></ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIM DOS MEUS PROCESSOS -->

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="conhecimento-pessoal-tab" data-dynamic="yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Conocimento Personal</p>
                                </div>
                                <div class="col-md-12">
                                    <p>El autoconocimiento es clave para construir los líderes del futuro. Conociendo tus fortalezas y
                                        oportunidades de mejora podrás construir y madurar tu perfil como profesional. En esta sección
                                        obtienes contenidos asociados al proceso de Desarrollo personal y coaching para profesionales.</p>
                                </div>
                            </div>
                            <div id="conhecimento-pessoal-wrapper" data-countries="3">
                                <div class="panel-group" id="conhecimento-pessoal-content" role="tablist" aria-multiselectable="true">
                                    <div id="conocimientoPers">
                                        <?php include('ConocimientoPersonal.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="coworks-tab" data-dynamic="no">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lead">Coworkings</p>
                                </div>
                                <div class="col-md-12">
                                    <p></p>
                                </div>
                            </div>
                            <div id="coworks-wrapper" data-countries="3">
                                <div class="panel-group" id="coworks-content" role="tablist" aria-multiselectable="true">
                                    <?php include('Coworkers.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="business-tab" data-dynamic="no">
                            <div id="business-wrapper" data-countries="3">
                                <div class="panel-group" id="business-content" role="tablist" aria-multiselectable="true">
                                    <?php include('Emprendimiento.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="firstjob-tab" data-dynamic="no">
                            <div id="firstjob-wrapper" data-countries="3">
                                <div class="panel-group" id="firstjob-content" role="tablist" aria-multiselectable="true">
                                    <?php include('PrimerTrabajo.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tendencies-tab" data-dynamic="no">
                            <div id="tendencies-wrapper" data-countries="3">
                                <div class="panel-group" id="tendencies-content" role="tablist" aria-multiselectable="true">
                                    <?php include('TendenciasLaborales.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="young-tab" data-dynamic="no">
                            <div id="young-wrapper" data-countries="3">
                                <div class="panel-group" id="young-content" role="tablist" aria-multiselectable="true">
                                    <?php include('JovenEmprendedor.php'); ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="manual-tab">
                            <div class="row">
                                <div class="panel panel-default panel-product" style="margin-top: 20px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Descargue del manual </h3>
                                    </div>
                                    <div class="panel-body" id="manual">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group list-user-files">

                                                    <li class="list-group-item">
                                                        <i class="far fa-file"></i>
                                                        <a href="dna/Manual usuario IBJobCoach.pdf" target="_blank">PDF (Español)</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--COMIENZA PERFIL-->

                        <div role="tabpanel" class="tab-pane fade " id="perfil-tab">
                            <div class="row">
                                <div class="col-md-4" style="display:flex; flex-direction:column; padding-left:0px; margin-top:25px;">
                                    <button class="boton_info" id="boton_info1" style="background:#20B85E;" onclick="infopersonal();">Información Personal</button>
                                    <button class="boton_info" id="boton_info2" onclick="localiz();">Localización</button>
                                    <button class="boton_info" id="boton_info3" onclick="educacion();">Educación</button>
                                    <button class="boton_info" id="boton_info4" onclick="info_profesional();">Informaciones Profesionales</button>
                                    <button class="boton_info" id="boton_info5" onclick="referencia_profesional();">Referencias Profesionales</button>
                                    <button class="boton_info" id="boton_info6" onclick="resumen_perfil();">Resumen del Perfil</button>
                                    <button class="boton_info" id="boton_info7" onclick="book_candidato();">Book de Candidatos</button>
                                </div>

                                <div class="col-md-8" style="padding:0px;" id="perfilUsuario1">
                                    <form method="post" enctype="multipart/form-data" autocomplete="off" style="border:2px solid black; border-radius:15px; min-height:660px;" id="perfilUsuario2">
                                        <!--*******************************************************Información Personal*************************************************-->
                                        <div class="panel panel-default panel_info_general" id="info_personal" style="display:block;">
                                            <div class="panel-body" style="padding-bottom:0px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="nombres">
                                                                <i class="fa"></i>NOMBRES
                                                                <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                            </label>
                                                            <input type="hidden" name="id" value="<?php echo $alu->id; ?>">
                                                            <input type="text" class="alrededor form-control" name="nombres" placeholder="Nombre" required="required" value="<?php echo $persona->nombrecliente; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="apellidos">
                                                                APELLIDOS<span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                            </label>
                                                            <input type="text" class="alrededor form-control" name="apellidos" placeholder="Apellidos" required="required" value="<?php echo $persona->apellidocliente; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="document">
                                                                <i class="fa"></i>DOCUMENTO
                                                            </label>
                                                            <input type="text" class=" alrededor form-control" name="document" placeholder="Documento" required="required" value="<?php echo ($persona2 != NULL) ? $persona2->document : ""; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">
                                                                <i class="fa"></i>TELÉFONO
                                                            </label>
                                                            <input type="tel" class=" alrededor form-control" name="phone" placeholder="Su Teléfono" required="required" value="<?php echo $persona->telefono; ?>">
                                                            <p class="textoImportante help-block">Ingrese su teléfono completo, con el código del país.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">
                                                                <i class="fa"></i>
                                                                CORREO <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                            </label>
                                                            <input type="email" class="alrededor form-control" readonly name="email" placeholder="Correo electrónico" required="required" value="<?php echo $persona->correo; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="password">
                                                                <i class="fa"></i>CONTRASEÑA
                                                            </label>
                                                            <input type="password" class="alrededor form-control" name="password" id="password" placeholder="Contraseña" required value="<?php echo $persona->clave; ?>">
                                                            <p class="textoImportante help-block">Utilice <span class="relative-time" data-toggle="tooltip" data-placement="bottom" title="Mezcle letras mayúsculas y minúsculas, números y puntuación">mínimo de 8 caracteres</span> (mayúsculas,minúsculas,números).</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="password_confirmation">
                                                                <i class="fa"></i>
                                                                REPITA LA CONTRASEÑA
                                                            </label>
                                                            <input type="password" class="alrededor form-control" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña" value="<?php echo $persona2->password_confirmation; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">IMAGEN DE PERFIL </label>
                                                            <input type="hidden" name="nom_img" id="nom_img" readonly class="alrededor" value="">
                                                            <div class="input-group">
                                                                <input type="text" name="ruta" readonly="" class="alrededor form-control" placeholder="Inserte una imagen en formato .PNG, .JPG, .GIF de 150 x 150 pixeles." value="<?php echo $persona2->avatar; ?>">
                                                                <span class="input-group-btn input-group-sm">
                                                                    <button type="file" name="avatar" class="btn btn-fa btn-round btn-default" style="position:relative;">
                                                                        <input type="file" name="archivo" class="boton_adjuntar archivo">
                                                                        <i class="fas fa-upload"></i>
                                                                    </button>
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="linkedin">
                                                                <i class="fa"></i>SU PÁGINA DE LINKENDIN
                                                            </label>
                                                            <input type="url" class="alrededor form-control" name="linkedin" placeholder="https://www.linkedin.com/&hellip;" value="<?php if ($persona2 == NULL) {
                                                                                                                                                                                        echo "";
                                                                                                                                                                                    } else {
                                                                                                                                                                                        echo $persona2->linkedin;
                                                                                                                                                                                    } ?>">
                                                            <p class="textoImportante help-block">Copie y pegue la <strong>dirección</strong> de su página de LinkedIn aquí.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--***************************************************************Localización*************************************************************-->
                                        <div class="panel panel-default panel_info_general" id="localiz">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="birth_country_id">
                                                                <i class="fa"></i>PAÍS DE NACIMIENTO
                                                            </label>
                                                            <select class="alrededor form-control" name="birth_country_id" id="birth_country_id">
                                                                <option value="<?php if (empty($persona2->birth_country_id)) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->birth_country_id;
                                                                                } ?>" selected="selected"><?php if (empty($persona2->birth_country_id)) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->birth_country_id;
                                                                                                            } ?></option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Brasil">Brasil</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="Estados Unidos">Estados Unidos</option>
                                                                <option value="Perú">Perú</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="México">México</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="">(Otro)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="current_country_id">
                                                                <i class="fa"></i>
                                                                PAÍS ACTUAL <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                            </label>
                                                            <select class="alrededor form-control" name="current_country_id" id="current_country_id">
                                                                <option value="<?php if (empty($persona2->current_country_id)) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->current_country_id;
                                                                                } ?>" selected="selected"><?php if ($persona2 == NULL) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->current_country_id;
                                                                                                            } ?></option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Brasil">Brasil</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="Estados Unidos">Estados Unidos</option>
                                                                <option value="Perú">Perú</option>
                                                                <option value="colombia">Colombia</option>
                                                                <option value="México">México</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="user_countries">
                                                                <i class="fa"></i>
                                                                PAÍSES META <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="display:flex; flex-direction:column">
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Argentina" name="user_countries[]" value="Argentina" <?php
                                                                                                                                            $variable = explode('|', $persona2->user_countries);
                                                                                                                                            foreach ($variable as $var) {
                                                                                                                                                echo ($var == 'Argentina') ? 'checked' : '';
                                                                                                                                            }
                                                                                                                                            ?>> ARGENTINA
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Chile" name="user_countries[]" value="Chile" <?php
                                                                                                                                    $variable = explode('|', $persona2->user_countries);
                                                                                                                                    foreach ($variable as $var) {
                                                                                                                                        echo ($var == 'Chile') ? 'checked' : '';
                                                                                                                                    }
                                                                                                                                    ?>> CHILE
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Brasil" name="user_countries[]" value="Brasil" <?php
                                                                                                                                        $variable = explode('|', $persona2->user_countries);
                                                                                                                                        foreach ($variable as $var) {
                                                                                                                                            echo ($var == 'Brasil') ? 'checked' : '';
                                                                                                                                        }
                                                                                                                                        ?>> BRASIL
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Estados_Unidos" name="user_countries[]" value="Estados_Unidos" <?php
                                                                                                                                                        $variable = explode('|', $persona2->user_countries);
                                                                                                                                                        foreach ($variable as $var) {
                                                                                                                                                            echo ($var == 'Estados_Unidos') ? 'checked' : '';
                                                                                                                                                        }
                                                                                                                                                        ?>> ESTADOS UNIDOS
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" style="display:flex; flex-direction:column">
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Perú" name="user_countries[]" value="Perú" <?php
                                                                                                                                    $variable = explode('|', $persona2->user_countries);
                                                                                                                                    foreach ($variable as $var) {
                                                                                                                                        echo ($var == 'Perú') ? 'checked' : '';
                                                                                                                                    }
                                                                                                                                    ?>> PERÚ
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Colombia" name="user_countries[]" value="Colombia" <?php
                                                                                                                                            $variable = explode('|', $persona2->user_countries);
                                                                                                                                            foreach ($variable as $var) {
                                                                                                                                                echo ($var == 'Colombia') ? 'checked' : '';
                                                                                                                                            }
                                                                                                                                            ?>> COLOMBIA
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="México" name="user_countries[]" value="México" <?php
                                                                                                                                        $variable = explode('|', $persona2->user_countries);
                                                                                                                                        foreach ($variable as $var) {
                                                                                                                                            echo ($var == 'México') ? 'checked' : '';
                                                                                                                                        }
                                                                                                                                        ?>> MÉXICO
                                                        </label>
                                                        <label class="alrededor form-control" for="user_countries" style="margin-bottom:20px;">
                                                            <input type="checkbox" id="Ecuador" name="user_countries[]" value="Ecuador" <?php
                                                                                                                                        $variable = explode('|', $persona2->user_countries);
                                                                                                                                        foreach ($variable as $var) {
                                                                                                                                            echo ($var == 'Ecuador') ? 'checked' : '';
                                                                                                                                        }
                                                                                                                                        ?>> ECUADOR
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--**************************************************************Educación****************************************************************-->
                                        <div class="panel panel-default panel_info_general" id="educacion" style="margin-top: 20px; display:none;">
                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="institution">
                                                                <i class="fa"></i>
                                                                UNIVERSIDAD </label>
                                                            <input type="text" name="institution" id="institution" class="alrededor form-control" maxlength="255" value="<?php if (empty($persona2->institution)) {
                                                                                                                                                                                echo "";
                                                                                                                                                                            } else {
                                                                                                                                                                                echo $persona2->institution;
                                                                                                                                                                            } ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="education">
                                                                <i class="fa"></i>
                                                                FORMACIÓN (Curso Superior)
                                                            </label>
                                                            <input type="text" name="education" id="education" class="alrededor form-control" maxlength="255" value="<?php if (empty($persona2->education)) {
                                                                                                                                                                            echo "";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo $persona2->education;
                                                                                                                                                                        } ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label" for="language_en">
                                                            <i class="fa"></i>
                                                            NIVEL DE IDIOMA (English) </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_en" value="Ninguno" <?php echo ($persona2->language_en == "Ninguno") ? "checked" : "" ?>>
                                                                Ninguno </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_en" value="Básico" <?php echo ($persona2->language_en == "Básico") ? "checked" : "" ?>>
                                                                Básico </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_en" value="Mediano" <?php echo ($persona2->language_en == "Mediano") ? "checked" : "" ?>>
                                                                Mediano </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_en" value="Avanzado" <?php echo ($persona2->language_en == "Avanzado") ? "checked" : "" ?>>
                                                                Avanzado </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label" for="language_es">
                                                            <i class="fa"></i>
                                                            NIVEL DE IDIOMA (Español) </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_es" value="Ninguno" <?php echo ($persona2->language_es == "Ninguno") ? "checked" : "" ?>>
                                                                Ninguno </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_es" value="Básico" <?php echo ($persona2->language_es == "Básico") ? "checked" : "" ?>>
                                                                Básico </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_es" value="Mediano" <?php echo ($persona2->language_es == "Mediano") ? "checked" : "" ?>>
                                                                Mediano </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_es" value="Avanzado" <?php echo ($persona2->language_es == "Avanzado") ? "checked" : "" ?>>
                                                                Avanzado </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label" for="language_pt">
                                                            <i class="fa"></i>
                                                            NIVEL DE IDIOMA (Português) </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_pt" value="Ninguno" <?php echo ($persona2->language_pt == "Ninguno") ? "checked" : "" ?>>
                                                                Ninguno </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_pt" value="Básico" <?php echo ($persona2->language_pt == "Básico") ? "checked" : "" ?>>
                                                                Básico </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_pt" value="Mediano" <?php echo ($persona2->language_pt == "Mediano") ? "checked" : "" ?>>
                                                                Mediano </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="language_pt" value="Avanzado" <?php echo ($persona2->language_pt == "Avanzado") ? "checked" : "" ?>>
                                                                Avanzado </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--***************************************************Informaciones Profesionales**********************************************************-->
                                        <div class="panel panel-default panel_info_general" id="info_profesional" style="margin-bottom:50px;">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="last_company">
                                                                <i class="fa"></i>
                                                                ÚLTIMA EMPRESA </label>
                                                            <input type="text" class="alrededor form-control" name="last_company" id="last_company" value="<?php if ($persona2 == NULL) {
                                                                                                                                                                echo "";
                                                                                                                                                            } else {
                                                                                                                                                                echo $persona2->last_company;
                                                                                                                                                            } ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="last_position">
                                                                <i class="fa"></i>
                                                                ÚLTIMA POSICIÓN LABORAL</label>
                                                            <input type="text" class="alrededor form-control" name="last_position" id="last_position" value="<?php if ($persona2 == NULL) {
                                                                                                                                                                    echo "";
                                                                                                                                                                } else {
                                                                                                                                                                    echo $persona2->last_position;
                                                                                                                                                                } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="experience">
                                                                <i class="fa"></i>
                                                                AÑOS DE EXPERIENCIA </label>
                                                            <select name="experience" id="experience" class="alrededor form-control">
                                                                <option value="<?php if (empty($persona2->experience) || $persona2->experience == NULL) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->experience;
                                                                                } ?> " selected="selected"><?php if (empty($persona2->experience) || $persona2->experience == NULL) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->experience;
                                                                                                            } ?></option>
                                                                <option value="Menos de 1 año">Menos de 1 año</option>
                                                                <option value="1">1 año</option>
                                                                <option value="2 años">2 años </option>
                                                                <option value="3 años">3 años </option>
                                                                <option value="4 años"> 4 años </option>
                                                                <option value="5 años"> 5 años </option>
                                                                <option value="6 años"> 6 años </option>
                                                                <option value="7 años"> 7 años </option>
                                                                <option value="8 años"> 8 años </option>
                                                                <option value="9 años"> 9 años </option>
                                                                <option value="10 años">10 años </option>
                                                                <option value="11 años">11 años </option>
                                                                <option value="12 años"> 12 años </option>
                                                                <option value="13 años"> 13 años </option>
                                                                <option value="14 años"> 14 años </option>
                                                                <option value="15 años"> 15 años </option>
                                                                <option value="16 años"> 16 años </option>
                                                                <option value="17 años"> 17 años </option>
                                                                <option value="18 años"> 18 años </option>
                                                                <option value="19 años"> 19 años </option>
                                                                <option value="20 años"> 20 años </option>
                                                                <option value="21 años"> 21 años </option>
                                                                <option value="22 años"> 22 años </option>
                                                                <option value="23 años"> 23 años </option>
                                                                <option value="24 años"> 24 años </option>
                                                                <option value="25 años"> 25 años </option>
                                                                <option value="26 años"> 26 años </option>
                                                                <option value="27 años"> 27 años </option>
                                                                <option value="28 años"> 28 años </option>
                                                                <option value="29 años"> 29 años </option>
                                                                <option value="30 años o más"> 30 años o más </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="working">
                                                                <i class="fa"></i>
                                                                ¿ESTÁS TRABAJANDO? </label>
                                                            <select name="working" id="working" class="alrededor form-control">
                                                                <option value="<?php if (empty($persona2->working) || $persona2->working == NULL) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->working;
                                                                                } ?> " selected="selected"><?php if (empty($persona2->working) || $persona2->working == NULL) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->working;
                                                                                                            } ?></option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="out_of_work">
                                                                <i class="fa"></i>
                                                                SI NO, ¿DESDE HACE CUANTO? </label>
                                                            <select name="out_of_work" id="out_of_work" class="alrededor form-control">
                                                                <option value="<?php if (empty($persona2->out_of_work) || $persona2->out_of_work == NULL) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->out_of_work;
                                                                                } ?> " selected="selected"><?php if (empty($persona2->out_of_work) || $persona2->out_of_work == NULL) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->out_of_work;
                                                                                                            } ?></option>
                                                                <option value="Menos de 1 mes">Menos de 1 mes</option>
                                                                <option value="1 mes">1 mes</option>
                                                                <option value="2 meses"> 2 meses </option>
                                                                <option value="3 meses"> 3 meses </option>
                                                                <option value="4 meses">4 meses </option>
                                                                <option value="5 meses"> 5 meses </option>
                                                                <option value="6 meses">6 meses </option>
                                                                <option value="7 meses"> 7 meses </option>
                                                                <option value="8 meses"> 8 meses </option>
                                                                <option value="9 meses"> 9 meses </option>
                                                                <option value="10 meses"> 10 meses </option>
                                                                <option value="11 meses"> 11 meses </option>
                                                                <option value="12 meses"> 1 año </option>
                                                                <option value="2 años"> 2 años </option>
                                                                <option value="3 años"> 3 años </option>
                                                                <option value="4 años"> 4 años </option>
                                                                <option value="5 años"> 5 años </option>
                                                                <option value="6 años"> 6 años </option>
                                                                <option value="7 años"> 7 años </option>
                                                                <option value="8 años"> 8 años </option>
                                                                <option value="9 años"> 9 años </option>
                                                                <option value="10 años"> 10 años ou mais </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label" for="min_income">
                                                                <i class="fa"></i>
                                                                EXPECTATIVA SALARIAL </label>
                                                            <select name="min_income" id="min_income" class="alrededor form-control">
                                                                <option value="<?php if (empty($persona2->min_income) || $persona2->min_income == NULL) {
                                                                                    echo "SELECCIONA";
                                                                                } else {
                                                                                    echo $persona2->min_income;
                                                                                } ?>" selected="selected"><?php if (empty($persona2->min_income) || $persona2->min_income == NULL) {
                                                                                                                echo "SELECCIONA";
                                                                                                            } else {
                                                                                                                echo $persona2->min_income;
                                                                                                            } ?></option>
                                                                <option value="Entre 700 a 1200">ENTRE LOS $700 A $1200</option>
                                                                <option value="Entre 1200 a 1500">ENTRE LOS $1200 A $1500</option>
                                                                <option value="Entre 1500 a 2000">ENTRE LOS $1500 A $2000</option>
                                                                <option value="Entre 2000 a 2500">ENTRE LOS $2000 A $2500</option>
                                                                <option value="Entre 2500 a mas">ENTRE LOS $2500 A MÁS</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="target_positions">
                                                                <i class="fa"></i>
                                                                POSICIONES META </label>
                                                            <input type="text" class="alrededor form-control" name="target_positions" id="target_positions" value="<?php if (empty($persona2->target_positions) || $persona2->target_positions == NULL) {
                                                                                                                                                                        echo "";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo $persona2->target_positions;
                                                                                                                                                                    } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="padding:0px;">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="user_areas">ÁREAS CON EXPERIENCIA
                                                                </label>
                                                                <select class="mult-select" id="user_areas" name="user_areas[]" multiple="multiple">
                                                                    <?php
                                                                    $variable = explode('|', $persona2->user_areas);
                                                                    foreach ($variable as $var) {
                                                                        if (!(empty($var))) { ?>
                                                                            <option value="<?php if (empty($persona2->user_areas) || $persona2->user_areas == NULL) {
                                                                                                echo "SELECCIONA";
                                                                                            } else {
                                                                                                echo $var;
                                                                                            } ?> " selected="selected"><?php if (empty($persona2->user_areas) || $persona2->user_areas == NULL) {
                                                                                                                            echo "SELECCIONA";
                                                                                                                        } else {
                                                                                                                            echo $var;
                                                                                                                        } ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                    <option value="Administración">Administración</option>
                                                                    <option value="Arquitectura">Arquitectura</option>
                                                                    <option value="Asesoría / Consultoría">Asesoría / Consultoría</option>
                                                                    <option value="C Level">C Level</option>
                                                                    <option value="CEO">CEO</option>
                                                                    <option value="Comercial">Comercial</option>
                                                                    <option value="Compras">Compras</option>
                                                                    <option value="Comunicaciones">Comunicaciones</option>
                                                                    <option value="Contabilidad">Contabilidad</option>
                                                                    <option value="Director">Director</option>
                                                                    <option value="Digital">Digital</option>
                                                                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                                                                    <option value="Educación">Educación</option>
                                                                    <option value="Financiero">Financiero</option>
                                                                    <option value="Fotografía y Edición">Fotografía y Edición</option>
                                                                    <option value="Gerente General">Gerente General</option>
                                                                    <option value="Ingeniería">Ingeniería</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Logística">Logística</option>
                                                                    <option value="Marketing">Marketing</option>
                                                                    <option value="Medicina">Medicina</option>
                                                                    <option value="Nuevos Negocios">Nuevos Negocios</option>
                                                                    <option value="Operaciones">Operaciones</option>
                                                                    <option value="Proyectos">Proyectos</option>
                                                                    <option value="Publicidad">Publicidad</option>
                                                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                                                    <option value="Seguros">Seguros</option>
                                                                    <option value="Sostenibilidad">Sostenibilidad</option>
                                                                    <option value="Supply Chain">Supply Chain</option>
                                                                    <option value="Tecnología de la Información">Tecnología de la Informacion</option>
                                                                    <option value="Ventas">Ventas</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="user_target_areas">
                                                                    ÁREAS META <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="mult-select" name="user_target_areas[]" multiple="multiple">
                                                                    <?php
                                                                    $variable = explode('|', $persona2->user_target_areas);
                                                                    foreach ($variable as $var) {
                                                                        if (!(empty($var))) { ?>
                                                                            <option value="<?php if (empty($persona2->user_target_areas) || $persona2->user_target_areas == NULL) {
                                                                                                echo "SELECCIONA";
                                                                                            } else {
                                                                                                echo $var;
                                                                                            } ?> " selected="selected"><?php if (empty($persona2->user_target_areas) || $persona2->user_target_areas == NULL) {
                                                                                                                            echo "SELECCIONA";
                                                                                                                        } else {
                                                                                                                            echo $var;
                                                                                                                        } ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                    <option value="Administración">Administración</option>
                                                                    <option value="Arquitectura">Arquitectura</option>
                                                                    <option value="Asesoría / Consultoría">Asesoría / Consultoría</option>
                                                                    <option value="C Level">C Level</option>
                                                                    <option value="CEO">CEO</option>
                                                                    <option value="Comercial">Comercial</option>
                                                                    <option value="Compras">Compras</option>
                                                                    <option value="Comunicaciones">Comunicaciones</option>
                                                                    <option value="Contabilidad">Contabilidad</option>
                                                                    <option value="Director">Director</option>
                                                                    <option value="Digital">Digital</option>
                                                                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                                                                    <option value="Educación">Educación</option>
                                                                    <option value="Financiero">Financiero</option>
                                                                    <option value="Fotografía y Edición">Fotografía y Edición</option>
                                                                    <option value="Gerente General">Gerente General</option>
                                                                    <option value="Ingeniería">Ingeniería</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Logística">Logística</option>
                                                                    <option value="Marketing">Marketing</option>
                                                                    <option value="Medicina">Medicina</option>
                                                                    <option value="Nuevos Negocios">Nuevos Negocios</option>
                                                                    <option value="Operaciones">Operaciones</option>
                                                                    <option value="Proyectos">Proyectos</option>
                                                                    <option value="Publicidad">Publicidad</option>
                                                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                                                    <option value="Seguros">Seguros</option>
                                                                    <option value="Sostenibilidad">Sostenibilidad</option>
                                                                    <option value="Supply Chain">Supply Chain</option>
                                                                    <option value="Tecnología de la información">Tecnología de la Informacion</option>
                                                                    <option value="Ventas">Ventas</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="padding:0px;">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="user_markets">MERCADOS CON EXPERIENCIA
                                                                </label>
                                                                <select class="mult-select" name="user_markets[]" multiple="multiple">
                                                                    <?php
                                                                    $variable = explode('|', $persona2->user_markets);
                                                                    foreach ($variable as $var) {
                                                                        if (!(empty($var))) { ?>
                                                                            <option value="<?php if (empty($persona2->user_markets) || $persona2->user_markets == NULL) {
                                                                                                echo "SELECCIONA";
                                                                                            } else {
                                                                                                echo $var;
                                                                                            } ?> " selected="selected"><?php if (empty($persona2->user_markets) || $persona2->user_markets == NULL) {
                                                                                                                            echo "SELECCIONA";
                                                                                                                        } else {
                                                                                                                            echo $var;
                                                                                                                        } ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                    <option value="Agroindustria">Agroindustria</option>
                                                                    <option value="Automotriz">Automotriz</option>
                                                                    <option value="Banca y Financiero">Banca y Financiero</option>
                                                                    <option value="Bienes de consumo">Bienes de Consumo</option>
                                                                    <option value="Commodities">Commodities</option>
                                                                    <option value="Comunicación">Comunicación</option>
                                                                    <option value="Construcción Civil">Construcción Civil</option>
                                                                    <option value="Construcción Pesada">Construcción Pesada</option>
                                                                    <option value="Consultoría">Consultoría</option>
                                                                    <option value="Comercio">Comercio</option>
                                                                    <option value="Deporte">Deporte</option>
                                                                    <option value="Digital">Digital</option>
                                                                    <option value="Educación">Educación </option>
                                                                    <option value="Electrónica">Electrónica</option>
                                                                    <option value="Energía">Energía</option>
                                                                    <option value="Farmacéutica">Farmacéutica</option>
                                                                    <option value="Importación y Exportación">Importación y Exportación</option>
                                                                    <option value="Inmobiliario">Inmobiliario</option>
                                                                    <option value="Ingeniería">Ingeniería</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Líneas y Aéreas">Líneas Aéreas</option>
                                                                    <option value="logística y transporte">Logística y transporte</option>
                                                                    <option value="Máquinas y Equipos industriales">Máquinas y Equipos industriales</option>
                                                                    <option value="Manufactura / Producción">Manufactura / Producción</option>
                                                                    <option value="Medicina">Medicina</option>
                                                                    <option value="Minería">Minería</option>
                                                                    <option value="Ocio y Entretenimiento">Ocio y Entretenimiento</option>
                                                                    <option value="Organismos No Gubernamentales (ONGs)">Organismos No Gubernamentales (ONGs)</option>
                                                                    <option value="Organismos Internacionales">Organismos Internacionales</option>
                                                                    <option value="Pesca">Pesca</option>
                                                                    <option value="Petróleo y Gas">Petróleo y Gas</option>
                                                                    <option value="Publicidad">Publicidad</option>
                                                                    <option value="Químico, plástico y petroquímico">Químico, plástico y petroquímico</option>
                                                                    <option value="Retail">Retail</option>
                                                                    <option value="Sector Público">Sector Público</option>
                                                                    <option value="Seguros">Seguros</option>
                                                                    <option value="Servicios Generales">Servicios Generales</option>
                                                                    <option value="telecomunicaciones">Telecomunicaciones</option>
                                                                    <option value="Textil">Textil</option>
                                                                    <option value="TI">TI</option>
                                                                    <option value="Transporte">Transporte</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="user_target_markets">
                                                                    MERCADOS META <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
                                                                </label>
                                                                <select class="mult-select" name="user_target_markets[]" multiple="multiple">
                                                                    <?php
                                                                    $variable = explode('|', $persona2->user_target_markets);
                                                                    foreach ($variable as $var) {
                                                                        if (!(empty($var))) { ?>
                                                                            <option value="<?php if (empty($persona2->user_target_markets) || $persona2->user_target_markets == NULL) {
                                                                                                echo "SELECCIONA";
                                                                                            } else {
                                                                                                echo $var;
                                                                                            } ?> " selected="selected"><?php if (empty($persona2->user_target_markets) || $persona2->user_target_markets == NULL) {
                                                                                                                            echo "SELECCIONA";
                                                                                                                        } else {
                                                                                                                            echo $var;
                                                                                                                        } ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                    <option value="Agroindustria">Agroindustria</option>
                                                                    <option value="Automotriz">Automotriz</option>
                                                                    <option value="Banca y Financiero">Banca y Financiero</option>
                                                                    <option value="Bienes de Consumo">Bienes de Consumo</option>
                                                                    <option value="Commodities">Commodities</option>
                                                                    <option value="Comunicación">Comunicación</option>
                                                                    <option value="Construcción Civil">Construcción Civil</option>
                                                                    <option value="Construcción Pesada">Construcción Pesada</option>
                                                                    <option value="Consultoría">Consultoría</option>
                                                                    <option value="Comercio">Comercio</option>
                                                                    <option value="Deporte">Deporte</option>
                                                                    <option value="Digital">Digital</option>
                                                                    <option value="Educación">Educación </option>
                                                                    <option value="Electrónica">Electrónica</option>
                                                                    <option value="Energía">Energía</option>
                                                                    <option value="Farmacéutica">Farmacéutica</option>
                                                                    <option value="Importación y Exportación">Importación y Exportación</option>
                                                                    <option value="Inmobiliario">Inmobiliario</option>
                                                                    <option value="Ingeniería">Ingeniería</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Líneas Aéreas">Líneas Aéreas</option>
                                                                    <option value="Logística y transporte">Logística y transporte</option>
                                                                    <option value="Máquinas y Equipos industriales">Máquinas y Equipos industriales</option>
                                                                    <option value="Manufactura">Manufactura / Producción</option>
                                                                    <option value="Medicina">Medicina</option>
                                                                    <option value="Minería">Minería</option>
                                                                    <option value="Ocio y Entretenimiento">Ocio y Entretenimiento</option>
                                                                    <option value="Organismos no Gubernamentales (ONGs)">Organismos No Gubernamentales (ONGs)</option>
                                                                    <option value="Organismos Internacionales">Organismos Internacionales</option>
                                                                    <option value="Pesca">Pesca</option>
                                                                    <option value="Petróleo y Gas">Petróleo y Gas</option>
                                                                    <option value="Publicidad">Publicidad</option>
                                                                    <option value="Químico, plástico y petroquímico">Químico, plástico y petroquímico</option>
                                                                    <option value="Retail">Retail</option>
                                                                    <option value="Sector Público">Sector Público</option>
                                                                    <option value="Seguros">Seguros</option>
                                                                    <option value="Servicios Generales">Servicios Generales</option>
                                                                    <option value="Telecomunicaciones">Telecomunicaciones</option>
                                                                    <option value="Textil">Textil</option>
                                                                    <option value="TI">TI</option>
                                                                    <option value="Transporte">Transporte</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--*******************************************************Referencias Profesionales*********************************************************-->
                                        <div class="panel panel-default panel_info_general" id="referencia_profesional" style="margin-top: 20px; display:none;">
                                            <div class="panel-body" id="user-references-panel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="name_0">
                                                                <i class="fa"></i>NOMBRE
                                                            </label>
                                                            <input type="text" name="name_0" id="name_0" class="alrededor form-control" placeholder="Nombre de la Referencia" value="<?php if (empty($persona2->name_0) || $persona2->name_0 == NULL) {
                                                                                                                                                                                            echo "";
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo $persona2->name_0;
                                                                                                                                                                                        } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email_0">
                                                                <i class="fa"></i>CORREO
                                                            </label>
                                                            <input type="email" name="email_0" id="email_0" class="alrededor form-control" placeholder="Correo electrónico de la Referencia" value="<?php if (empty($persona2->email_0) || $persona2->email_0 == NULL) {
                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo $persona2->email_0;
                                                                                                                                                                                                    } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone_0">
                                                                <i class="fa"></i>TELÉFONO
                                                            </label>
                                                            <input type="tel" name="phone_0" id="phone_0" class="alrededor form-control" placeholder="Teléfono de la Referencia" value="<?php if (empty($persona2->phone_0) || $persona2->phone_0 == NULL) {
                                                                                                                                                                                            echo "";
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo $persona2->phone_0;
                                                                                                                                                                                        } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="company_0">
                                                                <i class="fa"></i>EMPRESA
                                                            </label>
                                                            <input type="text" name="company_0" id="company_0" class="alrededor form-control" placeholder="Nombre de la Empresa donde Trabajó" value="<?php if (empty($persona2->company_0) || $persona2->company_0 == NULL) {
                                                                                                                                                                                                            echo "";
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo $persona2->company_0;
                                                                                                                                                                                                        } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="position_0">
                                                                <i class="fa"></i>POSICIÓN
                                                            </label>
                                                            <input type="text" name="position_0" id="position_0" class="alrededor form-control" placeholder="Posición que Ocupó en la Empresa" value="<?php if (empty($persona2->position_0) || $persona2->position_0 == NULL) {
                                                                                                                                                                                                            echo "";
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo $persona2->position_0;
                                                                                                                                                                                                        } ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row" id="to-copy-reference" data-num="1" hidden="true">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="name_1">
                                                                <i class="fa"></i>NOMBRE
                                                            </label>
                                                            <input type="text" name="name_1" id="name_1" class="alrededor form-control" placeholder="Nombre de la Referencia">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email_1">
                                                                <i class="fa"></i>CORREO
                                                            </label>
                                                            <input type="email" name="email_1" id="email_1" class="alrededor form-control" placeholder="Correo electrónico de la Referencia">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone_1">
                                                                <i class="fa"></i>TELÉFONO
                                                            </label>
                                                            <input type="tel" name="phone_1" id="phone_1" class="alrededor form-control" placeholder="Teléfono de la Referencia">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="company_1">
                                                                <i class="fa"></i>EMPRESA
                                                            </label>
                                                            <input type="text" name="company_1" id="company_1" class="alrededor form-control" placeholder="Nombre de la Empresa donde Trabajó">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="position_1">
                                                                <i class="fa"></i>POSICIÓN
                                                            </label>
                                                            <input type="text" name="position_1" id="position_1" class="alrededor form-control" placeholder="Posición que Ocupó en la Empresa">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" id="button-add-user-reference" class="btn btn btn-primary" style="border-radius:15px; padding:10px; font-size:15px;">
                                                    <i class="fas fa-plus"></i> Adicionar referencia
                                                </button>
                                            </div>
                                        </div>
                                        <!--*******************************************Resumen del Perfil**************************************************-->
                                        <div class="panel panel-default panel_info_general" id="resumen_perfil">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="summary" style="font-size:14px;">
                                                                Por favor, cuéntenos con sus palabras y de manera resumida, sobre su perfil profesional. </label>
                                                            <textarea class="alrededor form-control" style="min-height:450px;" name="resumen_perfil" id="resumen_perfil" rows="6" placeholder="Hablanos de ti ..."><?php echo (!(empty($persona2->resumen_perfil)) || $persona2->resumen_perfil != NULL) ? $persona2->resumen_perfil : ""; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--*******************************************Book de Candidatos**************************************************-->
                                        <div class="panel panel-default panel_info_general" id="book_candidato">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group CheckReq required">

                                                            <div class="checkbox">
                                                                <label class="alrededor form-control" style="min-height:200px; padding:35px 0px 0px 55px;">
                                                                    <input type="checkbox" value="yes" name="book_hunting" checked="checked" style="margin-right:-10px;">
                                                                    Autorizo que mi perfil aparezca en el Book de Candidatos </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="position:absolute; bottom:5px; right:5px; margin:20px 20px 7px 0;">
                                            <button type="submit" class="btn btn-danger" style="border-radius:15px;">
                                                GUARDAR <i class="fas fa-save"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FIN DE PERFIL-->
    <div class="modal fade" id="modal-jobs" tabindex="-1" role="dialog" aria-labelledby="jobsModalLabel" data-job="job-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content jobs">
                <div class="modal-header">
                    <button type="button" class="close btn-close-jobs-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 2em;">
                        <p>Estimado Usuario,</p>
                        <p>Te invitamos a definir detalladamente la sección MI PERFIL para que recibas oportunidades alineadas a tus
                            intereses. Esta sección se encuentra bajo tu foto de IBjobcoach.</p>
                        <p>Además, el área Jobs de IBjobcoach es un sistema colaborativo en que miles de usuarios como tú nos indican
                            cuando un job ha cadudado (y el sistema lo cierra automáticamente en IBjobcoach). Esperamos tu contribución
                            para que tengamos información más actualizada y te podamos ayudar en la búsqueda laboral.</p>
                        <p>Equipo IBjobcoach</p>

                    </div>
                </div>
                <div class="modal-footer jobs">
                    <button type="button" class="btn btn-default btn-close-jobs-modal" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-10  col-sm-offset-1 bajar-imagen ">
                    <img src="dna/img/icono/logo_iboutplacement_good.png " width="100%">

                </div>
                <div class="col-md-1 col-sm-12">
                    <p class="titulo-rodape "></p>

                </div>
                <div class="col-md-2 col-sm-12 ">
                    <p class="titulo-rodape  min-margin"></p>
                    <ul class="itens-rodape text-center bold">
                        <li><a href="https://consultoriadecarrera.iboutplacement.com/" target="_blank ">Consultoria</a></li>
                        <li><a href="https://nuevaweb.iboutplacement.com/" target="_blank">IBOutplacement</a></li>
                    </ul>
                </div>
                <div class="col-md-1 col-sm-12">
                    <p class="titulo-rodape "></p>

                </div>

                <div class="col-md-3 col-sm-12 telefone text-center">
                    <p class="text-center ">
                        <i class="fas fa-phone text-center<br />
                            <b>Notice</b>:  Undefined index: user in <b>/var/www/html/online/app/views/includes/footer.php</b> on line <b>29</b><br />
                            <br />
                            <b>Notice</b>:  Trying to get property of non-object in <b>/var/www/html/online/app/views/includes/footer.php</b> on line <b>29</b><br />
                            <br />
                            <b>Notice</b>:  Trying to get property of non-object in <b>/var/www/html/online/app/views/includes/footer.php</b> on line <b>29</b><br />
                            ">
                        </i>
                        <span>
                            (511) 748-5112
                        </span>
                    </p>
                </div>
                <div class="col-md-1 col-sm-12">
                    <p class="titulo-rodape "></p>

                </div>
                <div class="col-md-2 col-sm-12 text-center social">
                    <p class="bold" style="color:#ffffff;">REDES SOCIALES</p>
                    <a href="https://www.facebook.com/IBOutplacementOficial/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/IBOutplacement" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/iboutplacement" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/watch?v=ftaDuJWgqLw" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

    </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2020 por <a href="http://iboutplacement.com/">IBOUTPLACEMENT</a></p>
                </div>
            </div>
        </div>
    </footer>

    <section id="user-online-chat" class="client-side">
    </section>

    <script type="text/javascript">
        var baseUrl = 'login.php';
        var basePath = '';
        var fullPath = baseUrl + basePath;
        var localization = 'es';
        var sessionTimeout = 60; // minutes
        var activeIframe = null;
    </script>
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '3461941c4126d8da4c176e1a936523d9c6dfd5f2';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="plugins/bootbox/bootbox.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="plugins/jquery-form/jquery.form.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-validation/messages_es.js"></script>
    <script type="text/javascript" src="plugins/owlcarousel/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="admin/js/jquery.validate.mymethods.js"></script>
    <script type="text/javascript" src="dna/js/new-home.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-session-timeout/bootstrap-session-timeout.js"></script>


    <script type="text/javascript" src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="plugins/l10n/l10n.js"></script>
    <script type="text/javascript" src="dna/js/material-kit.js"></script>
    <script type="text/javascript" src="dna/js/material.min.js"></script>
    <script type="text/javascript" src="dna/js/jquery.vimeo.api.js"></script>
    <script type="text/javascript" src="plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="plugins/inputmask/inputmask.min.js"></script>
    <script type="text/javascript" src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <script type="text/javascript" src="plugins/intl-tel-input/build/js/intlTelInput.js"></script>
    <script type="text/javascript" src="plugins/jquery-pagination/jquery.twbsPagination.min.js"></script>


    <script type="text/javascript" src="admin/js/chat.js?v=20170621"></script>


    <script type="text/javascript" src="dna/js/user.js??v=20200430"></script>
    <div class="modal fade" id="session-timeout-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tempo Limite de sesion</h4>
                </div>
                <div class="modal-body">
                    <p>usted está inativo há bastante tempo..</p>
                </div>
                <div class="modal-footer"> <button id="session-timeout-dialog-logout" type="button" class="btn btn-default">Logout</button> <button id="session-timeout-dialog-keepalive" type="button" class="btn btn-primary" data-dismiss="modal">Stay Connected</button> </div>
            </div>
        </div>
    </div>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6674506.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>