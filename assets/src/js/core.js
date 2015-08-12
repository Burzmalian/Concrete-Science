$(document).ready(function () {
  $('.hero-slider').slick({
    dots: true,
    draggable: true,
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
  
  $('.open-popup-link').magnificPopup({
    type:'inline',
    midClick: true,
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });

});

$(window).bind("load", function() {
   $('.header-cta').addClass('hdr-active');
});