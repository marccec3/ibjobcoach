<?php
require 'listar.php';
if (isset($_POST["mltlngg_change_display_lang"])) {
    $lang = $_POST["mltlngg_change_display_lang"];
    // var_dump($lang);
    // if(!empty($lang)){
    //   $_SESSION["mltlngg_change_display_lang"] = $lang;
    // }
    require "lang/" . $lang . ".php";
} else {
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
    <link href="../assets/dna/img/icono.png" rel="icon" type="../image/png" />
    <title>.:: IBvirtual ::.</title>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
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
    <script type="text/javascript" src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/sweetalert2/sweetalert2.min.css"></script>
    <link rel="stylesheet" href="../css/asweetalert2.css" type="text/css">
    <script type="text/javascript" src="../assets/admin/examples/js/plugins/sweetalert2.js"></script>

    <link rel='stylesheet' id='mltlngg_stylesheet-css' href='../assets/plugins/multilanguage/css/style.css?ver=1.3.4' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='../assets/css/bootstrap.min.css?ver=5.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='styles-cs/s' href='../assets/css/style-min.css?ver=5.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='../assets/css/animate-min.css?ver=5.2.5' type='text/css' media='all' />
    <link rel='stylesheet' id='sanz-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=5.2.5' type='text/css' media='all' />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel='stylesheet' id='intlTelInput-css' href='https://www.genesnextstep.com/wp-content/themes/landing/assets/css/intlTelInput-min.css?ver=5.2.5' type='text/css' media='all' />

    <!--<link rel='stylesheet'  href='assets/fontawesome/css/font-awesome.min.css?ver=4.7.0' />-->
    <script type='text/javascript' src='../js/jquery/jquery.js'></script>
    <script type='text/javascript' src='../js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../assets/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery.easing.min.js'></script>
    <script type='text/javascript' src='../assets/js/jqBootstrapValidation.min.js'></script>
    <script type='text/javascript' src='../assets/js/functions.js'></script>
    
    <script type='text/javascript' src='../assets/js/scroll.js'></script>
    <script type='text/javascript' src='../assets/js/wow.min.js'></script>
    <script type='text/javascript' src='../assets/js/inputmask.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery.inputmask.min.js'></script>
    <script type='text/javascript' src='../assets/js/intlTelInput.js'></script>
    <script type='text/javascript' src='../assets/js/intlTelInput.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var userSettings = {
            "url": "\/",
            "uid": "0",
            "time": "1591231126",
            "secure": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.genesnextstep.com/wp-includes/js/utils.min.js?ver=5.2.5'></script>
    <link rel='https://api.w.org/' href='https://www.genesnextstep.com/es_CL/wp-json/' />
    <link rel="canonical" href="https://www.genesnextstep.com/es_CL/precios/" />
    <link rel='shortlink' href='https://www.genesnextstep.com/es_CL/?p=841' />
    <link rel="alternate" type="application/json+oembed" href="https://www.genesnextstep.com/es_CL/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.genesnextstep.com%2Fes_CL%2Fprecios%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.genesnextstep.com/es_CL/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.genesnextstep.com%2Fes_CL%2Fprecios%2F&#038;format=xml" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168804887-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-110850275-1');
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
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DRTM5D');
    </script>
    <!-- End Google Tag Manager -->
</head>


<body id="page-top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DRTM5D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav id="mainNav" class="navbar navbar-expand-lg">
        <div class="container">
            <p><a class="navbar-brand js-scroll-trigger" href="index.php"><img class="alignnone size-full wp-image-128" src="./assets/dna/img/ibvirtual.png" style="height: 30px;"></a></p>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div id="navbarResponsive" class="collapse navbar-collapse">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php?=#genes">¿QUÉ ES IBvirtual?</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php?=#pilares">PILARES</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php?=#prueba">PRUEBA GRATIS</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="precios.php">PRECIOS</a> </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#contacto" href="https://www.genesnextstep.com/#contacto">EMPRESAS</a></li>
                    <li class="nav-item"><a class="btn-login" href="../assets/login.php" target="_blank" rel="noopener noreferrer"> LOGIN</a></li>
                    <li class="nav-item">
                        <form class="mltlngg_switcher" name="mltlngg_change_language" method="post" action="">
                            <ul class="mltlngg-lang-switch mltlngg-lang-switch-names">
                                <li>
                                    <a><img src="../assets/dna/img/bandeirinhas/<?php echo $lang["Bandera"]; ?>.png"> Español de <?php echo $lang["Pais"]; ?></a>
                                    <ul>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_CL" title="es_CL">
                                                <img class="mltlngg-lang" src="assets/dna/img/bandeirinhas/chile.png" alt="Español de Chile"> Español de Chile</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_PE" title="Español de Perú">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/peru.png" alt="Español de Perú"> Español de Perú</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_SP" title="Español de España">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/espana.png" alt="Español de España"> Español de España</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_PA" title="Español de Panama">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/panama.png" alt="Español de Panama"> Español de Panama</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_UR" title="Español de Uruguay">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/uruguay.png" alt="Español de Uruguay"> Español de Uruguay</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_AR" title="Español de Argentina">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/argentina.png" alt="Español de Argentina"> Español de Argentina</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_BL" title="Español de Bolivia">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/bolivia.png" alt="Español de Bolivia"> Español de Bolivia</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_MX" title="Español de México">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/mexico.png" alt="Español de México"> Español de México</button>
                                        </li>
                                        <li>
                                            <button class="mltlngg-lang-button-icons" name="mltlngg_change_display_lang" value="es_CO" title="Español de Colombia">
                                                <img class="mltlngg-lang" src="../assets/dna/img/bandeirinhas/colombia.png" alt="Español de Colombia"> Español de Colombia</button>
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
    <header>
        <div class="row">
                <div class="container row color-precio col-lg-12 col-md-12 ">
                    <div class=" container col-lg-8 col-md-12  col-sm-12">           
                        <img class=" pl-3 img-precio" src="../assets/dna/img/img_precio2.jpg" alt="" />       
                    </div>
                    
                    <div class="col-lg-4 p-0 center">
                        <div class="txt-precio">EN <span class="personaje" >IBVIRTUAL</span> 
                            TENEMOS LO QUE <span class="personaje" >NECESITAS</span>
                                <a class="btn-precio text-uppercase" href="#precios">¡COTIZA YA!</a>
                        </div>      
                    </div>
                </div>
                <div class="container col-md-12 espacio">
                        
                </div>
        </div>

    </header>
<!----------------------------EDITANDO FORMULARIO "DESEAS MEJORAR COMO EMPRES"------------->
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
          <form action="contactoempresa.php" method="POST" class="ajax2">
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
    <section class="page-section" id="precios">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center genes-tabs wow fadeInUp" data-wow-duration="2s">
                    <nav class="nav-justified ">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">IBvirtual Licencias</a><br />
                            <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">IBvirtual Plus</a><br />
                            <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false"> Webinars</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                            <div class="pt-3"></div>
                            <h5 class="title-pagos">Indícanos tu posición y te ayudamos a definir cuanto tiempo contratar IBVirtual</h5>
                            <div class="col-md-12">
                                <form id="form_cargos" action="" method="post">
                                    <div class="row">
                                        <div class="form-group col-md-4">                                            
                                        <select id="cargos" name="cargos" class="form-control custom-select cargos_programa">
                                                <option selected="selected" value="0">Selecciona tu posición</option>
                                            <?php
                                                $sql = "SELECT * FROM posiciones order by id asc";
                                                $query = $connect->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) { ?>
                                                <option value="<?php echo $result->valor ?>"><?php echo $result->nombre;?></option>
                                              <?php }}?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control mes_cargo"  name ="mescargo" id="mescargo" value="" placeholder="Número de meses" disabled="disabled" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control valor_cargo"  name="valorcargo" id="valorcargo" value="" placeholder="Valor / mes" disabled="disabled" />
                                        </div>
                                    </div>
                                    <p class="txt-compra" style="display: none;">A un <span class="nomcargo"></span> le
                                        toma en promedio <span class="nmes"></span> encontrar trabajo con un programa de
                                        Outplacement. Es por esto que, te recomendamos dos meses de licencia IBvirtual para
                                        que perfecciones tus herramientas y estés mejor preparado a la hora de buscar
                                        empleo.</p>
                                    <p class="txt-licencias">Según estudios, lo que te demoras en conseguir la
                                        recolocación laboral está directamente relacionado con la pirámide laboral.
                                        Entre más arriba de la pirámide te encuentres, habrán menos cargos disponibles
                                        en el mercado, por lo que la oferta laboral será más baja. Así mismo, entre más
                                        abajo de la pirámide estés, mayor es la oferta laboral. Por lo tanto, el tiempo
                                        de recomendación de la herramienta IBvirtual, dependerá únicamente del cargo que
                                        tienes</p>
                                        <button class="btn btn-comprar" type="button" style="display: none;" id="suscripcion">SIGUIENTE</button><br />
                                </form>
                            </div>
                            <!-- Prueba -->
                            <section class="page-section" id="box-suscripcion" style="display: none;">
                                <div class="container">
                                    <div class="row">
                                        <form id="formplanes" method="post" action="" class="form_planes" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-6 form_planes ">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="required">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" name="last_name" placeholder="Apellido" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <input type="email" class="form-control" name="correo" placeholder="Correo" required="required">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="password" class="form-control" name="password" placeholder="Crear una clave" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
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
                                                                                <div class="iti-flag pe">
                                                                                </div>
                                                                            </div>
                                                                            <span class="country-name">Perú</span>
                                                                            <span class="dial-code">+51</span>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li class="country" data-dial-code="54" data-country-code="ar">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag ar">
                                                                                </div>
                                                                            </div>
                                                                            <span class="country-name">Argentina</span>
                                                                            <span class="dial-code">+54</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="55" data-country-code="br">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag br">
                                                                                </div>
                                                                            </div>
                                                                            <span class="country-name">Brazil
                                                                                (Brasil)</span>
                                                                            <span class="dial-code">+55</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="56" data-country-code="cl">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag cl">
                                                                                </div>
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
                                                                            <span class="country-name">Mexico
                                                                                (México)</span>
                                                                            <span class="dial-code">+52</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="51" data-country-code="pe">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag pe"></div>
                                                                            </div>
                                                                            <span class="country-name">Peru
                                                                                (Perú)</span>
                                                                            <span class="dial-code">+51</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1" data-country-code="us">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag us"></div>
                                                                            </div>
                                                                            <span class="country-name">United
                                                                                States</span>
                                                                            <span class="dial-code">+1</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="tel" name="phone" class="form-control" placeholder="Teléfono" required="required" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control txt-cupon" name="cupon" placeholder="Cupón de Descuento">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <input class="btn btn-cupon" type="button" style value="VALIDAR CUPÓN">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 msj-cupon-error" style="display: none;">¡Este
                                                        descuento ha expirado o no existe más!
                                                    </div>
                                                    <div class="col-md-12 msj-cupon-acepted" style="display: none;">
                                                        ¡Tienes un <span class="valor-dscto"></span>% de descuento
                                                        usando este cupón!
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form_planes">
                                                    <div class="form-group col-md-12">
                                                        <h4>Seleccione una forma de pago</h4>
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn-paypal btn-activo">
                                                                <img class="alignnone size-medium wp-image-438 paypal" src="assets/dna/img/Paypal-logo-min-300x104.jpg" alt="paypal" width="300" height="104" /></button>
                                                            <button type="button" class="btn-transferencia">
                                                                <img class="alignnone size-medium wp-image-441 transferencia" src="assets/dna/img/bank-transfer-300x119.png" alt="transferencia" width="300" height="251" /><span class="transfer-txt">Transferencia</span></button>
                                                        </div>
                                                        <div class="col-md-12 txt-buy">
                                                            <ul class="txt-pagos" style="display:none;">
                                                                <li>Para activar la licencia por transferencia debe
                                                                    depsoitar el valor total del paquete comprado (valor
                                                                    mensual x cantidad de meses) y enviarnos el
                                                                    comprobante de la transferencia al correo
                                                                    cm.outplacement.coaching@corpibgroup.com</li>
                                                                <li>La cuenta será activada en las próximas 24 horas.
                                                                </li>
                                                                <li>Datos Cuenta:</li>
                                                                <li>Nombre: IBvirtual</li>
                                                                <li>Banco BCP</li>
                                                                <li>Cuenta Corriente Nº 1919357927416</li>
                                                                <li>RUT: 00.000.000-0</li>
                                                            </ul>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="envia-prueba suscripcion" style="display: none;">
                                                    </div>
                                                    <input type="hidden" name="suscripcion" value="ok" />
                                                    <input type="hidden" name="mes-posicion" class="mes-posicion" value="" />
                                                    <input type="hidden" name="select-posicion" class="select-posicion" value="" />
                                                    <input type="hidden" name="valor-plan" class="valor-plan" value="" />
                                                    <input type="hidden" name="dscto-plan" class="dscto-plan" value="0" />
                                                    <input type="hidden" name="planesId" class="planesId" value="">
                                                    <input type="hidden" name="codPais" class="codPais" value="1">
                                                    <input type="hidden" name="productId" class="productId" value="">
                                                    <input type="hidden" name="moneda" class="monedaLocal" value="$">
                                                    <input type="hidden" name="phonePais" class="phonePais" value="cl">
                                                    <input type="hidden" name="namePais" class="namePais" value="Chile">
                                                    <div class="cargando cargo" style="display: none;">&nbsp;</div>
                                                   <button type="submit" id="enviar" class="btn btn-submit-suscripcion">COMPRAR</button>
                                                     <!--<button type="submit"  class="btn btn-primary">COMPRAR</button>-->

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <div class="col-md-12">
                                <p class="split"></p>
                            </div>
                            <div class=" col-md-12">
                                <h5 class="title-pagos">¡Ya sé cuantos meses quiero!</h5>
                            </div>
                            <div class="col-md-12 box-meses">
                                <form id="form_meses" action="" method="post">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select id="meses" class="form-control custom-select select-meses">
                                                <option selected="selected" value="0">Seleccione un mes</option>
                                                <option value="1-60.000">1 mes</option>
                                                <option value="2-54.000">2 meses</option>
                                                <option value="3-48.000">3 meses</option>
                                                <option value="4-43.000">4 meses</option>
                                                <option value="5-39.000">5 meses</option>
                                                <option value="6-35.000">6 meses</option>
                                                <option value="7-30.000">7 meses</option>
                                                <option value="8-28.000">8 meses</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input id="mesvalor" class="form-control meses-valor" type="text" value="" placeholder="Valor / mes" disabled="disabled" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="button" class="btn btn-comprar" id="pagar_mes" style="display: none;" value="">SIGUIENTE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <section class="page-section" id="box-suscripcion-meses" style="display: none;">
                                <div class="container">
                                    <div class="row">
                                        <form id="formMeses" method="post" action="" class="form_planes" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-md-6 form_planes ">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="required">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control" name="last_name" placeholder="Apellido" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <input type="email" class="form-control" name="correo" placeholder="Correo" required="required">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="password" class="form-control" name="password" placeholder="Crear una clave" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <div class="intl-tel-input allow-dropdown">
                                                                <div class="flag-container">
                                                                    <div class="selected-flag" tabindex="0" title="Chile: +51">
                                                                        <div class="iti-flag pe"></div>
                                                                        <div class="iti-arrow"></div>
                                                                    </div>
                                                                    <ul class="country-list dropup hide">
                                                                        <li class="country preferred active" data-dial-code="51" data-country-code="pe">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag pe"></div>
                                                                            </div>
                                                                            <span class="country-name">Perú</span>
                                                                            <span class="dial-code">+5</span>
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
                                                                            <span class="country-name">Brazil
                                                                                (Brasil)</span>
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
                                                                            <span class="country-name">Mexico
                                                                                (México)</span>
                                                                            <span class="dial-code">+52</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="51" data-country-code="pe">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag pe"></div>
                                                                            </div>
                                                                            <span class="country-name">Peru
                                                                                (Perú)</span>
                                                                            <span class="dial-code">+51</span>
                                                                        </li>
                                                                        <li class="country" data-dial-code="1" data-country-code="us">
                                                                            <div class="flag-box">
                                                                                <div class="iti-flag us"></div>
                                                                            </div>
                                                                            <span class="country-name">United
                                                                                States</span>
                                                                            <span class="dial-code">+1</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <input type="tel" name="phone" class="form-control" placeholder="Teléfono" required="required" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control txt-cupon" name="cupon" placeholder="Cupón de Descuento">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <input class="btn btn-cupon" type="button" style="display: none;" value="VALIDAR CUPÓN">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 msj-cupon-error" style="display: none;">¡Este
                                                        descuento ha expirado o no existe más!
                                                    </div>
                                                    <div class="col-md-12 msj-cupon-acepted" style="display: none;">
                                                        ¡Tienes un <span class="valor-dscto"></span>% de descuento
                                                        usando este cupón!
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form_planes">
                                                    <div class="form-group col-md-12">
                                                        <h4>Seleccione una forma de pago</h4>
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn-paypal btn-activo">
                                                                <img class="alignnone size-medium wp-image-438 paypal" src="assets/dna/img/Paypal-logo-min-300x104.jpg" alt="paypal" width="300" height="104" /></button>
                                                            <button type="button" class="btn-transferencia mensual">
                                                                <img class="alignnone size-medium wp-image-441 trans-mensual" src="assets/dna/img/bank-transfer-300x119.png" alt="transferencia" width="300" height="251" /><span class="transfer-txt">Transferencia</span></button>
                                                        </div>
                                                        <div class="col-md-12 txt-buy">
                                                            <ul class="t-pagos" style="display:none;">
                                                                <li>Para activar la licencia puede transferir el valor
                                                                    del paquete comprado y enviarnos el comprobante de
                                                                    la transferencia al correo
                                                                    cm.outplacement.coaching@corpibgroup.com</li>
                                                                <li>La cuenta será activada en las próximas 24 horas.
                                                                </li>
                                                                <li>Datos Cuenta:</li>
                                                                <li>Nombre: IBvirtual</li>
                                                                <li>Banco Scotiabank</li>
                                                                <li>Cuenta Corriente Nº 50402050100010547</li>
                                                                <li>RUT: 76.834.203-2</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="envia-prueba suscripcion" id="mensaje" style="display: none;"></div>
                                                    <input type="hidden" name="suscripcion" value="ok" />
                                                    <input type="hidden" name="mes-posicion" class="mes-posicion-mensual" value="" />
                                                    <input type="hidden" name="select-posicion" class="select-posicion-mensual" value="" />
                                                    <input type="hidden" name="valor-plan" class="valor-plan-mensual" value="" />
                                                    <input type="hidden" name="dscto-plan" class="dscto-plan" value="0" />
                                                    <input type="hidden" name="planesId" class="planesIdMes" value="">
                                                    <input type="hidden" name="codPais" class="codPais" value="1">
                                                    <input type="hidden" name="productId" class="productIdMes" value="">
                                                    <input type="hidden" name="moneda" class="monedaLocal" value="$">
                                                    <div class="cargando cargo" style="display: none;">&nbsp;</div>
                                                    <button type="submit" id="enviarMeses" class="btn btn-submit-suscripcion-meses">COMPRAR </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                            <div class="pt-3"></div>
                            <h5 class="title-pagos">Además de tener acceso a IBvirtual, asesórate con expertos a través
                                de <span class="gris">sesiones individuales Expertos IBGroup.</span> Así logras
                                potenciar de mejor manera tu perfil laboral.</h5>
                            <!-- Pagos -->
                            <section class="page-section precios scrollflow -slide-bottom -opacity" id="precios">
                                <div class="container">
                                    <div class="card-deck">
                                        <div class="card price">
                                            <div class="card-body sesiones">
                                                <h5 class="card-title">2 SESIONES</h5>
                                                <p><span class="card-text">Sesiones Individuales con Consultores y Head
                                                        Hunters IBGrupo en empleabilidad</span>
                                                    <button class="btn btn-price mas" type="submit" data-toggle="modal" data-target="#modal2">SABER MÁS</button>
                                            </div>
                                        </div>
                                        <div class="card price">
                                            <div class="card-body sesiones">
                                                <h5 class="card-title">3 SESIONES</h5>
                                                <p><span class="card-text">Sesiones Individuales con Consultores y Head
                                                        Hunters IBGrupo en empleabilidad</span>
                                                    <button class="btn btn-price mas" type="submit" data-toggle="modal" data-target="#modal3">SABER MÁS</button>
                                            </div>
                                        </div>
                                        <div class="card price">
                                            <div class="card-body sesiones">
                                                <h5 class="card-title">5 SESIONES</h5>
                                                <p><span class="card-text">Sesiones Individuales con Consultores y Head
                                                        Hunters IBGrupo en empleabilidad</span>
                                                    <button class="btn btn-price mas" type="submit" data-toggle="modal" data-target="#modal5">SABER MÁS</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Modal -->
                            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content plus">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title plus" id="exampleModalLongTitle">2 SESIONES</h5>
                                                <p class="txt-modal-title plus">Incluye: <br />Licencia IBvirtual por 6 meses</p>
                                                <p class="txt-modal plus"><strong>Sesión 1:</strong> Propuesta de valor </p>
                                                <p class="txt-modal plus"><strong>Sesión 2:</strong> Match de mercado </p>
                                                <p><button type="submit" class="btn btn-price plus">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title plus">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 2 SESIONES -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado" id="mail-enviado2"></div>
                                                        <input type="hidden" name="consultaplus" value=" 2 SESIONES" />
                                                        <input type="hidden" name="nomPais" value="Perú" />
                                                        <input type="hidden" name="type" value="2" />
                                                        <input type="submit" class="btn btn-submit" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content plus">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title plus" id="exampleModalLongTitle">3 SESIONES</h5>
                                                <p class="txt-modal-title plus">Incluye: <br />Licencia IBvirtual por 6 meses</p>
                                                <p class="txt-modal plus"><strong>Sesión 1:</strong> Propuesta de valor</p>
                                                <p class="txt-modal plus"><strong>Sesión 2:</strong> Match de mercado</p>
                                                <p class="txt-modal plus"><strong>Sesión 3:</strong> Técnicas de entrevista</p>
                                                <p><button type="submit" class="btn btn-price plus">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title plus">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 3 SESIONES -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado" id="mail-enviado3"></div>
                                                    <p><input type="hidden" name="consultaplus" value="3 SESIONES" />
                                                        <input type="hidden" name="nomPais" value="Perú" />
                                                        <input type="hidden" name="type" value="3" />
                                                        <input type="submit" class="btn btn-submit" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content plus">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title plus" id="exampleModalLongTitle">5 SESIONES</h5>
                                                <p class="txt-modal-title plus">Incluye: <br />Licencia IBvirtual por 6 meses</p>
                                                <p class="txt-modal plus"><strong>Sesión 1:</strong> Análisis de Competencias y Palancas Motivacionales (Myco)</p>
                                                <p class="txt-modal plus"><strong>Sesión 2:</strong> Propuesta de valor </p>
                                                <p class="txt-modal plus"><strong>Sesión 3:</strong> Match de mercado </p>
                                                <p class="txt-modal plus"><strong>Sesión 4:</strong> Técnicas de entrevista</p>
                                                <p class="txt-modal plus"><strong>Sesión 5:</strong> Gestión de prospección y redes</p>
                                                <p><button type="submit" class="btn btn-price plus">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title plus">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 5 SESIONES -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado" id="mail-enviado5"></div>
                                                    <p><input type="hidden" name="consultaplus" value="5 SESIONES" />
                                                        <input type="hidden" name="nomPais" value="Perú" />
                                                        <input type="hidden" name="type" value="5" />
                                                        <input type="submit" class="btn btn-submit" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                            <div class="pt-3"></div>
                            <h5 class="title-pagos">Además de tener acceso a IBvirtual, también participa de <span class="gris">talleres con Expertos IBGrupo online.</span> guiados por expertos en
                                transición laboral.</h5>

                            <!-- Pagos Webinars -->
                            <section class="page-section webinar scrollflow -slide-bottom -opacity" id="webinars">
                                <div class="container">
                                    <div class="card-deck">
                                        <div class="card price webinar">
                                            <div class="card-body webinar">
                                                <h5 class="card-title webinar">2 WEBINAR</h5>
                                                <p><button class="btn btn-price mas webinars" type="submit" data-toggle="modal" data-target="#modal2w">SABER MÁS</button>
                                            </div>
                                        </div>
                                        <div class="card price webinar">
                                            <div class="card-body webinar">
                                                <h5 class="card-title webinar">3 WEBINAR</h5>
                                                <p><button class="btn btn-price mas webinars" type="submit" data-toggle="modal" data-target="#modal3w">SABER MÁS</button>
                                            </div>
                                        </div>
                                        <div class="card price webinar">
                                            <div class="card-body webinar">
                                                <h5 class="card-title webinar">5 WEBINAR</h5>
                                                <p><button class="btn btn-price mas webinars" type="submit" data-toggle="modal" data-target="#modal5w">SABER MÁS</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                            <!-- Modal Webinars -->
                            <div class="modal fade" id="modal2w" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content webinar">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title webinar" id="exampleModalLongTitle">2 Webinars</h5>
                                                <p class="txt-modal-title webinar">Incluye: <br />Licencia por 6 meses</p>
                                                <p class="txt-modal webinar"><strong>Webinar 1:</strong> Propuesta de valor</p>
                                                <p class="txt-modal webinar"><strong>Webinar 2:</strong> Gestión de prospección y redes</p>
                                                <p><button type="submit" class="btn btn-price webinar">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title webinar">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 2 WEBINAR -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado webinar" id="mail-enviado2w"></div>
                                                    <p><input type="hidden" name="consultaplus" value="2 Webinars" />
                                                        <input type="hidden" name="nomPais" value="Perú" />
                                                        <input type="hidden" name="type" value="webinar2" />
                                                        <input type="submit" class="btn btn-submit webinar" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal3w" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content webinar">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title webinar" id="exampleModalLongTitle">3 Webinars</h5>
                                                <p class="txt-modal-title webinar">Incluye: <br />Licencia IBvirtual por 6 meses</p>
                                                <p class="txt-modal webinar"><strong>Webinar 1:</strong> Propuesta de valor</p>
                                                <p class="txt-modal webinar"><strong>Webinar 2:</strong> Gestión de prospección y redes</p>
                                                <p class="txt-modal webinar"><strong>Webinar 3:</strong> Técnicas de entrevista</p>
                                                <p><button type="submit" class="btn btn-price webinar">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title webinar">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 3 WEBINAR -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado webinar" id="mail-enviado3w"></div>
                                                    <input type="hidden" name="consultaplus" value="3 Webinars" />
                                                    <input type="hidden" name="nomPais" value="Perú" />
                                                    <input type="hidden" name="type" value="webinar3" />
                                                    <input type="submit" class="btn btn-submit webinar" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal5w" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content webinar">
                                        <div class="modal-body">
                                            <button type="button" class="close plus" data-dismiss="modal" aria-label="Close"><br />
                                                <span aria-hidden="true">×</span><br />
                                            </button></p>
                                            <div class="box-modal-plus">
                                                <h5 class="modal-title webinar" id="exampleModalLongTitle">5 Webinars</h5>
                                                <p class="txt-modal-title webinar">Incluye: <br />Licencia IBvirtual por 6 meses</p>
                                                <p class="txt-modal webinar"><strong>Webinar 1:</strong> Evaluación por competencia y palancas motivacionales</p>
                                                <p class="txt-modal webinar"><strong>Webinar 2:</strong> Propuesta de valor</p>
                                                <p class="txt-modal webinar"><strong>Webinar 3:</strong> Match de mercado</p>
                                                <p class="txt-modal webinar"><strong>Webinar 4:</strong> Gestión de prospección y redes</p>
                                                <p class="txt-modal webinar"><strong>Webinar 5:</strong> Técnica de entrevista</p>
                                                <p><button type="submit" class="btn btn-price webinar">COTIZAR</button>
                                            </div>
                                            <div class="col-md-12 form-plus" style="display: none;">
                                                <h5 class="modal-title webinar">SUSCRÍBETE</h5>

                                                <!-- FORMULARIO 5 WEBINAR -->
                                                <form method="POST" action="paquetes0.php">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" name="fonoplus" placeholder="Teléfono" maxlength="12" required="required" pattern="[0-9]*" title="Favor ingrese sólo números" /></div>
                                                    <div class="mail-enviado webinar" id="mail-enviado5w"></div>
                                                    <p><input type="hidden" name="consultaplus" value="5 Webinars" />
                                                        <input type="hidden" name="nomPais" value="Perú" />
                                                        <input type="hidden" name="type" value="webinar5" />
                                                        <input type="submit" class="btn btn-submit webinar" value="ENVIAR" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <a href="#anchor-top" class="scroll" id="scroll-top-link">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- Footer -->
    <?php require_once "footer.php"?>
