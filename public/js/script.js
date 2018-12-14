// Slide Toggle
$(document).ready(function() {
    $("a.comment").click(function() {
        $(".post-comment").slideToggle();
        return false
    });
});

// ============< Event Part >===========

$(document).ready(function(){
    $('#event').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
});
    
// ============< story Part >===========
$(document).ready(function(){
    $('#story').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});

// ============< Suggested Alumni Part >===========
$(document).ready(function(){
    $('#sugestedAlumni').owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: false,
        // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
      })
});