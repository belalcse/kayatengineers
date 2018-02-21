$(document).ready(function(){
    
  $(".owl-carousel").owlCarousel({
        loop:true,
        items:1,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:true
    });
    
    new WOW().init();
    
});