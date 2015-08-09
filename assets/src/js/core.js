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
  
});