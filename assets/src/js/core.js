$(document).ready(function () {
  $('.hero-slider').slick({
    dots: true,
    draggable: true,
  });
});

$(document).ready(function () {
  $('iframe').wrap('<div class="iframe"></div>');
  $('.iframe').fitVids();
});