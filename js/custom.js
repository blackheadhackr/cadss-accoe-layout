// Home Slider 

$('.home-slider-content').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    
    dots:false,
    navText : ["<i class='mdi mdi-chevron-left'></i>","<i class='mdi mdi-arrow-right-thin'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false
          
        }
    }
})
  
// Cousres Slider

$('.courses-content').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout: 3000,
    dots:true,
    nav: false,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
        }
    }
})

$( ".owl-next").html('<i class="fas fa-chevron-right"></i>');
$(".owl-prev").html('<i class="fas fa-chevron-left"></i>');

// Testimonial Slider

$('#testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout: 3000,
    dots:true,
    nav: false,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
        }
    }
})

