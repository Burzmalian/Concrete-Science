  //sticky nav
  $(document).ready(function () {
    var stickyNavTop = $('.nav-wrap').offset().top;

    var stickyNav = function () {
      var scrollTop = $(window).scrollTop();

      if (scrollTop > stickyNavTop) {
        $('.nav-wrap').addClass('sticky');
        $('.head-wrap').addClass('nav-margin');
        $('.nav-cta').fadeIn(400);
      } else {
        $('.nav-wrap').removeClass('sticky');
        $('.head-wrap').removeClass('nav-margin');
        $('.nav-cta').hide();
      }
    };

    $(window).scroll(function () {
      stickyNav();
    });
  });