$ = jQuery.noConflict();

$(document).ready(function () {
  wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 1,
    mobile: true,
    live: true,
  });
  wow.init();

  $(".up").hide();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
      $(".up").fadeIn(1000);
    } else {
      $(".up").fadeOut(1000);
    }
  });

  $(".up").click(function () {
    $("body, html").animate({
      scrollTop: 0,
    });
  });

  $(".buy").click(function () {
    $(".form-pay").slideToggle();
  });

  $(".transferencia").click(function () {
    $(".btn-transferencia").addClass("btn-activo");
    $(".btn-paypal").removeClass("btn-activo");
    $(".txt-pagos").slideToggle();
    $("#enviar").prop("disabled", true);
  });

  $(".btn-paypal").click(function () {
    $("#enviar").prop("disabled", false);
    $(".btn-transferencia").removeClass("btn-activo");
    $(".btn-paypal").addClass("btn-activo");
    $(".txt-pagos").hide();
    $("#enviar").prop("disabled", false);
  });

  $(".trans-mensual").click(function () {
    $(".btn-transferencia.mensual").addClass("btn-activo");
    $(".btn-paypal.mensual").removeClass("btn-activo");
    $(".t-pagos").slideToggle();
    $("#enviarMeses").prop("disabled", true);
  });

  $(".btn-paypal.mensual").click(function () {
    $(".btn-transferencia.mensual").removeClass("btn-activo");
    $(".btn-paypal.mensual").addClass("btn-activo");
    $(".t-pagos").hide();
    $("#enviarMeses").prop("disabled", false);
  });

  $(".btn-price.plus").click(function () {
    $(".box-modal-plus").hide();
    $("#mail-enviado2").hide();
    $("#mail-enviado3").hide();
    $("#mail-enviado5").hide();
    $(".form-plus").show();
    $(".btn-submit").show();
  });

  $(".btn-price.webinar").click(function () {
    $(".box-modal-plus").hide();
    $("#mail-enviado2w").hide();
    $("#mail-enviado3w").hide();
    $("#mail-enviado5w").hide();
    $(".form-plus").show();
    $(".btn-submit.webinar").show();
  });

  $(".btn-price.mas").click(function () {
    $(".box-modal-plus").show();
    $(".btn-price.plus").show();
    $(".mail-enviado").hide();
    $(".form-plus").hide();
  });

  function txtSelect(p) {
    var select = p;
    value = select.value;
    var text = select.options[select.selectedIndex].innerText;
    var value = text.split(" ");
    return value[0];
  }

  function txtMes(num) {
    var arrnum = [
      "cero",
      "un",
      "dos",
      "tres",
      "cuatro",
      "cinco",
      "seis",
      "siete",
      "ocho",
      "nueve",
    ];
    return arrnum[num];
  }

  function paypal(dl) {
    var arrpaypal = [
      "cero",
      "JFKTE4U6XXN5C",
      "MN5PY245EDQLU",
      "M6N8D27ANKCLS",
      "LGA2Q2QYB4UDC",
      "LEMMGSFVPNFZ8",
      "FJGKL42T3QD3Q",
      "X2YUVPDY923FL",
      "QKREVUYKQXGPE",
    ];
    return arrpaypal[dl];
  }

  function paypalDolars(pdl) {
    var arrpaypalDolars = ["0", "70", "63", "56", "50", "46", "41", "35", "33"];
    return arrpaypalDolars[pdl];
  }

  function monedaCL(mon) {
    var arrmonCL = [
      "0",
      "60.000",
      "54.000",
      "48.000",
      "43.000",
      "39.000",
      "30.000",
    ];
    return arrmonCL[mon];
  }

  function monedaBR(mon) {
    var arrmonCL = ["0", "295", "265", "240", "215", "195", "148"];
    return arrmonCL[mon];
  }

  function monedaAR(mon) {
    var arrmonCL = ["0", "4000", "3580", "3230", "2950", "2600", "2390"];
    return arrmonCL[mon];
  }

  function monedaPE(mon) {
    var arrmonCL = ["0", "196", "175", "155", "140", "125", "98"];
    return arrmonCL[mon];
  }

  function monedaMX(mon) {
    var arrmonCL = ["0", "70", "63", "56", "50", "45", "35"];
    return arrmonCL[mon];
  }

  function monedaCO(mon) {
    var arrmonCL = [
      "0",
      "220.000",
      "195.000",
      "175.000",
      "160.000",
      "145.000",
      "110.000",
    ];
    return arrmonCL[mon];
  }

  function porceDscto(des) {
    var dsctoMon = ["0", "10", "15", "20", "25", "50"];
    return dsctoMon[des];
  }

  function planesGenes(pl) {
    var arrplanesGenes = {
      "Plan Genes 1 mes": "33",
      "Plan Genes 2 meses": "34",
      "Plan Genes 3 meses": "35",
      "Plan Genes 4 meses": "36",
      "Plan Genes 5 meses": "37",
      "Plan Genes 6 meses": "38",
      "Plan Genes 7 meses": "39",
      "Plan Genes 8 meses": "40",
    };
    return arrplanesGenes[pl];
  }

  function planesGenesId(plg) {
    var arrplanesGenesId = {
      "1": "Plan Genes 1 mes",
      "2": "Plan Genes 2 meses",
      "3": "Plan Genes 3 meses",
      "4": "Plan Genes 4 meses",
      "5": "Plan Genes 5 meses",
      "6": "Plan Genes 6 meses",
      "7": "Plan Genes 7 meses",
      "8": "Plan Genes 8 meses",
    };
    return arrplanesGenesId[plg];
  }

  $("#suscripcion").click(function () {
    $("#box-suscripcion").slideToggle();
    document.getElementById("box-suscripcion").scrollIntoView();
  });

  $("#pagar_mes").click(function () {
    $("#box-suscripcion-meses").slideToggle();
    document.getElementById("box-suscripcion-meses").scrollIntoView();
  });

  $(".txt-cupon").keyup(function () {
    couponButton = $(".btn-cupon");
    if ($(this).val() == "") {
      couponButton.hide();
    } else {
      couponButton.show();
    }
  });

  $(".btn-cupon").click(function () {
    var cupon = $(".txt-cupon").val();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/planes.php",
      data: { cupon: cupon },
      async: true,
      success: function (datos) {
        if (datos > 0) {
          $(".valor-dscto").empty();
          $(".msj-cupon-error").hide();
          $(".msj-cupon-acepted").show();
          $(".valor-dscto").append(datos);
          $(".dscto-plan").val(datos);
        } else {
          $(".msj-cupon-acepted").hide();
          $(".msj-cupon-error").show();
          $("#cupon").val("");
        }
      },
    });
  });

  function limpiaFormMeses() {
    $("#form_meses")[0].reset();
    $("#formMeses")[0].reset();
    $("#pagar_mes").hide();
    $(".msj-cupon-acepted").hide();
    $(".msj-cupon-error").hide();
    $(".valor-dscto").empty();
    $(".dscto-plan").val("");
    $(".btn-cupon").hide();
  }

  function limpiaFormPlanes() {
    $("#form_cargos")[0].reset();
    $("#formplanes")[0].reset();
    $(".msj-cupon-acepted").hide();
    $(".msj-cupon-error").hide();
    $(".btn-cupon").hide();
  }

  var url = location.pathname;
  //var busqueda = location.search;
  var palabra = "cupon-de-descuento";

  var index = url.indexOf(palabra);
  //alert("as=>"+url+"I=>"+index);

  if (index > 0) {
    //alert("as");
    var dsctoCupon = "";
    var dscto2 = $(".cuponDscto").val();
    if (dscto2 == "GANAIIHSINBGENES") {
      var dsctoCupon = 1; //6;
    } else {
      var dsctoCupon = $(".dscto-cupon").val();
    }
    var select = document.getElementById("cargos"); // alert("CUP1=>"+dsctoCupon)
    var select2 = $("#cargos").val(); //document.getElementById("cargos");
    var pais = $(".phonePais").val();

    if (pais == "cl") {
      var valorMoney = monedaCL(dsctoCupon);
    }
    if (pais == "br") {
      var valorMoney = monedaBR(dsctoCupon);
    }
    if (pais == "ar") {
      var valorMoney = monedaAR(dsctoCupon);
    }
    if (pais == "pe") {
      var valorMoney = monedaPE(dsctoCupon);
    }
    if (pais == "mx") {
      var valorMoney = monedaMX(dsctoCupon);
    }
    if (pais == "co") {
      var valorMoney = monedaCO(dsctoCupon);
    }

    $("#cargos").removeProp("selected");
    if (dscto2 == "GANAIIHSINBGENES") {
      var valorDolar = paypalDolars(7);
      var porcDscto = porceDscto(5);
      //var dsctoCupon = 1;
    } else {
      var valorDolar = paypalDolars(dsctoCupon);
      var porcDscto = porceDscto(dsctoCupon); //15;
    }
    var valorDsctoDolar = Math.round(
      valorDolar - valorDolar * (porcDscto / 100)
    );

    var valor_select = dsctoCupon + "-" + valorMoney;

    if (valor_select == 0) {
      $("#mescargo").val("");
      $("#valorcargo").val("");
      return;
    }
    var value = valor_select.split("-");
    var numeromes = value[0];
    var monLocal = value[1];
    var moneda = $(".monedaLocal").val();
    var ttt = monLocal * (porcDscto / 100);
    var valorDsctoLocal = monLocal - monLocal * (porcDscto / 100);
    $('#cargos > option[value="' + valor_select + '"]').attr(
      "selected",
      "selected"
    );

    var select = $('select[name="cargos"] option:selected').text();

    if (dsctoCupon > 1) {
      var tmes = "meses";
    } else {
      var tmes = "mes";
    }
    var valorPaypal = paypalDolars(dsctoCupon);
    $(".mes-posicion").val(dsctoCupon);
    $(".select-posicion").val(select);
    $(".valor-plan").val(valorPaypal);

    var pgId = planesGenesId(dsctoCupon);
    var proId = planesGenes(pgId);

    $(".planesId").val(pgId);
    $(".productId").val(proId);

    if (dscto2 == "GANAIIHSINBGENES") {
      $("#mescargo").val(2 + " " + "meses");
    } else {
      $("#mescargo").val(dsctoCupon + " " + tmes);
    }
    $("#valorcargo").val(moneda + " " + value[1] + " / mes");
    $(".valor_dscto").val(moneda + " " + valorDsctoLocal.toFixed(3) + " / mes");

    $(".txt-licencias").hide();
    $(".nomcargo").append(select);
    $("#valorcargo").addClass("valor-dscto");
    $(".custom-select.cargos_programa").addClass("valor-dscto-disabled");
    $(".txt-compra").show();
    $(".select-meses").removeClass("seleccionado");
    $(".meses-valor").removeClass("seleccionado");
    //limpiaFormMeses();
    $(".cargos_programa").addClass("seleccionado");
    $(".mes_cargo").addClass("seleccionado");
    $(".valor_cargo").addClass("seleccionado");
    $(".valor_dscto").addClass("seleccionado");
    $("#suscripcion").hide();

    return;
  }

  $("#cargos").change(function () {
    $(".select-meses").removeClass("seleccionado");
    $(".meses-valor").removeClass("seleccionado");
    limpiaFormMeses();
    $(".cargos_programa").addClass("seleccionado");
    $(".mes_cargo").addClass("seleccionado");
    $(".valor_cargo").addClass("seleccionado");
    $("#suscripcion").show();
    $("#box-suscripcion-meses").hide();

    var select = document.getElementById("cargos");
    var text = select.options[select.selectedIndex].innerText;

    $(".cargos_programa option").addClass("formato-select");

    var valor_select = $(this).val();

    if (valor_select == 0) {
      $("#mescargo").val("");
      $("#valorcargo").val("");
      return;
    }

    var nummes = document.getElementById("cargos");
    var value = valor_select.split("-");
    var numes = value[0];
    var txtnum = txtMes(numes);
    var btn_paypal = paypal(numes);

    if (numes > 1) {
      var tmes = "meses";
    } else {
      var tmes = "mes";
    }
    var valorPaypal = paypalDolars(numes);
    $(".mes-posicion").val(numes);
    $(".select-posicion").val(text);
    $(".valor-plan").val(valorPaypal);

    var pgId = planesGenesId(numes);
    var proId = planesGenes(pgId);

    $(".planesId").val(pgId);
    $(".productId").val(proId);

    var moneda = $(".monedaLocal").val();

    $("#mescargo").val(numes + " " + tmes);
    $("#valorcargo").val(moneda + " " + value[1] + " / mes");
    $(".txt-licencias").hide();
    $(".nomcargo").empty();
    $(".nmes").empty();
    $(".txt-compra").show();
    $(".nomcargo").append(text);
    $(".nmes").append(txtnum + " " + tmes);

    return false;
  });

  $("#meses").change(function () {
    $(".cargos_programa").removeClass("seleccionado");
    $(".valor_cargo").removeClass("seleccionado");
    $(".mes_cargo").removeClass("seleccionado");
    limpiaFormPlanes();
    $("#suscripcion").hide();
    $("#box-suscripcion").hide();
    $(".txt-compra").hide();
    $(".txt-licencias").show();
    $(".select-meses").addClass("seleccionado");
    $(".meses-valor").addClass("seleccionado");
    $("#pagar_mes").show();

    $(".select-meses option").addClass("formato-select");

    var valor_select = $(this).val();
    var nummes = document.getElementById("meses");
    var value = valor_select.split("-");
    var numeromes = value[0];
    var pgId = planesGenesId(numeromes);
    var proId = planesGenes(pgId);

    var moneda = $(".monedaLocal").val();
    $(".planesIdMes").val(pgId);
    $(".productIdMes").val(proId);
    $("#mesvalor").val(moneda + " " + value[1] + " / mes");

    var valorPaypalMensual = paypalDolars(numeromes);
    $(".mes-posicion-mensual").val(numeromes);
    $(".select-posicion-mensual").val("");
    $(".valor-plan-mensual").val(valorPaypalMensual);

    return false;
  });
});

