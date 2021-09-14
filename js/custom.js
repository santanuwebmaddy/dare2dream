var $mainSlider = $('.silder');
  $mainSlider.owlCarousel({
  loop: true,
  navText: ['<i class="las la-angle-left"></i>', '<i class="las la-angle-right"></i>'],
  nav: true,
  dots: false,
  autoplay: false,
  autoplayTimeout: 5000,
  animateOut: 'slideOutDown',
  animateIn: 'fadeIn',
  smartSpeed: 450,
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    768: {
      items: 1,
      nav: false,
    },
    960: {
      items: 1
    },
    1200: {
        items: 1
    },
    1920: {
      items: 1
    }
  }
});


$(document).ready(function() {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });
});