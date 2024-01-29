//(function($) {
$(document).ready(function () {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

//})(jQuery); // End of use strict
});

/////////////// DESEAS MEJORAR COMO EMPRESA /////////
/*
$(document).ready(function(){
	$('form.ajax2').submit(function (e){
		e.preventDefault();
		var $form=$(this);
		$form.find('[type="submit"]').prop('disabled',true);
		$.ajax({
			url:"contactoempresa.php",
			type:'post',
			data:$form.serialize()
		}).done(function(data){
		 $date= data;
		if($date == 'exito'){
			$('#contacto').modal('hide');
			swal('Mensaje enviado','Enviado','success');
		}else{
			$('#contacto').modal('hide');
			swal('Error de Envio','Vuelva intentarlo mas tarde','error');
			}
		})
	});
});*/