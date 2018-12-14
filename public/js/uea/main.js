/*============ Template Introduction=====================
Template Name: Envoy App Landing Page
Version: 1.0
Author: ParcelTheme
Template URI: http://codecraver.com/theme/envoy
License URI:  https://themeforest.net/user/parceltheme/portfolio
================================================================*/
/*

/*================================================
[  Table of contents  ]
================================================

::  preloader
::  header slider
::  Screenshot slider
::  Team slider
::  Testimonial slider
::  collapse 
::  counter 
::  Sticky Nav
::  Scroll Spy 
::  Smooth Scroll
::  YTPlayer
::  Typed js


======================================
[ End table content ]
======================================*/
(function ($) {
    //preloader
    
    $(window).on('load', function () {
        $('.preloader').fadeOut(500);
    });

    // header-slider js here
    $('.header-slider').each(function () {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : true,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 500;

        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 1
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 1
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 1
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            smartSpeed: 700,
            navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
            autoplay: $autoplay,
        });
    });

    // screenshot-slider js here
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 4,
        centeredSlides: true,
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 299,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },

        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 2,
            }
        },
    });


    // team-slider js here
    $('.team-slider').each(function () {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 4,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : true,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 0;

        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 2
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 3
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 4
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            smartSpeed: 700,
            navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
            autoplay: $autoplay,
        });
    });

    // testimonial-slider js here
    $('.testimonial-slider').each(function () {

        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : true,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 300;

        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 1
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 1
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 1
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            smartSpeed: 700,
            navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
            autoplay: $autoplay,
        });
    });
    
    //collapse js here
    $('.faq-section .collapse').collapse();

    //counter js here
    $('.counter').counterUp({
        delay: 20,
        time: 1000
    });

    //Sticky Nav
    $(".envoy-nav").sticky({
        topSpacing: 0
    });

    //Scroll Spy        
    $('body').scrollspy({
        target: '.envoy-nav'
    })
    //Smooth Scroll
    smoothScroll.init();
	
	// YTPlayer
	$("#bgndVideo").YTPlayer({
		showControls:false,
		autoPlay:true,
		mute:true,
		startAt:0,
		opacity:1
	});
	
	//Typed js
	if( $('body.index-four').length ){
		var typed = new Typed('#typed', {
			strings: ['Showcase^200 app', 'Best Theme^500 Ever!'],
			typeSpeed: 50,
			backSpeed: 20,
			backDelay: 2500,
			startDelay: 500,
			cursorChar: '_',
			loop: true
		});
	}
   
    
})(jQuery);