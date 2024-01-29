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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css"> -->
    
    <!--<link rel="stylesheet" type="text/css" href="plugins/sweetalert2/sweetalert2.min.css">-->
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

    
    <div id="loading-overlay">
      <div>
        <img src="dna/img/loading-spinner-grey.gif" alt="Cargando. Por favor, espere">
        Cargando. Por favor, espere&hellip;
      </div>
    </div>

	<header class="tarja-azul" style="background-color: rgba(255, 255, 255, 0.6);">

      <div class="container" style="padding: 0;">
    <nav id="mainNav" class="navbar navbar-expand-lg">
    <div class="container">
    <div class="col-xs-3 col-md-2" >
            <a class="logo" href="../index.php">
              <img src="dna/img/ibjobcoach.jpg" style="height:50px;" alt="DNA Outplacement">
            </a>
	</div>
      <div id="navbarResponsive" class="collapse navbar-collapse" style="margin-left:150px; color:black; padding-right:0px; margin-top:5px;">
        <ul class="navbar-nav text-uppercase ml-auto" >
          <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="../index.php#nosotros">NOSOTROS</a></li>
          <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="../index.php#genes">¿QUÉ ES IBJOBCOACH?</a></li>
          <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="../index.php#beneficios">BENEFICIOS</a></li>
          <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="../index.php#prueba">PRUEBA GRATIS</a></li>
          <li class="nav-item" ><a  class="nav-link js-scroll-trigger" href="../precios.php">PRECIOS</a></li>
        </ul>
      </div>
    </div>
  </nav>  
   </header>

	<div id="menu-overflow" onclick="toogleNav()"></div> 

<div class= "banner-interna" style="background-image: url(dna/img/coworking.jpg)">
</div>


	<div class="box-login p-5">
		<div class="row">
            
			<div class="col-md-12 ">
				<p class="titulo-login2 text-center pt-3">Ya Soy Cliente de  IBjobcoach!</p>
				<br>
				<form action="controller/login.php" name="user" method="POST" id="iniciarSesion">
					<div class="form-group">
						<label class="texto-login2" for="email">CORREO  </label>
						<input type="email" name="email" id="login-email" class="form-control DatosLogin" required>
					</div>
					<div class="form-group">
						<label class="texto-login2 input-md" for="password">CONTRASEÑA </label>
						<input type="password" name="password" id="login-password" class="form-control DatosLogin" required>
                    </div>
                        <p class="text-danger hidden" id="userError">Usuario o contraseña incorrectos</p>
                        <p class="text-danger hidden" id="userError2">Aun no ha confirmado su correo o su tiempo ha culminado</p>
						<div class="row text-center">
							<div class="col-xs-12">
								<a href="../login/forgot.php" class="esqueceu-senha" style="color:red; font-size: 12px; ">¿Olvidó su contraseña?</a><br>
								<a href="../login/resendConfirmation.php" class="esqueceu-senha" style="margin-bottom:-15; font-size: 12px;">Reenviar confirmación de e-mail</a>
							</div>
						</div>
						<br>
						<button type="submit" class="btn DatosLogin mt-3" style=" background-color:red; color:white;">ENTRAR</button>
                        <a href="../index.php?=#prueba" type="submit" class="btn DatosLogin prueba mt-3" style=" background-color:#dc9f49;; color:white;">PRUEBA GRATIS</a>

                    </form>
			</div>
		</div>
	</div>

<div class="container">
	<!-- *************** NUEVO DISEÑO  ******************* -->

<div class="row mt-4">
    <div class="container text-center pt-5">
            <p class="letra-1 ">!ELLOS TAMBIÉN USARON IBJOBCOACH¡</p>
        </div>
    </div>
<div class="row">
    <div class="container">
        <div class="container col-lg-1  tamaño2 "></div>
        <div class="container col-lg-3   borde-1 ">
            <div class="row coontainer pt-3">
                <div class="col-5 text-center">
                    <img src="dna/img/depoimento-mauricio.jpg" class="img-circle img-1" width="100" height="100" >     
                </div>
                <div class="col-7 pt-5">
                    <p class="p-0 m-0 bold tamaño3-text"> MARCELO INCHI</p>
                    <p class="text-danger p-0 m-0 bold tamaño3-text">GERENTE</p>
                </div>
            </div>
            <p class="pt-4 p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas laboriosam asperiores exercitationem dolore repellendus nulla reprehenderit accusamus suscipit pariatur tempore totam, dolor laudantium. Quos quisquam voluptatibus quasi totam cumque voluptates?</p>
        </div>
        <div class="container col-lg-1  tamaño1 "></div>
        <div class="container col-lg-3  borde-1">
            <div class="row coontainer pt-3">
                <div class="col-5 text-center">
                    <img src="dna/img/depoimento-mauricio.jpg" class="img-circle img-1" width="100" height="100" >     
                </div>
                <div class="col-7 pt-5">
                    <p class="p-0 m-0 bold tamaño3-text"> MARCELO INCHI</p>
                    <p class="text-danger p-0 m-0 bold tamaño3-text">GERENTE</p>
                </div>
            </div>
            <p class="pt-4 p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas laboriosam asperiores exercitationem dolore repellendus nulla reprehenderit accusamus suscipit pariatur tempore totam, dolor laudantium. Quos quisquam voluptatibus quasi totam cumque voluptates?</p>
        </div>
        <div class="container col-lg-1  tamaño1 "></div>
        <div class="container col-lg-3  borde-1">
            <div class="row coontainer pt-3">
                <div class="col-5 text-center">
                    <img src="dna/img/depoimento-mauricio.jpg" class="img-circle img-1" width="100" height="100" >     
                </div>
                <div class="col-7 pt-5 pad-text">
                    <p class="p-0 m-0 bold tamaño3-text"> MARCELO INCHI</p>
                    <p class="text-danger p-0 m-0 bold tamaño3-text">GERENTE</p>
                    
                </div>
            </div>
            <p class="pt-4 p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas laboriosam asperiores exercitationem dolore repellendus nulla reprehenderit accusamus suscipit pariatur tempore totam, dolor laudantium. Quos quisquam voluptatibus quasi totam cumque voluptates?</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="container espacio-final"></div>
</div>

<!-- *************** FIN DE  DISEÑO  ******************* -->

</div>







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
                    <p>&copy; 2020 por <a href="http://iboutplacement.com/">IBOUTPLACEMENT</a></p>
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

     <!-- PLUGINS DE ALERT SWAEETALERT -->
     
    <script type="text/javascript" src="plugins/sweetalert2/sweetalert2.min.css"></script>
    <link rel="stylesheet" href="../css/asweetalert2.css" type="text/css">
    <script type="text/javascript" src="admin/examples/js/plugins/sweetalert2.js"></script>

    

    <script type='text/javascript' src='js/scroll.js'></script>

  <!---////////////////////  FIN  ///////////////////////// -->
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
