</div> <!-- end .wrapper -->
<div class="form-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="form">
          THis is the form
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-wrap">
  <div class="container">
    <div class="row footer-menus">
      <div class="col-sm-3">
        <h3>Footer 1</h3>
        <?php
          $defaults = array( 
              'theme_location' => 'footer_menu_2',
              'container' => '',
              'menu_class' => 'footer-menu-2',
              'menu_id' => '',
          );
          wp_nav_menu( $defaults );      
        ?>
      </div>
      <div class="col-sm-3">
       <h3>Footer 2</h3>
        <?php
          $defaults = array( 
              'theme_location' => 'footer_menu',
              'container' => '',
              'menu_class' => 'footer-menu',
              'menu_id' => '',
          );
          wp_nav_menu( $defaults );      
        ?>
      </div>
      <div class="col-sm-3">
        <h3>Footer 3</h3>
        awd
      </div>
      <div class="col-sm-3">
        <h3>Footer 4</h3>
        socials
      </div>
    </div>
  </div>
</div>
<div class="super-footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        &copy; <?php echo date('Y'); ?> Concrete Science
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-33427136-1']);
_gaq.push(['_trackPageview']);

(function () {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
 
 <?php if (is_single()): ?>
  <!-- Addthis.com scripts -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556b47fa19c4acc1" async="async"></script>
<script>
  var addthis_config = {
    data_track_addressbar: false,
    data_track_clickback: false,
    ui_use_css : false,
  };
</script>
<?php endif; ?>
  <!--End Social Sharing Icons -->
</body>
</html>