// Gets the selected country based on the pathname of the current URL
function getCountry(valorPais, namePais) {
  var country = namePais; // Default
  var localization = valorPais; // Default
  var fullLocation = window.location.href;
  var pathname = [];
  if (pathname.indexOf("pt_BR") >= 0) {
    country = "Brazil";
    localization = "pt";
  } else if (pathname.indexOf("es_PE") >= 0) {
    country = "Peru";
  } else if (pathname.indexOf("es_AR") >= 0) {
    country = "Argentina";
  } else if (pathname.indexOf("es_CO") >= 0) {
    country = "Colombia";
  } else if (pathname.indexOf("es_MX") >= 0) {
    country = "Mexico";
  }
  window.genesCountry = country;
}

$(document).ready(function () {
  var valorPais = $(".phonePais").val();
  var namePais = $(".namePais").val();
  getCountry(valorPais, namePais);

  $('[name = "phone"]').intlTelInput({
    onlyCountries: ["ar", "br", "cl", "us", "pe", "co", "mx"],
    preferredCountries: ["cl"],
    nationalMode: true,
  });

  $(".cargos_programa option")
    .filter(function () {
      return $(this).val() == namePais;
    })
    .prop("selected", true);

  $('[name = "country"]').on("change", function () {
    $('[name = "phone"]').intlTelInput(
      "setCountry",
      getCountryCode($(this).val())
    );
  });

  $('[name = "phone"]').intlTelInput(
    "setCountry",
    getCountryCode(window.genesCountry)
  );
  setCountryMask($('[name = "phone"]').intlTelInput("getSelectedCountryData"));

  $('[name = "phone"]').on("countrychange", function (e, countryData) {
    setCountryMask($(this).intlTelInput("getSelectedCountryData"));
  });
});

