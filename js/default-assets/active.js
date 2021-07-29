(function ($) {
    'use strict'; var dento_window = $(window); dento_window.on('load', function () { $('#preloader').fadeOut('1000', function () { $(this).remove(); }); }); if ($.fn.classyNav) { $('#dentoNav').classyNav(); }

    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.welcome-slides'); welcomeSlider.owlCarousel({ items: 1, loop: true, autoplay: true, smartSpeed: 1500, nav: true, navText: ["<i class='ti-angle-left'</i>", "<i class='ti-angle-right'</i>"], dots: true, animateIn: 'fadeIn', animateOut: 'fadeOut' })
        welcomeSlider.on('translate.owl.carousel', function () { var layer = $("[data-animation]"); layer.each(function () { var anim_name = $(this).data('animation'); $(this).removeClass('animated ' + anim_name).css('opacity', '0'); }); }); $("[data-delay]").each(function () { var anim_del = $(this).data('delay'); $(this).css('animation-delay', anim_del); }); $("[data-duration]").each(function () { var anim_dur = $(this).data('duration'); $(this).css('animation-duration', anim_dur); }); welcomeSlider.on('translated.owl.carousel', function () { var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]"); layer.each(function () { var anim_name = $(this).data('animation'); $(this).addClass('animated ' + anim_name).css('opacity', '1'); }); });
    }

    if ($.fn.owlCarousel) { $(".testimonials-slides").owlCarousel({ items: 1, margin: 0, loop: true, autoplay: true, smartSpeed: 700, nav: true, navText: ["<i class='arrow_carrot-left'</i>", "<i class='arrow_carrot-right'</i>"], dots: false }); }

    if ($.fn.tooltip) { $('[data-toggle="tooltip"]').tooltip(); }
    if (dento_window.width() > 767) { new WOW().init(); }
    if ($.fn.counterUp) { $('.counter').counterUp({ delay: 10, time: 2000 }); }
    
    if ($.fn.magnificPopup) { $('.video-play-button').magnificPopup({ type: 'iframe' }); $('.gallery_img').magnificPopup({ type: 'image', gallery: { enabled: true }, removalDelay: 300, mainClass: 'mfp-fade', preloader: true }); }
    if ($.fn.imagesLoaded) { $('.dento-portfolio').imagesLoaded(function () { $('.portfolio-menu').on('click', 'button', function () { var filterValue = $(this).attr('data-filter'); $grid.isotope({ filter: filterValue }); }); var $grid = $('.dento-portfolio').isotope({ itemSelector: '.single_gallery_item', percentPosition: true, masonry: { columnWidth: '.single_gallery_item' } }); }); }
    $('.portfolio-menu button.btn').on('click', function () { $('.portfolio-menu button.btn').removeClass('active'); $(this).addClass('active'); })
    if ($.fn.jarallax) { $('.jarallax').jarallax({ speed: 0.2 }); }
    if ($.fn.scrollUp) { dento_window.scrollUp({ scrollSpeed: 2000, scrollText: '<i class="arrow_up"</i>' }); }
    dento_window.on('scroll', function () { if (dento_window.scrollTop() > 40) { $('.main-header-area').addClass('sticky'); } else { $('.main-header-area').removeClass('sticky'); } }); if ($.fn.barfiller) { $('#bar1').barfiller({ barColor: '#00aeef' }); $('#bar2').barfiller({ barColor: '#00aeef' }); $('#bar3').barfiller({ barColor: '#00aeef' }); }
})(jQuery);

// function preloader() {
// 	if (document.getElementById) {
// 		document.getElementById("preload-01").style.background = "url('/nikhilwp/wp-content/themes/dento/img/core-img') no-repeat -9999px -9999px";
// 		document.getElementById("preload-02").style.background = "url(http://domain.tld/image-02.png) no-repeat -9999px -9999px";
// 		document.getElementById("preload-03").style.background = "url(http://domain.tld/image-03.png) no-repeat -9999px -9999px";
// 	}
// }
// function addLoadEvent(func) {
// 	var oldonload = window.onload;
// 	if (typeof window.onload != 'function') {
// 		window.onload = func;
// 	} else {
// 		window.onload = function() {
// 			if (oldonload) {
// 				oldonload();
// 			}
// 			func();
// 		}
// 	}
// }
// addLoadEvent(preloader);

$(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({'overflow':'visible'});
  })