/*********************Iniciamos WOW**********************/
    new WOW().init();
/*********************Iniciamos SmoothScroll**********************/
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        offset:80
    });
/*---------------------------------OCULTAR Y MOSTRAR BOTON IR ARRIBA----------------------------------*/
$(function () {
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            $(".ir-arriba").fadeIn();
        } else {
            $(".ir-arriba").fadeOut();
        }
    });
});
/*---------------------------------CABECERA ANIMADA----------------------------------*/
$(window).scroll(function () {

    var nav = $('.encabezado');
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        nav.addClass("fondo-menu");
    } else {
        nav.removeClass("fondo-menu");
    }
});

$( document ).ready(function() {
    //console.log( "ready!" );
    
    $('[data-toggle="tooltip"]').tooltip({
        trigger:'hover'
    })
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoWidth:false,
        navText:['<i class="fas fa-arrow-circle-left" title="Anterior"></i>',
        '<i class="fas fa-arrow-circle-right" title="Siguiente"></i>'],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            500:{
                items:2,
                margin:20
            },
            800:{
                items:3,
                margin:20
            },
            1000:{
                items:4,
                margin:20
            }
        }
    });
});