function getCountryCode(e) {
  switch (e) {
    case "Argentina":
      var country = "ar";
      break;

    case "Brazil":
      var country = "br";
      break;

    case "Peru":
      var country = "pe";
      break;

    case "Colombia":
      var country = "co";
      break;

    case "Mexico":
      var country = "mx";
      break;

    default:
      var country = "pe";
      break;
  }

  return country;
}

function setCountryMask(country) {
  switch (country["iso2"]) {
    case "ar":
      $('[name = "phone"]').inputmask({ mask: "+54 999[999]-99[99]-9999" });
      break;

    case "br":
      $('[name = "phone"]').inputmask({ mask: "+55 (99) 9999[9]-9999" });
      break;

    case "us":
      $('[name = "phone"]').inputmask({ mask: "+1 999-999-9999" });
      break;

    case "pe":
      $('[name = "phone"]').inputmask({ mask: "+51 (99[9]) 999[9]-9999" });
      break;

    case "co":
      $('[name = "phone"]').inputmask({ mask: "+57 999[99]-999-9999" });
      break;

    case "mx":
      $('[name = "phone"]').inputmask({ mask: "+52 99[9]-999[9]-9999" });
      break;

    case "cl":
      $('[name = "phone"]').inputmask({ mask: "+56 99 999 9999" });
      break;

    default:
      $('[name = "phone"]').inputmask("remove");
      break;
  }
}

