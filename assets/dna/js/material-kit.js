

var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized = false;

$(document).ready(function(){
    $('.scroll-to-tab a').click(function(){
        if(! ($('#fases-genes').length) && !$(this).hasClass('no-scroll')) {
            if ((window.location.pathname === './online/profile') && (($(this).attr('href')) === 'javascript:void(0)')) {
                window.location.href = window.location.origin + '/online';
            } else {
               window.location.href = '..'+($(this).attr('href'));
            }

        }

        if ( $(this).hasClass('scroll-to-fases') ) {
            $('html, body').animate({ scrollTop: $('#fases-genes').position().top - 70 }, 1000 );
        } else if ((!$(this).hasClass('no-scroll')) && (typeof ($('#itens-menu').position()) != 'undefined')) {
            $('html, body').animate({ scrollTop: $('#itens-menu').position().top - 70 }, 1000 );
        }
    });

    $('.highlight-item').click(function() {
        if($(this).hasClass('content-blocked') || $(this).find('a').first().attr('href') == "javascript:void(0);" || $(this).hasClass('test-user') && ($(this).find('a').first().attr('data-area') == "video" || $(this).find('a').first().attr('data-area') == "outplacement")) return true;
        $(this).addClass('clicked');
    });
    //-- FIM CLICK FASES

    //--SCROLL EASE
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top -70}, 800);
    });

    // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
    $.material.init();

    //  Activate the Tooltips
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

    // Activate Datepicker
    if($('.datepicker').length != 0){
        $('.datepicker').datepicker({
             weekStart:1
        });
    }

    // Check if we have the class "navbar-color-on-scroll" then add the function to remove the class "navbar-transparent" so it will transform to a plain color.
    if($('.navbar-color-on-scroll').length != 0){
        $(window).on('scroll', materialKit.checkScrollForTransparentNavbar)
    }

    // Activate Popovers
    $('[data-toggle="popover"]').popover();

    // Active Carousel
	$('.carousel').carousel({
      interval: 4000
    });
});

materialKit = {
    misc:{
        navbar_menu_visible: 0
    },

    checkScrollForTransparentNavbar: debounce(function() {
            if($(document).scrollTop() > 260 ) {
                if(transparent) {
                    transparent = false;
                    $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $('.navbar-color-on-scroll').addClass('navbar-transparent');
                }
            }
    }, 17),

    initSliders: function(){
        // Sliders for demo purpose
        $('#sliderRegular').noUiSlider({
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });

        $('#sliderDouble').noUiSlider({
            start: [20, 60] ,
            connect: true,
            range: {
                min: 0,
                max: 100
            }
        });
    }
}


var big_image;

materialKitDemo = {
    checkScrollForParallax: debounce(function(){
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css({
            'transform':'translate3d(0,' + oVal +'px,0)',
            '-webkit-transform':'translate3d(0,' + oVal +'px,0)',
            '-ms-transform':'translate3d(0,' + oVal +'px,0)',
            '-o-transform':'translate3d(0,' + oVal +'px,0)'
        });

    }, 6)

}
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
		if (immediate && !timeout) func.apply(context, args);
	};
};







// side menu controls
function toogleNav() {
  if ( $('#side-menu').hasClass('active') ) {
    toggleProfile(true);
    $('#side-menu').removeClass('active')
    $('#menu-overflow').fadeOut(100)
    $('body').css('overflow-y', 'visible')
  }
  else {
    toggleProfile(true);
    $('#side-menu').addClass('active')
    $('#menu-overflow').fadeIn(100)
    $('body').css('overflow-y', 'hidden')
  }
}

function closeNav() {
  if ( $('#side-menu').hasClass('active') ) {
    toggleProfile(true);
    $('#side-menu').removeClass('active')
    $('#menu-overflow').fadeOut(100)
    $('body').css('overflow-y', 'visible')
  }
}

function toggleProfile(close = null) {
    profile = $('#perfil');
    if(close!=null) {
        profile.removeClass('open');
    }
    else {
        if ( profile.hasClass('open') ) {
            closeNav();
            profile.removeClass('open');
        }
        else {
            closeNav();
            profile.addClass('open');
        }
    }
  }
  function infopersonal(){
    document.getElementById('info_personal').style.display="block";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function localiz(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="block";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function educacion(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="block";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function info_profesional(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="block";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function referencia_profesional(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="block";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function resumen_perfil(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="block";
    document.getElementById('book_candidato').style.display="none";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#20B85E";
    document.getElementById("boton_info7").style.backgroundColor= "#546C34";
    console.log('se hace bien');
}
function book_candidato(){
    document.getElementById('info_personal').style.display="none";
    document.getElementById('localiz').style.display="none";
    document.getElementById('educacion').style.display="none";
    document.getElementById('info_profesional').style.display="none";
    document.getElementById('referencia_profesional').style.display="none";
    document.getElementById('resumen_perfil').style.display="none";
    document.getElementById('book_candidato').style.display="block";
    document.getElementById("boton_info1").style.backgroundColor= "#546C34";
    document.getElementById("boton_info2").style.backgroundColor= "#546C34";
    document.getElementById("boton_info3").style.backgroundColor= "#546C34";
    document.getElementById("boton_info4").style.backgroundColor= "#546C34";
    document.getElementById("boton_info5").style.backgroundColor= "#546C34";
    document.getElementById("boton_info6").style.backgroundColor= "#546C34";
    document.getElementById("boton_info7").style.backgroundColor= "#20B85E";
    console.log('se hace bien');
}
