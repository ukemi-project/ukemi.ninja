(function($) {
  "use strict";

  jQuery(document).ready(function($) {

      /* =============================================
          Mobile Menu Collapse
      ============================================= */
      $(".navbar-nav .nav-link").on('click', function(){
          $(".navbar-collapse").removeClass("show");
      });

      /* =============================================
          Header Social Follow
      ============================================= */
      $('.header-follow').on('click', function(event) {
          event.preventDefault();
          $('.header-social').toggleClass('is-visible');
      });
      $('.header-follow-close').on('click', function(event) {
          event.preventDefault();
          $( '.header-social' ).toggleClass( 'is-visible' );
      });

      /* =============================================
          Smooth Link
      ============================================= */
      $('.page-scroll').on('click', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');
          event.preventDefault();
      });

      /* =============================================
          Scrollspy
      ============================================= */
      $("#navbarCollapse").scrollspy({ offset: 0});

      /* =============================================
          Home Scroller Animation
      ============================================= */
      reanimate();
      function reanimate() {
          $('.home-scroller').animate({
              bottom: 50
          }, 1000).animate({
              bottom: 65
          }, 1000, function () {
              setTimeout(reanimate, 100);
          });
      }

      /* =============================================
          Background Video
      ============================================= */
      $(".bg-video-player").YTPlayer();

      /* =============================================
          Partner Slider
      ============================================= */
      $('#partner-slider-1, #partner-slider-2').owlCarousel({
          loop : true,
          dots : false,
          nav : false,
          autoplay : true,
          autoplayHoverPause : true,
          autoHeight : true,
          responsiveCla1ss :true,
          responsive : {
              0 : {
                  items: 2
              },
              540 : {
                  items: 2,
              },
              720 : {
                  items: 3,
              },
              992 : {
                  items: 3,
              },
              1140 : {
                  items: 4,
              },
          }
      });

      /* =============================================
          Team Slider
      ============================================= */
      $('#team-slider').owlCarousel({
          loop : true,
          dots : false,
          nav : false,
          autoplay : true,
          autoplayHoverPause : true,
          autoHeight : true,
          responsiveClass :true,
          responsive : {
              0 : {
                  items: 1
              },
              540 : {
                  items: 1,
              },
              720 : {
                  items: 2,
              },
              992 : {
                  items: 3,
              },
              1140 : {
                  items: 3,
              },
          }
      });

      /* =============================================
          Latest News Slider
      ============================================= */
      $('#blog-slider').owlCarousel({
          loop : true,
          dots : false,
          nav : false,
          autoplay : true,
          autoplayHoverPause : true,
          autoHeight : true,
          responsiveClass :true,
          responsive : {
              0 : {
                  items: 1
              },
              540 : {
                  items: 1,
              },
              720 : {
                  items: 2,
              },
              992 : {
                  items: 3,
              },
              1140 : {
                  items: 3,
              },
          }
      });

      /* =============================================
          Accordion add Active Class
      ============================================= */
      $(".card").on("show.bs.collapse hide.bs.collapse", function(e) {
          if (e.type=='show'){
              $(this).addClass('active');
          }
          else{
              $(this).removeClass('active');
          }
      });

      /* =============================================
          Input Style
      ============================================= */
      $(document).on("focusout",".form-control",function(){
          if($(this).val() != ""){
              $(this).addClass("has-content");
          }else{
              $(this).removeClass("has-content");
          }
      });

      /* =============================================
          Form Validator
      ============================================= */
      $(function () {
          window.verifyRecaptchaCallback = function (response) {
            $('input[data-recaptcha]').val(response).trigger('change')
          }
          window.expiredRecaptchaCallback = function () {
            $('input[data-recaptcha]').val("").trigger('change')
          }

          $('.contact-form').validator();

          $('.contact-form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                  var url = "contact.php";

                $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                          var messageAlert = 'alert-' + data.type;
                          var messageText = data.message;

                          var alertBox = '<div class="alert mb-40 '+messageAlert+' alert-dismissible fade show" role="alert">'+ messageText +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                          if (messageAlert && messageText) {
                              $('.needs-validation').find('.messages').hide().html(alertBox).fadeIn('slow');
                              $('.needs-validation')[0].reset();
                              grecaptcha.reset();
                          }
                      }
                  });
                  return false;
              }
          })
      });

      /* =============================================
          Google Map
      ============================================= */
      var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 55.861178, lng: -4.250230}, // {lat: 51.9200, lng: 4.4757}
          zoom: 14,
          styles:
          [
          {"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]},
          {"featureType": "administrative.neighborhood", "elementType": "labels", "stylers": [{"visibility": "off"}]},
          {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]},
          {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "off"}]},
          {"featureType": 'poi', "elementType": 'geometry.fill', "stylers": [{"color": '#AEBD59'}]},
          {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]},
          {"featureType": "road.highway", "elementType": "all","stylers": [{"visibility": "simplified"}, {"color": "#FFD34F"}]},
          {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
          {"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},
          {"featureType": "water","elementType": "all","stylers": [{"color": "#73B6C7"},{"visibility": "on"}]}
          ]
      });

      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(55.861178, -4.250230), // 51.9049, 4.4540 / 51.908453, 4.449596
          animation: google.maps.Animation.DROP,
          color: '#FFD34F',
          icon: 'images/map-pin.png',
          map: map,
      });

      var contentString = '<div class="text-center"><h5 class="text-uppercase font-weight-bold text-black"><span class="text-uppercase fw-2">Ukemi<span class="fw-8 text-blue"></span></span></h5></div>';

      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      marker.addListener('click', function() {
          infowindow.open(map, marker);
          marker.setAnimation(google.maps.Animation.BOUNCE);
      });

      /* =============================================
          Back to Top
      ============================================= */
      $(window).on("scroll", function() {
          if ($(this).scrollTop() > 100) { 
              $('#back-to-top').fadeIn();
          } else { 
              $('#back-to-top').fadeOut(); 
          } 
      }); 
      $("#back-to-top").on("click", function(){
          $("html, body").animate({ scrollTop: 0 }, 1000); 
          return false; 
      });

      /* =============================================
          Full Page Animation
      ============================================= */
      var wow = new WOW({
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       100,          // distance to the element when triggering the animation (default is 0)
          mobile:       true,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
      });
      wow.init();

  });
  
  jQuery(window).on('load', function() {

      /* =============================================
          Pre Loader
      ============================================= */
      $('body').imagesLoaded( function() {
          $('#pre-loader').fadeOut();
          $('body').css({"overflow": "visible"});
      });

  });

  jQuery(window).on('scroll', function() {

      /* =============================================
          Header Sticky
      ============================================= */
      var scroll = $(window).scrollTop();
      if (scroll >= 100) {
          $(".header").addClass("header-sticky");
      } else {
          $(".header").removeClass("header-sticky");
      }

  });

}(jQuery));