$(function () {
  $("#formplanesdscto").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#formplanesdscto").serialize();
    $(".cargando.cargo").show();
    $.ajax({
      type: "POST",
      url: "../../wp-content/themes/landing/suscripcion-dscto.php",
      data: datos,
      async: true,
      success: function (datos) {
        window.location = datos;
      },
    });
  });
});

function destroyModal() {
  $(".modal").modal("hide");
  $(".modal-backdrop").remove();
  $("body").removeClass("modal-open");
}

$(function () {
  $("#formplanes").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#formplanes").serialize();
    $(".cargando.cargo").show();
    $.ajax({
      type: "POST",
      url: "suscripcion.php",
      data: datos,
      async: true,
      success: function (datos) {
        window.location = datos;
      },
    });
  });
});

$(function () {
  $("#formMeses").on("submit", function (e) {
    e.preventDefault();
    $(".cargando").show();
    var datos = $("#formMeses").serialize();

    $.ajax({
      type: "POST",
      url: "suscripcionmeses.php",
      data: datos,
      async: true,
      success: function (datos) {
        window.location = datos;
      },
    });
  });
});

$(function () {
  $("#form_plus2").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus2").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit").hide();
          $("#mail-enviado2").show();
          $("#mail-enviado2").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit").hide();
          $("#mail-enviado2").show();
          $("#mail-enviado2").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_plus3").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus3").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit").hide();
          $("#mail-enviado3").show();
          $("#mail-enviado3").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit").hide();
          $("#mail-enviado3").show();
          $("#mail-enviado3").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_plus5").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus5").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit").hide();
          $("#mail-enviado5").show();
          $("#mail-enviado5").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit").hide();
          $("#mail-enviado5").show();
          $("#mail-enviado5").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_plus2w").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus2w").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado2w").show();
          $("#mail-enviado2w").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado2w").show();
          $("#mail-enviado2w").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_plus3w").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus3w").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado3w").show();
          $("#mail-enviado3w").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado3w").show();
          $("#mail-enviado3w").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_plus5w").on("submit", function (e) {
    e.preventDefault();
    var datos = $("#form_plus5w").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "../../wp-content/themes/landing/procesaMail.php",
      data: datos,
      async: true,
      success: function (datos) {
        if (datos == 1) {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado5w").show();
          $("#mail-enviado5w").append("Mail enviado exitosamente!!");
          limpiarForm();
        } else {
          $(".btn-submit.webinar").hide();
          $("#mail-enviado5w").show();
          $("#mail-enviado5w").append("Error al enviar email");
          limpiarForm();
        }
      },
    });
  });
});

$(function () {
  $("#form_prueba").on("submit", function (e) {
    e.preventDefault();
    $(".cargando.cargo").show();
    var datos = $("#form_prueba").serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "//www.genesnextstep.com/online/contact/send",
      data: datos,
      async: true,
      success: function (datos) {
        var resp = JSON.parse(JSON.stringify(datos));
        if (resp["success"] == true) {
          /*$(".cargando.cargo").hide();
          $('.btn-accede-genes').hide();
          $('.envia-prueba').show();*/
          window.location = resp["redirect"];
        }
        if (resp["success"] == false) {
          $(".cargando.cargo").hide();
          $(".envia-prueba").show();
          $(".btn-accede-genes").hide();
          $(".envia-prueba").append(resp["message"]);
          limpiarFormPrueba();
        }
      },
    });
  });
});

function limpiarFormPrueba() {
  $("#form_prueba")[0].reset();
}

function limpiarForm() {
  $("#form_plus2")[0].reset();
  $("#form_plus2w")[0].reset();
  $("#form_plus3")[0].reset();
  $("#form_plus3w")[0].reset();
  $("#form_plus5")[0].reset();
  $("#form_plus5w")[0].reset();
}
