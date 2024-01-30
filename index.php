
<?php
  if(isset($_POST["mltlngg_change_display_lang"])){
    $lang = $_POST["mltlngg_change_display_lang"];
    require "lang/".$lang.".php";
  }else{
    require "lang/es_PE.php";
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Recolocación,Outplacement Digital,Como buscar trabajo,Contactos Head Hunter,Headhunter,Mejores Head Hunters" />
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/dna/img/icono.png" rel="icon" type="image/png">
  <script src="/js2/animacion.js"></script>
  
  <!--Links Boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
  <title>.:: IBjobcoach ::.</title>
  <link rel='dns-prefetch' href='// ' />
  <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <script type="text/javascript">
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/www.genesnextstep.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.5"
      }
    };
    ! function(a, b, c) {
      function d(a, b) {
        var c = String.fromCharCode;
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
        var d = k.toDataURL();
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
        var e = k.toDataURL();
        return d === e
      }

      function e(a) {
        var b;
        if (!l || !l.fillText) return !1;
        switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
          case "flag":
            return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
          case "emoji":
            return b = d([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340]), !b
        }
        return !1
      }

      function f(a) {
        var c = b.createElement("script");
        c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
      }
      var g, h, i, j, k = b.createElement("canvas"),
        l = k.getContext && k.getContext("2d");
      for (j = Array("flag", "emoji"), c.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
      c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
        c.DOMReady = !0
      }, c.supports.everything || (h = function() {
        c.readyCallback()
      }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
        "complete" === b.readyState && c.readyCallback()
      })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <!--plugins para que funcione los alerts-->
  <script type="text/javascript" src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script type="text/javascript" src="assets/plugins/sweetalert2/sweetalert2.min.css"></script>
  <link rel="stylesheet" href="css/asweetalert2.css" type="text/css">
  <script type="text/javascript" src="assets/admin/examples/js/plugins/sweetalert2.js"></script>

  <link rel='stylesheet' id='mltlngg_stylesheet-css' href='assets/plugins/multilanguage/css/style.css?ver=1.3.4' type='text/css' media='all' />
  <link rel='stylesheet' id='bootstrap-css' href='assets/css/bootstrap.min.css?ver=5.2.5' type='text/css' media='all' />
  <link rel='stylesheet' id='styles-css' href='assets/css/style-min.css?ver=5.2.5' type='text/css' media='all' />
  <link rel='stylesheet' id='animate-css' href='assets/css/animate-min.css?ver=5.2.5' type='text/css' media='all' />
  <link rel='stylesheet' id='sanz-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=5.2.5' type='text/css' media='all' />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/inicio.css">
  <link rel='stylesheet' id='intlTelInput-css' href='https://www.genesnextstep.com/wp-content/themes/landing/assets/css/intlTelInput-min.css?ver=5.2.5' type='text/css' media='all' />

  <!--<link rel='stylesheet'  href='assets/fontawesome/css/font-awesome.min.css?ver=4.7.0' />-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>

  <script type='text/javascript' src='js/jquery/jquery.js'></script>
  <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='assets/js/bootstrap.bundle.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.easing.min.js'></script>
  <script type='text/javascript' src='assets/js/jqBootstrapValidation.min.js'></script>
  <script type='text/javascript' src='assets/js/functions.js'></script>
  <script type='text/javascript' src='assets/js/scroll.js'></script>
  <script type='text/javascript' src='assets/js/wow.min.js'></script>
  <script type='text/javascript' src='assets/js/inputmask.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.inputmask.min.js'></script>
  <script type='text/javascript' src='assets/js/intlTelInput.js'></script>
  <script type='text/javascript' src='assets/js/intlTelInput.min.js'></script>
  <link rel="stylesheet" href="https://use.typekit.net/fdh1lhp.css">
  <script type='text/javascript'>
    /* <![CDATA[ */
    var userSettings = {
      "url": "\/",
      "uid": "0",
      "time": "1591206303",
      "secure": "1"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='js/utils.min.js?ver=5.2.5'></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168804887-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-168804887-1');
  </script>

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
</head>


<body id="page-top">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DRTM5D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript)
End Google Tag Manager (noscript) -->
<div id="anchor-top"></div>
  <nav id="mainNav" class="navbar navbar-expand-lg">
    <div class="container">
      <p><a class="navbar-brand js-scroll-trigger" href="/ibjobcoach/"><img src="assets/dna/img/ibjobcoach.jpg" style="height: 30px;"></a></p>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fal fa-bars"></i></button>
      <div id="navbarResponsive" class="collapse navbar-collapse">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#nosotros">NOSOTROS</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#genes">¿QUÉ ES IBJOBCOACH?</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#beneficios">BENEFICIOS</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#prueba">PRUEBA GRATIS</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="precios.php">PRECIOS</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#contacto" href="#">EMPRESAS</a></li>
          <li class="nav-item"><a class="btn-login" href="assets/login.php" target="_blank" rel="noopener noreferrer">LOGIN</a></li>
          <li class="nav-item">
            <form class="mltlngg_switcher" name="mltlngg_change_language" method="post" action="">
              <ul class="mltlngg-lang-switch mltlngg-lang-switch-names">
                <li>
                  <a><img src="assets/dna/img/bandeirinhas/<?php echo $lang["Bandera"]; ?>.png"> Español de <?php echo $lang["Pais"]; ?></a>
                  <ul>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_CL" title="es_CL">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/chile.png" alt="Español de Chile"> Español de Chile</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_PE" title="Español de Perú">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/peru.png" alt="Español de Perú"> Español de Perú</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_SP" title="Español de España">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/espana.png" alt="Español de España"> Español de España</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_PA" title="Español de Panama">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/panama.png" alt="Español de Panama"> Español de Panama</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_UR" title="Español de Uruguay">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/uruguay.png" alt="Español de Uruguay"> Español de Uruguay</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_AR" title="Español de Argentina">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/argentina.png" alt="Español de Argentina"> Español de Argentina</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_BL" title="Español de Bolivia">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/bolivia.png" alt="Español de Bolivia"> Español de Bolivia</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_MX" title="Español de México">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/mexico.png" alt="Español de México"> Español de México</button>
                    </li>
                    <li>
                      <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_CO" title="Español de Colombia">
                        <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/colombia.png" alt="Español de Colombia"> Español de Colombia</button>
                    </li>
                  </ul>
                </li>
              </ul>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead">
    <div class="row">
      <div id="carousel-landing" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-landing" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-landing" data-slide-to="1"></li>
          <li data-target="#carousel-landing" data-slide-to="2"></li>
          <li data-target="#carousel-landing" data-slide-to="3"></li>
          <li data-target="#carousel-landing" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item  active">
            <div class="txt-slider text-center">SOMOS OUTPLACEMENT PARA TODOS. DIGITAL, 24/7, AUTOGESTIONADO
              <a class="btn-slider text-uppercase" href="COMPRAR.php">COMPRA AQUÍ</a>
            </div>
            <img width="1222" height="620" src="assets/dna/img/slider/slider1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="assets/dna/img/slider/slider1.jpg 1222w, assets/dna/img/slider/slider1x300.jpg 300w,  assets/dna/img/slider/slider1-768x376.jpg 768w,  assets/dna/img/slider/slider1-1024x502.jpg 1024w" sizes="(max-width: 1222px) 100vw, 1222px">
          </div>
          <div class="carousel-item  ">
            <div class="txt-slider2 text-center">SI ERES OPERARIO O TÉCNICO, TE SUGERIMOS 1 MES
              <a href="precios.php" class="btn-slider2 text-uppercase">COMPRA AQUÍ</a>
            </div>
            <img width="1049" height="620" src="assets/dna/img/slider/slider2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="assets/dna/img/slider/slider2.jpg 1049w,  assets/dna/img/slider/slider2x300.jpg 300w,  assets/dna/img/slider/slider2-768x439.jpg 768w,  assets/dna/img/slider/slider2-1024x586.jpg 1024w" sizes="(max-width: 1049px) 100vw, 1049px">
          </div>
          <div class="carousel-item">
            <div class="txt-slider3 text-center">SI ERES ANALISTA O ESPECIALISTA, TE SUGERIMOS 2 MESES
              <a href="precios.php" class="btn-slider3 text-uppercase">COMPRA AQUÍ</a>
            </div>
            <img width="1132" height="620" src="assets/dna/img/slider/slider3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="assets/dna/img/slider/slider3.jpg 1132w,  assets/dna/img/slider/slider3x300.jpg 300w,  assets/dna/img/slider/slider3-768x407.jpg 768w,  assets/dna/img/slider/slider3-1024x543.jpg 1024w" sizes="(max-width: 1132px) 100vw, 1132px">
          </div>
          <div class="carousel-item  ">
            <div class="txt-slider4 text-center">SI ERES JEFE, TE SUGERIMOS 3 MESES
              <a href="precios.php" class="btn-slider4 text-uppercase">COMPRA AQUÍ</a>
            </div>
            <img width="1152" height="620" src="assets/dna/img/slider/slider4.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="assets/dna/img/slider/slider4.jpg 1152w,  assets/dna/img/slider/slider4x300.jpg 300w,  assets/dna/img/slider/slider4-768x400.jpg 768w,  assets/dna/img/slider/slider4-1024x533.jpg 1024w" sizes="(max-width: 1152px) 100vw, 1152px">
          </div>
          <div class="carousel-item  ">
            <div class="txt-slider5 text-center">SI ERES GERENTE, TE SUGERIMOS 5 MESES
              <a href="precios.php" class="btn-slider5 text-uppercase">COMPRA AQUÍ</a>
            </div>
            <img width="1238" height="620" src="assets/dna/img/slider/slider5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="assets/dna/img/slider/slider5.jpg 1238w,  assets/dna/img/slider/slider5x300.jpg 300w,  assets/dna/img/slider/slider5-768x372.jpg 768w,  assets/dna/img/slider/slider5-1024x502.jpg 1024w" sizes="(max-width: 1238px) 100vw, 1238px">
          </div>
        </div>
          <a class="carousel-control-prev" href="#carousel-landing" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-landing" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  </header>

 <!----------------------------EDITANDO FORMULARIO "DESEAS MEJORAR COMO EMPRESA"------------->
 <div id="contacto" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="hubspot" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header contacto ml-2 mr-2">
          <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 id="hubspot" class="m-0">DESEAS MEJORAR COMO EMPRESA</h4>
        </div>
        <div class="modal-body">
          <p class="title-contacto">Ponte en contacto con nosotros para mayor informacion sobre la plataforma, </p>
          <p class="title-contacto"> sus beneficios y los planes que tenemos para tu empresa.</p>
          <p class="title-contacto"> Rellena el formulario y nosotros nos pondremos en contacto a la brevedad.</p>
          <form action="contactoempresa.php" method="POST" class="ajax2" id="contactoempresa">
            <div class="row">
            <div class="col-lg-12 p-2">
                <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre de la empresa" required>
              </div>
              <div class="col-lg-12 p-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese correo electrónico" required>
              </div>
              <div class="col-lg-6 p-2">
                <select type="text" name="pais" class="form-control"  id="pais" required placeholder="País">
                    <option value="">Seleccione su País</option>
                    <option value="Argentina">Argentina y Uruguay</option>
                    <option value="Brazil">Brasil</option>
                    <option value="Chile" >Chile</option>
                    <option value="Peru" >Perú</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Mexico">México</option>
                  </select>
                <!--<input type="text" class="form-control" name="pais" id="pais" placeholder="País" required>-->
              </div>
              <div class="col-lg-6 p-2">
                <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" pattern="[9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="El formato debe ser similar a 946696666" required>
              </div>
              <div class="col-lg-12 p-2">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre y Apellidos" required>
              </div>
              <div class="col-lg-12 p-2">
                <input type="text" class="form-control" name="cargo" id="pacargois" placeholder="Cargo que ocupa" required>
              </div>
              <script type="text/javascript">
                function cerrar(){
                  window.close('close');
                }
              </script>

              <div class="col-lg-12" align="center">
                <button type="submit" onclick="cerrar();" class="btn btn-success btn-lg p-2 " style="
                 border-radius: 20px;width: 25%;">Enviar</button>
              </div>

            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <!---------------------------- FIN EDITANDO FORMULARIO "DESEAS MEJORAR COMO EMPRES"------------>
  
  <section class="page-section wow fadeInUp" data-wow-duration="3s" id="nosotros">
    <div class="container-fluid">
        <div class="row ml-1" style="background: linear-gradient(to right, #B2BABB 50%, #E5E7E9 50%);">
            <div class="col-md-9 linea mt-5"></div>
            <div class="col-md-3 text-center">
                <p class="nosotros"><span style="color: red;">NOSOTROS</span></p>
            </div>
            <div class="col-md-6 text-center gerente mb-2">
                <img src="assets/dna/img/learning/negocio-exitoso.png" alt="imagen" class=" pb-1" style="max-width: 650px; margin-top: -50px;">
                <p class="m-0 font-weight-bold" style="font-size: 20px; color: red;">GERENTE</p>
                <p class="m-0" style="font-size: 18px;">ALDAIR CHICAMA</p>
            </div>
            <div class="col-md-6 row">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="img/grupo.png" alt="Imagen1" class="img-fluid mx-auto d-block mt-3" style="max-width: 100px;" />
                    <img src="img/grupo2.png" alt="Imagen2" class="img-fluid mx-auto d-block mt-3" style="max-width: 150px;" />
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-justify">
                        <span style="color: red;">IBJobcoach</span> es un conjunto de servicios orientados a entrenar a profesionales que desean
                        reinsertarse en el mercado laboral. IBoutplacement a través de su equipo de consultores, le
                        brindará todas las herramientas para mejorar su empleabilidad, desarrollar su marca personal,
                        empoderar su reputación online, manejar su red de contactos y lo más importante, lo entrenaremos
                        para conseguir trabajo que merece en el menor tiempo posible.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-justify">
                        <span style="color: red;">El Outplacement</span> se ha posicionado a nivel mundial como una de las mejores y más óptimas técnicas
                        para reducir al máximo el tiempo empleado en la recolocación laboral y lograr mejoras sustantivas
                        en el empleo que se logra obtener y resulta imprescindible hoy en día que se considere como una
                        estrategia necesaria para tener éxito en la carrera de cualquier profesional y ejecutivo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section wow fadeInUp custom-section" data-wow-duration="3s" id="genes" style="background-image: url('img/banner.jpg'); background-size: cover; background-position: center; color: white; padding: 20px;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 text-center" style="margin-bottom: 40px; margin-top: 40px;">
          <img src="img/left-image.jpg" alt="Left Image" class="img-fluid rounded-circle mb-2" style="border: 2px solid white;">
        </div>
        <div class="col-lg-8 text-center">
          <h1 class="mt-1 mb-3 custom-title" style="color: red; font-family: 'Arial', sans-serif; font-weight: bold; -webkit-text-stroke: 0.8px white; color: red;">OUTPLACEMENT</h1>
          <p class="custom-subtitle" style="font-size: 18px; font-family: 'Verdana', sans-serif;">PARA TODOS</p>
          <p class="parrafo-out custom-paragraph" style="font-size: 16px; font-family: 'Verdana', sans-serif;">Descubre los secretos del reclutamiento y selección en IBjobcoach para acercarte a tu puesto soñado más rápido.</p>
        </div>
        <div class="col-lg-2 text-center" style="margin-bottom: 40px; margin-top: 40px;">
          <img src="img/right-image.jpg" alt="Right Image" class="img-fluid rounded-circle mb-2" style="border: 2px solid white;">
        </div>
      </div>
    </div>
</section>
  <!-- Services -->
  <section class="page-section wow fadeInUp" data-wow-duration="3s" id="beneficios" >
    <div class="container-fluid">
      
      <div class="row">

        <div class="col-md-3 p-0">
          <p class="nosotros">BENEFICIOS</p>
        </div>
        <div class="col-md-9  pl-0">
          <div class="col-md-12 linea mt-5"></div>
        </div>
        <div class="col-md-12 row pt-4 px-5">
          
          <div class="col-md col-sm-6 col-xs-6  ico p-0 text-center">
            <img src="assets/dna/img/icono/icono1.png" alt="" class="" >
            <p class="text-uppercase text-center p-1">Vacantes en un solo lugar</p>
          </div>
          <div class="col-md col-sm-6 col-xs-6 ico icot p-0 text-center">
            <img src="assets/dna/img/icono/icono2.png" alt="" class=" " >
            <p class="text-uppercase text-center p-1">Mejor desempeño en entrevistas</p>
          </div>
          <div class="col-md col-sm-6 col-xs-6  p-0 ico text-center">
            <img src="assets/dna/img/icono/icono3.png" alt="" class=" " >
            <p class="text-uppercase text-center p-1">Contacto con Headhunters y reclutadores</p>
          </div>
          <div class="col-md col-sm-6 col-xs-6  ico icot p-0 text-center">
            <img src="assets/dna/img/icono/icono4.png" alt="" class="" >
            <p class="text-uppercase text-center p-1">Mejora tu CV para los reclutadores</p>
          </div>
          <div class="col-md col-sm-6 col-xs-6  p-0 ico text-center">
            <img src="assets/dna/img/icono/icono5.png" alt="" class="" >
            <p class="text-uppercase text-center p-1">Sesiones virtuales de OUTPLACEMENT</p>
          </div>
          
      </div>
        
    </div>
  </section>
  <a href="#anchor-top" class="scroll" id="scroll-top-link">
			<i class="fas fa-chevron-up"></i>
  </a>
  <!-- Prueba -->
  <section class="page-section wow fadeInUp container-fluid" data-wow-duration="3s" id="prueba">
    <div class="row pl-4">
      <div class="col-md-8 linea mt-5 "></div>
      <div class="col-md-4">
        <p class="nosotros">PRUEBA GRATIS</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 prueba">
          
          <h2 class="pl-5">¡No hay mejor manera de conocer IBjobcoach que probándola!</h2>
        </div>
        <div id="PruebaGratuita">
        <!-- Formulario -->
        <form action="registrarme.php" method="post" id="PruebaGratuita1">
          <div class="row">
            <div class="col-md-8 form ">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="name" id="try-nome" placeholder="Nombre" required="required">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="last_name" id="try-sobrenome" placeholder="Apellido" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <select name="country" class="form-control custom-select cargos_programa" required="required" id="try-pais">
                    <option value="">Seleccione su País</option>
                    <option value="Argentina">Argentina y Uruguay</option>
                    <option value="Brazil">Brasil</option>
                    <option value="Chile" >Chile</option>
                    <option value="Peru" selected="">Perú</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Mexico">México</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <div class="intl-tel-input allow-dropdown">
                    <div class="flag-container">
                      <div class="selected-flag" tabindex="0" title="Perú: +51">
                        <div class="iti-flag pe"></div>
                        <div class="iti-arrow"></div>
                      </div>
                      <ul class="country-list dropup hide">
                        <li class="country preferred active" data-dial-code="51" data-country-code="pe">
                          <div class="flag-box">
                            <div class="iti-flag pe"></div>
                          </div>
                          <span class="country-name">Perú</span>
                          <span class="dial-code">+51</span>
                        </li>
                        <li class="divider"></li>
                        <li class="country" data-dial-code="54" data-country-code="ar">
                          <div class="flag-box">
                            <div class="iti-flag ar"></div>
                          </div>
                          <span class="country-name">Argentina</span>
                          <span class="dial-code">+54</span>
                        </li>
                        <li class="country" data-dial-code="55" data-country-code="br">
                          <div class="flag-box">
                            <div class="iti-flag br"></div>
                          </div>
                          <span class="country-name">Brazil (Brasil)</span>
                          <span class="dial-code">+55</span>
                        </li>
                        <li class="country" data-dial-code="56" data-country-code="cl">
                          <div class="flag-box">
                            <div class="iti-flag cl"></div>
                          </div>
                          <span class="country-name">Chile</span>
                          <span class="dial-code">+56</span>
                        </li>
                        <li class="country" data-dial-code="57" data-country-code="co">
                          <div class="flag-box">
                            <div class="iti-flag co"></div>
                          </div>
                          <span class="country-name">Colombia</span>
                          <span class="dial-code">+57</span>
                        </li>
                        <li class="country highlight" data-dial-code="52" data-country-code="mx">
                          <div class="flag-box">
                            <div class="iti-flag mx"></div>
                          </div>
                          <span class="country-name">Mexico (México)</span>
                          <span class="dial-code">+52</span>
                        </li>
                        <li class="country" data-dial-code="51" data-country-code="pe">
                          <div class="flag-box">
                            <div class="iti-flag pe"></div>
                          </div>
                          <span class="country-name">Peru (Perú)</span>
                          <span class="dial-code">+51</span>
                        </li>
                        <li class="country" data-dial-code="1" data-country-code="us">
                          <div class="flag-box">
                            <div class="iti-flag us"></div>
                          </div>
                          <span class="country-name">United States</span>
                          <span class="dial-code">+1</span>
                        </li>
                      </ul>
                    </div>
                    <input type="tel" name="phone" class="form-control"  placeholder="Teléfono" required="required" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <p><select name="position" class="form-control custom-select cargos_programa" required="required" id="try-posicao">
                      <option value="">Seleccione su Posición</option>
                      <option value="Analista">Analista</option>
                      <option value="Especialista">Especialista</option>
                      <option value="Jefe">Jefe</option>
                      <option value="SubGerente">SubGerente</option>
                      <option value="Gerente">Gerente</option>
                      <option value="Director">Director</option>
                      <option value="VP">VP</option>
                      <option value="Gerente General">Gerente General</option>
                      <option value="CEO">CEO</option>
                    </select></p>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="try-email" placeholder="Correo" required="required">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" name="password" id="try-senha" minlength="8" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="col-md-4 form-txt ">
              <p>Por 2 días obtén acceso a la plataforma de forma gratuita y descubre la variedad de contenidos que existe en ella.</p>
              <div class="form-group col-md-12">
                <div class="form-group check">
                  <label class="txt-check">Actualmente estoy trabajando.
                    <input type="checkbox" name="working" id="jobs" value="1">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="cargando cargo" style="display: none;">&nbsp;</div>
              <div class="envia-prueba" style="display: none;"></div>
              <input type="hidden" name="phonePais" class="phonePais" value="pe">
              <input type="hidden" name="namePais" class="namePais" value="Perú">
              <input type="hidden" name="type" value="registro">
              <button type="submit" class="btn btn-success">Accede a IBjobcoach <i class="fal fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </form>
        </div>

<!--Fin prueba gratis-->

      </div>
    </div>
   
    
  </section>
  <a href="#anchor-top" class="scroll" id="scroll-top-link">
        <i class="fas fa-chevron-up"></i>
  </a>
  
  <!-- Footer -->
  <?php require_once "views/footer.php"?>

  <script>
  $('#PruebaGratuita').on('submit', '#PruebaGratuita1', function(event) {
	event.preventDefault();
	var $form = $(this);
	$.ajax({
		url			: $form.attr('action'),
		type		: $form.attr('method'),
		data		: $form.serialize(),
		beforesend: function(){
		},
		success: function(response){
		swal(response);
		document.getElementById("PruebaGratuita1").reset();
	}
	})
});
  </script>
  <script>
  $('#contacto').on('submit', '#contactoempresa', function(event) {
	event.preventDefault();
	var $form = $(this);
	$.ajax({
		url			: $form.attr('action'),
		type		: $form.attr('method'),
		data		: $form.serialize(),
		beforesend: function(){
		},
		success: function(response){
    swal(response);
    $('#contacto').modal('hide');
		document.getElementById("contactoempresa").reset();
	}
	})
});
  </script>