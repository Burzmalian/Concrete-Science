  //sticky nav
  $(document).ready(function () {
    var stickyNavTop = $('.nav-wrap').offset().top;

    var stickyNav = function () {
      var scrollTop = $(window).scrollTop();

      if (scrollTop > stickyNavTop) {
        $('.nav-wrap').addClass('sticky');
        $('.head-wrap').addClass('nav-margin');
      } else {
        $('.nav-wrap').removeClass('sticky');
        $('.head-wrap').removeClass('nav-margin');
      }
    };

    $(window).scroll(function () {
      stickyNav();
    });
  });