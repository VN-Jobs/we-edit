import './bootstrap';
// import 'popper.js';
// import 'bootstrap';
import 'jquery-sticky';
import 'flexslider';
import 'lightgallery';
import 'magnific-popup';

window.$(window).on('load', function () {
    "use strict";

    $(".preeloader").fadeOut(1000);
});

( function($) {
  $( document ).ready( function() {
    function toggleFullscreen(elem) {
      elem = elem || document.documentElement;

      if (
        !document.fullscreenElement &&
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement &&
        !document.msFullscreenElement
      ) {
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
          elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
          elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }

        $('#fullscreen').addClass('open');

      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }

        $('#fullscreen').removeClass('open');
      }
    }

    if (document.getElementById('fullscreen') !== null) {
      document.getElementById('fullscreen').addEventListener('click', function () {
        toggleFullscreen();
      });
    }

    /* Offcanvas */
    $('#offcanvas-toggler').on('click', function(event) {
      event.preventDefault();
      $('.offcanvas-init').addClass('offcanvas-active');
    });

    $('.close-offcanvas, .site-overlay').on('click', function(event) {
      event.preventDefault();
      $('.offcanvas-init').removeClass('offcanvas-active');
    });

    $(document).on('click', '.offcanvas-inner .menu-toggler', function(event) {
      event.preventDefault();
      $(this).closest('.menu-parent').toggleClass('menu-parent-open').find('>.menu-child').slideToggle(400);
    });

    $('.offcanvas-menu .caret').on('click', function(event) {
      event.preventDefault();

      $(this).parent('.has-submenu').toggleClass('active');
    });

    /* Header sticky */
    if ($(".site-header").length) $(".site-header").sticky({ topSpacing: 0 });

    /* Scroll to top */
    if ($('#back-top').length) {
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $("#back-top").click(function() {
            $("html, body").animate({scrollTop: 0}, 1000);
        });
    }

    // Flex Slider
    if ($(".flexslider").length) {
      $(".flexslider").each(function() {
        var e = $(this);

        e.flexslider({
          itemWidth: "100%",
          pausePlay: false,
          slideshowSpeed: 6000,
          animation: e.data("animation") || "slide",
          animationLoop: e.data("animationLoop") || true,
          directionNav: e.data("directionNav") || false,
          controlNav: e.data("controlNav") || true,
          pauseOnAction: true,
          start: function(slider){
              $('body').removeClass('loading');
              if (e.data("hidden")) e.removeClass('flexslider-hidden');
          },
          after: function(slider) {
            /* auto-restart player if paused after action */
            if (!slider.playing) {
                slider.play();
            }
          }
        });
      });
    }

    if ($('.single-gallery-items a').length) {
          $('.single-gallery-items a').magnificPopup({
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
              beforeOpen: function () {
                // just a hack that adds mfp-anim class to markup
                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
              }
            },
            gallery: {
              enabled: true
            },
            closeOnContentClick: true,
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
          });
        }

  });
}) ( window.$ );

(function ($) {
    $(document).ready(function () {
        var apiKey = flickerConfigs.apiKey;
        var photoSetID = flickerConfigs.photoSetID;
        var flickerAPI = 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key=' + apiKey + '&photoset_id=' + photoSetID + '&format=json&jsoncallback=?';

        $.getJSON( flickerAPI, function( data ) {
            $.each( data.photoset.photo, function( i, item ) {
                var photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
                var photoHref='http://www.flickr.com/photos/' + data.photoset.owner + '/' + item.id;
                var photoItem = '<a href="' + photoHref + '" class="single-gallery-items"><img src="' + photoURL + '" alt=""></a>';

                $(photoItem).appendTo( "#lightgallery-flickr" );

                if ( i === 5 ) {
                    return false;
                }
            });

            // if ($('#lightgallery-flickr').length) {
            //     $('#lightgallery-flickr').lightGallery({
            //         thumbnail:true,
            //         animateThumb: false,
            //         showThumbByDefault: false
            //     });
            // }
        });
    });
}) ( window.$ );
