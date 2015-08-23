$(document).ready(function () {
  
  $('.hero-slider').slick({
    dots: true,
    draggable: true,
    adaptiveHeight: true,
     responsive: [
    {
      breakpoint: 767,
      settings: {
        dots:false,
      }
    }
  ]
  });

  $('iframe').wrap('<div class="iframe"></div>');
  $('.iframe').fitVids();


  $('.partners').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
  
  $('a[href*="#popup"]').each(function() {
    $(this).addClass('open-popup-link');
});


  $('.open-popup-link').magnificPopup({
    type: 'inline',
    midClick: true,
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });
  
});


$(window).bind("load", function() {
   $('.header-cta').addClass('hdr-active');
});