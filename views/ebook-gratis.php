<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Outplacement,Outplacement Chile,Outplacement Peru,Out placement,Reinserción laboral,Transición laboral,Despido,Desarrollo de carrera,Recolocación,Encontrar trabajo,Reinsertarme,trabajo,Busco trabajo,Pega,Nueva pega" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas de reinserción laboral - IBJOBCOACH</title>
    <link href="assets/dna/img/icono.png" rel="icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/ebook-landing.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/dna/css/styles.css?v=20200416">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" type="text/css" href="../assets/dna/css/SelectedPaises.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script src="https://www.paypal.com/sdk/js?client-id=ARK8p4mNEOCzV8ueL5hZpznAYZR7olrljkTfnf1YxP_IYHfga3raSdWN7NNQ222lNP8zVZ_jawI8dYwe">
        // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

    <header class="tarjeta-azul">
        <div class="container pt-2 pb-2">
            <div class="row w-75">
                <div class="col-xs-3 col-md-2 p-0">
                    <a href="../index.php">
                        <img src="../assets/dna/img/ibjobcoach.jpg" height="50" width="180" alt="DNA Outplacement">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="ebook-a ebook-display">
        <div class="justify-content-center" style="position: relative;top: 0;left: 0;">
            <div class="form-block text-center">
                <div class="row" id="descargar">
                    <div class="col-md-12 justify-content-center" id="contenedor">
                        <p class="text-form">Descargar eBook</p>
                        <br>
                        <form method="post" id="ebookform-grats" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="  NOMBRE">
                                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="  APELLIDO">
                                <input type="text" name="cargo" class="form-control" id="cargo" placeholder="  CARGO">
                                <input type="email" name="email" class="form-control" id="email" placeholder="  E-MAIL">
                                <select name="tipo" id="tipo" class="form-control">
                                    <option>Seleccione Tipo de Ibook</option>
                                    <option value="La Empleabilidad en tiempos de crisis">La Empleabilidad en tiempos de crisis</option>
                                </select>
                            </div>

                            <div class="d-flex flex-row">
                                <div class="col-lg-12 pl-0 pr-0 pr-md-3 justtify-contend-center">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <select name="country" class="form-control custom-select cargos_programa" required="required" id="try-pais">
                                                <option value="">Seleccione su País</option>
                                                <option value="Argentina">Argentina y Uruguay</option>
                                                <option value="Brazil">Brasil</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Peru" selected="">Perú</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Mexico">México</option>
                                                <option value="Otro">Otro</option>
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
                                                        <li class="country" data-dial-code="1" data-country-code="bo">
                                                            <div class="flag-box">
                                                                <div class="iti-flag bo"></div>
                                                            </div>
                                                            <span class="country-name">Otro</span>
                                                            <span class="dial-code">+1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="tel" name="phone" class="form-control" placeholder="Teléfono" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn-warning" style="border-radius: 10px; height: 40px; font-size:18px;">QUIERO MI EBOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="rodape">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12 bajar-imagen ">
                        <img src="../assets/dna/img/icono/logo_iboutplacement_good.png " width="100%">

                    </div>
                    <div class="col-md-1 col-sm-12">
                        <p class="titulo-rodape "></p>

                    </div>
                    <div class="col-md-2 col-sm-12 ">
                        <p class="titulo-rodape  min-margin"></p>
                        <ul class="itens-rodape text-center bold">
                            <li><a href="https://consultoriadecarrera.iboutplacement.com/" target="_blank ">Consultoria</a></li>
                            <li><a href="https://nuevaweb.iboutplacement.com/" target="_blank">IBOutplacement</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-12">
                        <p class="titulo-rodape "></p>

                    </div>

                    <div class="col-md-3 col-sm-12 telefone text-center">
                        <p class="text-center">
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
    </footer>
    <script>
        var pais = document.getElementById("pais");

        function handleClick(paises) {
            pais.value = paises.value;
        }
    </script>

<script src="js/ajax-ebook-gratis.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src='../assets/js/functions.js'></script>
    <script type='text/javascript' src='../assets/js/wow.min.js'></script>
    <script type='text/javascript' src='../assets/js/inputmask.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery.inputmask.min.js'></script>
    <script type='text/javascript' src='../assets/js/intlTelInput.js'></script>
    <script type='text/javascript' src='../assets/js/intlTelInput.min.js'></script>


</body>

</html>