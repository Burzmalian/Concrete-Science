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
    type: 'inline',
    midClick: true,
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });

});

$(window).bind("load", function () {
  $('.header-cta').addClass('hdr-active');
});

$(document).ready(function () {
  // run test on initial page load
  checkSize();

  // run test on resize of the window
  $(window).resize(checkSize);
});

//Function to the css rule
function checkSize() {
  if ($(".hero-slider").css("display") == "none") {
    $('.hero-txt-wrap').appendTo('.hero');
  }
}