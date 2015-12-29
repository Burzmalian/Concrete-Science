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
  
  function getHashFilter() {
    var hash = location.hash;
    // get filter=filterName
    var matches = location.hash.match( /filter=([^&]+)/i );
    var hashFilter = matches && matches[1];
    return hashFilter && decodeURIComponent( hashFilter );
  }

  $( function() {

    var $container = $('.gallery');

    // bind filter button click
    var $filters = $('.filter-menu').on( 'click', 'button', function() {
      var filterAttr = $( this ).attr('data-filter');
      // set filter in hash
      location.hash = 'filter=' + encodeURIComponent( filterAttr );
    });

    var isIsotopeInit = false;

    function onHashchange() {
      var hashFilter = getHashFilter();
      if ( !hashFilter && isIsotopeInit ) {
        return;
      }
      isIsotopeInit = true;
      // filter isotope
      $container.isotope({
        itemSelector: '.gallery-item',
        percentPosition: true,
        layoutMode: 'fitRows',
        filter: hashFilter,
        fitRows: {
          gutter: '.gutter',
        }
      });
      // set selected class on button
      if ( hashFilter ) {
        $filters.find('.is-checked').removeClass('is-checked');
        $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
      }
    }

    $(window).on( 'hashchange', onHashchange );
    // trigger event handler to init Isotope
    onHashchange();
  });
});