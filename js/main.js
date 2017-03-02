(function ($) {
    "use strict";
 
 /*----------------------------
 jQuery MeanMenu
------------------------------ */
  // jQuery('nav#dropdown').meanmenu();  
  

/*---------------------------
 Feature class
 ----------------------------*/
  $(".feature-classes").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 3,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [992,3],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 What clients says
 ----------------------------*/
  $(".what-client-say").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:true,
    navigation:false,    
    items : 2,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [992,2],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Expert trainer
 ----------------------------*/
  $(".expert-trainer").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 3,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [991,2],
    itemsTablet: [767,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Online store
 ----------------------------*/
  $(".online-store").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 4,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [992,3],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Latest news
 ----------------------------*/
  $(".latest-news").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 3,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [992,3],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Logo showcase
 ----------------------------*/
  $(".logo-showcase").owlCarousel({
    autoPlay: true, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 5,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [992,3],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Happy clients
 ----------------------------*/
  $(".happy-clients").owlCarousel({
    autoPlay: true, 
    slideSpeed:2000,
    pagination:true,
    navigation:false,    
    items : 1,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [992,1],
    itemsTablet: [768,1],
    itemsMobile : [480,1],
  });
/*---------------------------
 Related classes
 ----------------------------*/
  $(".related-classes").owlCarousel({
    autoPlay: true, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 3,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [992,2],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Related product
 ----------------------------*/
  $(".related-product").owlCarousel({
    autoPlay: true, 
    slideSpeed:2000,
    pagination:false,
    navigation:true,    
    items : 3,
    /* transitionStyle : "fade", */    /* [This code for animation ] */
    navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [992,2],
    itemsTablet: [768,2],
    itemsMobile : [480,1],
  });
/*---------------------------
 Scroll to top
 ----------------------------*/
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').on('click',function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
/*-------------------------------------
Jquery Fixed Header Menu 
-----------------------------------*/
  $(window).scroll(function() {
    var s = $("#sticker");
    var w = $(".wrapper");
    //alert(pos.top);
    var windowpos = $(window).scrollTop();
    if(windowpos > 0){
      s.addClass("stick");
      var h;
      if($(window).width() > 767){
        h = $(".header-top-area").outerHeight();
      }else{
        $(".mean-container .mean-bar").css('position', 'fixed');
        h = $(".mean-bar").outerHeight();
      }
      w.css('padding-top', h+"px");
    } else {
      $(".mean-container .mean-bar").css('position', 'relative');
      s.removeClass("stick");
      w.css('padding-top', 0);
    }
  });
/*-------------------------------------
Jquery Mobile menu link 
-----------------------------------*/
  $('nav#dropdown').meanmenu({
    siteLogo: "<a href='index.html'><img src='img/mobile-logo.png' /></a>"
  });  
/*---------------------------
 Counter Up
 ----------------------------*/
 if($('.counter').length){
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });
}
/*---------------------------
 Wow script
 ----------------------------*/
  new WOW().init();

/*---------------------
   fancybox
--------------------- */  
  $('.fancybox').fancybox();
  
/*---------------------------
 Product Zoom script
 ----------------------------*/
  $(document).ready(function(){
    $('.ex').zoom();
  });

/*----------------------------
  Product Count added spinner
------------------------------ */
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
    });
    $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  }); 

/*-------------------------------------
  jQuery Search Box customization
-------------------------------------*/
  $(".header-top-search.search-box").on('click', '.search-button', function(event){
    event.preventDefault();
    var v = $(this).prev('.search-text');
  if(v.hasClass('active')){
    v.removeClass('active');
    }else{
      v.addClass('active');
    }
    return false;
  }); 

/*-------------------------------------
  jQuery for isotope initialization
-------------------------------------*/
  $(window).load(function(){
      var $container = $('.portfolioContainer');
      $container.isotope({
          filter: '*',
          animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
          }
      });     
      $('.isotop-classes-tab a').on('click',function(){
          $('.isotop-classes-tab .current').removeClass('current');
          $(this).addClass('current');     
          var selector = $(this).attr('data-filter');
          $container.isotope({
              filter: selector,
              animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
              }
           });
           return false;
      }); 
  });
/*-------------------------------------
  jquery Nav Scroll activation code
-------------------------------------*/ 
  $('#nav').onePageNav({
      scrollOffset: 80
  });

/****************************************
Google Map activation code
***************************************/
if($('#googleMap').length){
    var initialize = function() {
      var mapOptions = {
          zoom: 15,
          scrollwheel: false,
          center: new google.maps.LatLng(-37.81618, 144.95692)
      };

      var map = new google.maps.Map(document.getElementById('googleMap'),
          mapOptions);

      var marker = new google.maps.Marker({
          position: map.getCenter(),
          animation:google.maps.Animation.BOUNCE,
          icon: 'img/map-marker.png',
          map: map
      });

    }
  google.maps.event.addDomListener(window, 'load', initialize);
}

/***************************************
Contact Form activation code
***************************************/
if($('#contact-form').length){
  $('#contact-form').validator().on('submit', function (e) {
       var $this = $(this),
          $target = $(".form-response");
     if (e.isDefaultPrevented()) {
        $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
     } else {
      var name = $("#form-name").val();
      var email = $("#form-email").val();
      var phone = $("#form-phone").val();
      var message = $("#form-message").val();
      // ajax call
       $.ajax({
         url: 'php/form-process.php',
         type: 'POST',
         data: "name=" + name + "&email=" + email + "&phone=" + phone + "&message=" + message,
         beforeSend: function() {
            $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
        },
         success: function( text ){
                if(text == "success"){
                    $this[0].reset();
                    $target.html("<div class='alert alert-success'><p>Message Has Been Sent.</p></div>");
                } else {
                    $target.html("<div class='alert alert-success'><p>"+text+"</p></div>");
                }
             }
       });

       return false;
     }
  });
}
  


})(jQuery);