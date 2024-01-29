<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;
?>
<!DOCTYPE html>
<html lang="es-cl">
  <head>
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5DRTM5D');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title>IBJOBCOACH</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creator" content="asterisko - http://www.asterisko.com.br/">
    <meta name="author" content="Alexandre R. Janini">
    <meta name="copyright" content="asterisko">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="1 days">

    <!-- Fim do SEO -->

	<link rel="icon" href="./dna/img/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/intl-tel-input/build/css/intlTelInput.css"> -->

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

  </head>
  <body class="loading">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DRTM5D"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="anchor-top"></div>
    <div id="loading-overlay">
      <div>
        <img src="dna/img/loading-spinner-grey.gif" alt="Cargando. Por favor, espere">
        Cargando. Por favor, espere&hellip;
      </div>
    </div>

    <header class="tarja-azul">
      <div class="container" style="padding: 0">
        <div class="row">
          <div class="col-xs-3 col-md-2">
                        <a class="logo" href="../index.php">
              <img src="dna/img/ibjobcoach.jpg" style="height: 50px;" alt="DNA Outplacement">
            </a>
          </div>
        </div>
      </div>
   </header>
    <div id="menu-overflow" onclick="toogleNav()"></div>
<div class="banner-interna txt-center" style="background-image: url(dna/img/coworking.jpg)">

<!--	<p class="titulo-plataforma">ACCESO A LA PLATAFORMA</p>-->
</div>


<div class="container" id="sign-in">
	<div class="row">
		<div class="col-md-8 col-md-push-4">
			<div class="row">
				<div class="col-md-7">
					<div class="box-login">
						<div class="row">
							<div class="col-md-12">
								<p class="titulo-login2">Ya Soy Cliente de  IBjobcoach!</p>
								<br>
							   <form action="controller/login.php" name="user" method="POST">
									<div class="form-group">
										<label class="texto-login2" for="email">Correo  </label>
										<input type="email" name="email" id="login-email" class="form-control DatosLogin" required>
									</div>
									<div class="form-group">
										<label class="texto-login2 input-md" for="password">Contraseña </label>
										<input type="password" name="password" id="login-password" class="form-control DatosLogin"  required>
									</div>
									<div class="row text-center">

									<div class="col-xs-12">
										<a href="../login/forgot.html" class="esqueceu-senha">¿Olvidó su contraseña?</a><br>
										<a href="../login/resendConfirmation.html" class="esqueceu-senha">Reenviar confirmación de e-mail</a>
									</div>
								</div>
									<button type="submit" class="btn btn-success" style="width: 100%;">
										<i class="fa fa-sign-in"></i> Entrar</button>
								</form>

								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
				    <div class="box-genes" style="background-color: rgb(5, 78, 78);">
				        <p>Te gustaría probarlo gratis?</p>
						<p>Ingresa a la página web de IBjobcoach y sepa cómo!</p>
						<a href="../index.php" class="btn btn-warning">INGRESAR A IBJOBCOACH</a>
				    </div>
				</div>
			</div>
		</div>
<!--------------------carrusel  -------------------------->
		<div class="col-md-4 col-md-pull-8">
			<div id="carousel-depoimentos" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-javier.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">Javier Quevedo</span>
									<span class="">ADEX</span>
									<span class="">Gerentes de IT</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“Agradezco mucho el acompañamiento y las herramientas que me brindaron durante mi proceso de recolocación, lo cual hizo que en menos de dos meses de iniciado el programa ya me encuentre trabajando nuevamente.”
								</p>
							</div>
						</div>
					</div>
				   <div class="item">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-sergio.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">Sergio Carrillo</span>
									<span class="">RIMAC</span>
									<span class="">Jefe de Front Desk - experiencia</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“Gracias al programa he tenido acceso a herramientas y conocimientos que me han permitido ser más visible durante el proceso de selección de una empresa. Además, me ha proporcionado estrategias útiles para tener una recolocación exitosa.”
								</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-diana.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">Diana Rodríguez</span>
									<span class="">Enel Perú</span>
									<span class="">Ejecutiva Senior de Comunicaciones</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“El programa me fue muy útil porque la información y herramientas que me proporcionaron fueron muy precisas y actuales, para saber cómo se debe tratar los temas laborales hoy en día en el mercado peruano.”
								</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-frederico.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">Federico Estrada</span>
									<span class="">Cabify</span>
									<span class="">Gerente Comercial Regional</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“El programa tiene un enfoque integral de todo lo que se tiene que desarrollar para lograr el éxito en tu transición laboral. Todas las sesiones se complementan entre sí, brindan estrategias de marketing personal para tener un proceso de selección exitoso gracias a una formación mucho más completa.”
								</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-mauricio.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">Mauricio Cabero</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“Ser parte del programa de Outplacement me está dotando de muchas capacidades. Entre las principales puedo destacar la habilidad identificar y saber resaltar mis logros, así como el conocer mi situación actual con respecto al mercado laboral. Además, la exposición real al mercado laboral que te brindan mediante las sesiones de coaching, marketing personal, y simulación de entrevistas, te permite tener información valiosa para alcanzar el éxito profesional.”
								</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="depoimento-pessoa">
							<div class="col-md-4">
								<div class="foto-depoimento" style="background-image: url(dna/img/depoimento-cesar.jpg)"></div>
							</div>
							<div class="col-md-8">
								<p class="dados-depoimento">
									<span class="">César Bartens</span>
									<span class="">Laboratorio ENCURT</span>
									<span class="">Head de Gestión Andina</span>
								</p>
							</div>
							<div class="col-md-12">
								<p class="texto-depoimento">
									“Gracias al programa, aprendí a reconocer muchos puntos clave para lograr el éxito en mi transición laboral. Logré reconocer y mejorar las debilidades que tenía, así como recalcar mis fortalezas para desarrollar una impactante hoja de vida. Considero importante las sesiones con los diferentes coaches ya que fueron muy sinceras y con mucho análisis crítico. Además, agradezco la flexibilidad de tiempos y la personalización del programa.”
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-depoimentos" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="right carousel-control" href="#carousel-depoimentos" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
	</div>
</div>
<a href="#anchor-top" class="scroll" id="scroll-top-link">
			<i class="fas fa-chevron-up"></i>
</a>

<div class="rodape">
        <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12 bajar-imagen ">
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
                    <p>&copy; 2020 por <a href="https://www.http://iboutplacement.com">IBOUTPLACEMENT</a></p>
                </div>
            </div>
        </div>
    </footer>

		<section id="user-online-chat" class="client-side">
		</section>

			<script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
			<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			var baseUrl = 'index.php';
			var basePath = '/online/';
			var fullPath = baseUrl + basePath;
			var localization = 'es';
			var sessionTimeout = 60; // minutes
			var activeIframe = null;
		</script>


		<script type="text/javascript" src="plugins/jquery-blockUI/jquery.blockUI.js"></script>
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


		<script type="text/javascript" src="dna/js/user.js?v=20200430"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6674506.js"></script>
		<!-- End of HubSpot Embed Code -->
	</body>
</html>
