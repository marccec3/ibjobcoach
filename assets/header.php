<?php
if(session_status()===PHP_SESSION_NONE){
    session_start();
}     
    if(!isset($_SESSION['usuario'])){
        header ('Location: login.php');
        session_destroy();
        //consulta usuario
    }
    
    include 'listar.php';
    $nombre_usuario = $_SESSION['usuario'];
    $sentencia = $connect->prepare("SELECT * FROM ibvirtuallicencias where correo = ?");
    $sentencia->execute([$nombre_usuario]);

    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
     
    $usuario = $persona->correo;
    $estado = $persona->opcion;
    $usuariPost= $persona->nombrecliente;
    $usuariPost1= $persona->apellidocliente;
    $_SESSION['name_user']=$usuariPost;
    $_SESSION['last_name']=$usuariPost1;
    $_SESSION['idlicencia']= $persona->idlicencia;

    //print_r($persona);

//Consultas para el foro
$sentencia = $connect->query("SELECT f.idforo, f.autor,f.foto,f.fecha,f.titulo FROM foro f ORDER BY fecha DESC");
$foros = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es-cl">

<head>
    <!-- Google Tag Manager -->
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
                    <a class="logo" href="index.php">
                        <img src="dna/img/ibjobcoach.jpg" style="height:100%; width: 130px; margin-top:20px">
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
                                    <a href="#privatecontent" onclick="openNavArea('privatecontent');" class="a-nav-button" aria-controls="privatecontent" role="tab" data-toggle="tab" aria-expanded="true">
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
                                        <div class="dropdown-menu" aria-labelledby="dropdownPerfil">
                                            <a class="dropdown-item no-scroll" href="profile.php">
                                                <img src="dna/img/icono/userinfo.webp" />
                                                <div class="dropdown-profile-text">
                                                    <p class="profile-user-name bold" name="email"><?php echo $_SESSION['usuario'];?></p>
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
                    <span>Informes Salariales (SMTM)</span>
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



    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="?c=recibirperfil" method="post"  enctype="multipart/form-data"autocomplete="off" >
					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Información Personal </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="nombre">
											<i class="fa"></i>
												Nombre completo <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>

										<input type="hidden" name="id" value="<?php echo $alu->id; ?>">
										<input type="text" class="form-control" name="nombre"  placeholder="Nombre"  required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="email">
											<i class="fa"></i>
											Correo <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<input type="email" class="form-control" name="email"  placeholder="Correo electrónico"  required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="phone">
											<i class="fa"></i>
											Su Teléfono </label>
										<input type="tel" class="form-control" name="phone" placeholder="Su Teléfono" required="required">
										<p class="help-block">Ingrese su teléfono completo, con el código del país.</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="password">
											<i class="fa"></i>Contraseña
										</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
										<p class="help-block">Por favor, utilice una <span class="relative-time" data-toggle="tooltip" data-placement="bottom" title="Mezcle letras mayúsculas y minúsculas, números y puntuación">contraseña fuerte</span>, con un mínimo de 8 caracteres.<br>Deje los campos em blanco para no alterar la contraseña.</p>
									</div>
									<div class="form-group">
										<label class="control-label" for="password_confirmation">
											<i class="fa"></i>
											Repita la contraseña
										</label>
										<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña">
									</div>
									<div class="form-group">
										<label class="control-label">
											Imagen de Perfil </label>
										<input type="file" name="avatar">
										<div class="input-group">
											<input type="text" readonly="" class="form-control" placeholder="Envíe una imagen en el formato .PNG, .JPG, .GIF de 150 x 150 pixeles.">
											<span class="input-group-btn input-group-sm">
												<button type="button" class="btn btn-fa btn-round btn-default">
													<i class="fas fa-upload"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="document">
											<i class="fa"></i>Documento </label>
										<input type="text" class="form-control" name="document"  placeholder="Documento" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="linkedin">
											<i class="fa"></i>
											Su página de LinkedIn </label>
										<input type="url" class="form-control" name="linkedin"  placeholder="https://www.linkedin.com/&hellip;">
										<p class="help-block">Copie y pegue la <strong>dirección</strong> de su página de LinkedIn aquí.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Localización </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="birth_country_id">
											<i class="fa"></i>País de Nacimiento 
										</label>
										<select class="form-control" name="birth_country_id" id="birth_country_id">
											<option value="">(Seleccione)</option>
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
											País Actual <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<select class="form-control" name="current_country_id" id="current_country_id" >
											<option value="">(Seleccione)</option>
											<option value="Argentina">Argentina</option>
											<option value="Brasil">Brasil</option>
											<option value="Chile">Chile</option>
											<option value="Estados Unidos">Estados Unidos</option>
											<option value="Perú" selected="selected">Perú</option>
											<option value="colombia">Colombia</option>
											<option value="México">México</option>
											<option value="Ecuador">Ecuador</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_countries">
											<i class="fa"></i>
											Países Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<select class="form-control" name="user_countries" id="user_countries" multiple="multiple" style="height: 144px;">
											<option value="Argentina">Argentina</option>
											<option value="Brasil">Brasil</option>
											<option value="Chile">Chile</option>
											<option value="Estados Unidos">Estados Unidos</option>
											<option value="Perú" selected="selected">Perú</option>
											<option value="Colombia">Colombia</option>
											<option value="México">México</option>
											<option value="Ecuador">Ecuador</option>
										</select>
										<p class="help-block">Seleccione varios países utilizando <code>Ctrl</code> o <code>Shift</code> en el teclado.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Educación </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="education">
											<i class="fa"></i>
											Formación (Curso Superior)
										</label>
										<input type="text" name="education" id="education" class="form-control"  maxlength="255">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="institution">
											<i class="fa"></i>
											Universidad </label>
										<input type="text" name="institution" id="institution" class="form-control" maxlength="255">
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_en">
										<i class="fa"></i>
										Nivel de idioma: English </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_en" value="Ninguno" >
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_en" value="Básico">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_en" value="Mediano">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_en" value="Avanzado">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_en" value="Fluido">
											Fluido </label>
									</div>
								</div>
							</div>


							<hr>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_es">
										<i class="fa"></i>
										Nivel de idioma: Español </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_es" value="Ninguno" >
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_es" value="Básico">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_es" value="Mediano">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_es" value="Avanzado">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_es" value="Fluido">
											Fluido </label>
									</div>
								</div>
							</div>


							<hr>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_pt">
										<i class="fa"></i>
										Nivel de idioma: Português </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_pt" value="Ninguno" >
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_pt" value="Básico">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_pt" value="Mediano">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_pt" value="Avanzado">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="language_pt" value="Fluido">
											Fluido </label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Informaciones Profesionales </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="experience">
											<i class="fa"></i>
											Años de Experiencia </label>
										<select name="experience" id="experience" class="form-control">
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
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" for="working">
											<i class="fa"></i>
											Estás trabajando? </label>
										<div style="margin-top: 15px;">
											<div class="radio-inline">
												<label>
													<input type="radio" name="working" value="Sí">
													Sí </label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" name="working" value="No">
													No </label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" for="out_of_work">
											<i class="fa"></i>
											Si no, desde hace cuando? </label>
										<select name="out_of_work" id="out_of_work" class="form-control">
											<option value="Estoy trabajando">Estoy trabajando</option>
											<option value="Menos de 1 mes">Menos de 1 mes</option>
											<option value="1 mes">1 mes</option>
											<option value="2 meses"> 2 meses </option>
											<option value="3 meses"> 3 meses </option>
											<option value="4 meses">v4 meses </option>
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
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="last_company">
											<i class="fa"></i>
											Última Empresa </label>
										<input type="text" class="form-control" name="last_company" id="last_company" placeholder="Última Empresa" >
									</div>
									<div class="form-group">
										<label class="control-label" for="min_income">
											<i class="fa"></i>
											Expectativa de renda mínima </label>
										<input type="number" class="form-control" id="min_income" name="min_income" value="" placeholder="Renda mínima">
									</div>
									<div class="form-group">
										<label class="control-label" for="max_income">
											<i class="fa"></i>
											Expectativa de renda máxima </label>
										<input type="number" class="form-control" id="max_income" name="max_income" min="0" value="" placeholder="Renda máxima">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="last_position">
											<i class="fa"></i>
											Última Posición </label>
										<input type="text" class="form-control" name="last_position" id="last_position" placeholder="Última Posición" >
									</div>
									<div class="form-group">
										<label class="control-label" for="target_positions">
											<i class="fa"></i>
											Posiciones Meta </label>
										<textarea class="form-control" name="target_positions" id="target_positions" style="height: 144px;" placeholder="¿Qué posiciones le interesan?"></textarea>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_areas">
											Áreas con Experiencia </label>
									</div>
									<select class="mult-select" id="user_areas" name="user_areas" multiple="multiple">
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
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_target_areas">
											Áreas Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>

										<select class="mult-select" name="user_target_areas" multiple="multiple" >
											<option value="Administración" selected>Administración</option>
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
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_markets">
											Mercados con Experiencia </label>

										<select class="mult-select" name="user_markets" multiple="multiple" >
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
											Mercados Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>

										<select class="mult-select" name="user_target_markets" multiple="multiple" >
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
											<option value="Energía" selected>Energía</option>
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

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Referencias Profesionales </h3>
						</div>
						<div class="panel-body" id="user-references-panel">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="name_0">
											<i class="fa"></i>
											Nombre </label>
										<input type="text" name="name_0" id="name_0" class="form-control" placeholder="Nombre de la Referencia">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="email_0">
											<i class="fa"></i>
											Correo </label>
										<input type="email" name="email_0" id="email_0" class="form-control" placeholder="Correo electrónico de la Referencia">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="phone_0">
											<i class="fa"></i>
											Teléfono </label>
										<input type="tel" name="phone_0" id="phone_0" class="form-control" placeholder="Teléfono de la Referencia">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="company_0">
											<i class="fa"></i>
											Empresa </label>
										<input type="text" name="company_0" id="company_0" class="form-control" placeholder="Nombre de la Empresa donde Trabajó">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="position_0">
											<i class="fa"></i>
											Posición </label>
										<input type="text" name="position_0" id="position_0" class="form-control" placeholder="Posición que Ocupó en la Empresa">
									</div>
								</div>
							</div>


							<hr>


							<div class="row" id="to-copy-reference" data-num="1" hidden="true">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="name_1">
											<i class="fa"></i>
											Nombre </label>
										<input type="text" name="name_1" id="name_1" class="form-control" placeholder="Nombre de la Referencia">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="email_1">
											<i class="fa"></i>
											Correo </label>
										<input type="email" name="email_1" id="email_1" class="form-control" placeholder="Correo electrónico de la Referencia">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="phone_1">
											<i class="fa"></i>
											Teléfono </label>
										<input type="tel" name="phone_1" id="phone_1" class="form-control" placeholder="Teléfono de la Referencia">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="company_1">
											<i class="fa"></i>
											Empresa </label>
										<input type="text" name="company_1" id="company_1" class="form-control" placeholder="Nombre de la Empresa donde Trabajó" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="position_1">
											<i class="fa"></i>
											Posición </label>
										<input type="text" name="position_1" id="position_1" class="form-control" placeholder="Posición que Ocupó en la Empresa" >
									</div>
								</div>
							</div>
							<button type="button" id="button-add-user-reference" class="btn btn btn-primary">
								<i class="fas fa-plus"></i>
								Adicionar referência </button>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Resumen del Perfil </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" for="summary">
											Por favor, cuéntenos con sus palabras y de manera resumida, sobre su perfil profesional. </label>
										<textarea class="form-control" name="summary" id="summary" rows="6"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Book de Candidatos </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="yes" name="book_hunting" checked="checked">
												Autorizo que mi perfil aparezca en el Book de Candidatos </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="fas fa-save"></i>
							Grabar</button>
					</div>
				</form>
			</div>
		</div>
	</div>