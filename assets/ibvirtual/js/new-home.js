$(document).ready(function() {
  // NOVA HOME - transitions de fases
  $('.box-fase').click(function() {
    box_fases_classes = $(this).first().parent().attr("class").split(' ')

    var fase_highlight_id = '';

    // TODO - Melhorar essa verificação
    if      ( $.inArray('cor1', box_fases_classes) == 1 ) { fase_highlight_id = 'fase1task1' }
    else if ( $.inArray('cor2', box_fases_classes) == 1 ) { fase_highlight_id = 'fase2task1' }
    else if ( $.inArray('cor3', box_fases_classes) == 1 ) { fase_highlight_id = 'fase3task1' }

    $('.task-check').removeClass('ativo')
    $('.fase_highlight').removeClass('ativo')
    $('.' + fase_highlight_id).addClass('ativo')

    toogleBoxFases( $(this), '#' + fase_highlight_id )
  })

  $('.task-check').click(function(e) {
    e.preventDefault();

    var this_box_fases = $(this).parents('.box-fases').first()

    var arr = $(this).attr('class').split(' ')
    arr.splice($.inArray('task-check', arr), 1)

    var fase_highlight_id = arr[0]

    $('.fases-highlight').removeClass('ativo')

    if ( this_box_fases.hasClass('ativo') ) {
      $('#' + fase_highlight_id).addClass('ativo')

      if (window.innerWidth < 992) $('html, body').stop().animate({ scrollTop: $('.fases-highlight.ativo#'+ fase_highlight_id).offset().top, }, 500);
    }
    else {
      toogleBoxFases( $(this).parent().siblings('.box-fase'), "#" + fase_highlight_id )
    }

    $('.task-check').removeClass('ativo')
    $(this).addClass('ativo')
  })

  // --> seta a height das fases baseado no número de tasks
  // USAR APENAS SE O NÚMERO DE TASKS EM CADA FASE AUMENTAR -> ALTERANATIVA: INCREMENTAR A HEIGHT DA CLASSE .fases EM 39px PARA CADA TASK NOVA
  // if ( window.innerWidth > 992 ) {
  //   var count = 0

  //   if ( $('.box-fases.cor1 .tasks-individual').length > count ) count = $('.box-fases.cor1 .tasks-individual').length
  //   if ( $('.box-fases.cor2 .tasks-individual').length > count ) count = $('.box-fases.cor2 .tasks-individual').length
  //   if ( $('.box-fases.cor3 .tasks-individual').length > count ) count = $('.box-fases.cor3 .tasks-individual').length

  //   $('.fases').height(318 + 39*count)
  // }
  // --> fim seta a height das fases baseado no número de tasks

  // --> seta cinza ao selecionar conteúdo chave e mostra o slider correto de acordo com o key-content que foi clicado

  // --> fim seta cinza ao selecionar conteúdo chave e mostra o slider correto de acordo com o key-content que foi clicado

  // owl carousel constructor e setas prev/next
$('#training-items.owl-carousel').owlCarousel({
    dots: false,
    autoHeight: false,
    items: 5,
    slideBy: 1,
    margin: 5,
    mouseDrag: false,
    touchDrag: false
  })

$('.owl-carousel.banner').owlCarousel({
    dots: true,
    autoHeight: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    items: 1,
    dotsEach: 1,
    slideBy: 1,
    margin: 5,
    mouseDrag: false,
    touchDrag: false,
    loop: true
  })

  $('.carousel-arrow.prev').click(function() {
    $(this).siblings('.owl-carousel').trigger('prev.owl.carousel')
  })

  $('.carousel-arrow.next').click(function() {
    $(this).siblings('.owl-carousel').trigger('next.owl.carousel')
  })

  $('.owl-carousel.scroll-to-tab').owlCarousel({
    dots: true,
    autoHeight: true,
    responsive: {
      0: {
        items: 1,
        dotsEach: 1,
        slideBy: 1,
        margin: 5,
        mouseDrag: true,
        touchDrag: true,
        loop: true
      },
      400: {
        items: 2,
        dotsEach: 2,
        slideBy: 2,
        margin: 10,
        mouseDrag: true,
        touchDrag: true,
        loop: true
      },
      650: {
        items: 3,
        dotsEach: 3,
        slideBy: 3,
        margin: 10,
        mouseDrag: true,
        touchDrag: true,
        loop: true
      },
      970: {
        items: 4,
        dotsEach: 4,
        slideBy: 4,
        margin: 15,
        mouseDrag: false,
        touchDrag: false,
        loop: false
      },
      1195: {
        items: 5,
        dotsEach: 5,
        slideBy: 5,
        margin: 15,
        mouseDrag: false,
        touchDrag: false,
        loop: false
      }
    }
  })
})

// função que alterna entre ativo e inativo as divs da home
function toogleBoxFases( box_fase, fase_highlight_id ) {
  var this_box_fases = box_fase.parent()

  if (!this_box_fases.hasClass('ativo')) {

    $('.box-fases').removeClass('ativo start')
    this_box_fases.addClass('ativo')

    $('.fases-highlight' + fase_highlight_id).addClass('ativo')

    $('.cor-fase1').addClass('cor-fase-1')
    $('.cor-fase2').removeClass('cor-fase-2')
    $('.cor-fase3').removeClass('cor-fase-3')

    if (window.innerWidth < 992) $('html, body').stop().animate({ scrollTop: $('.fases-highlight.ativo'+ fase_highlight_id).offset().top, }, 500);
  }
  else {
    $('.box-fases').removeClass('ativo')
    $('.box-fases').addClass('start')

    $('.fases-highlight').removeClass('ativo')
    $('.task-check').removeClass('ativo')

    setTimeout(function() {
      //$('.highlight-item').removeClass('clicked')
    }, 500)
  }
}