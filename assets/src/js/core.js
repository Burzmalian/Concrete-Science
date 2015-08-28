$(document).ready(function () {
  

  $('iframe, object').wrap('<div class="iframe"></div>');
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
  
  $('.nav-icon').click(function() {
    $(this).toggleClass('active');
    $('.main-menu').toggleClass('show');
  });
  
});



$(window).bind("load", function() {
   $('.header-cta').addClass('hdr-active');
});