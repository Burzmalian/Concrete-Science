<?php $partners = get_field('partners', 'option'); ?>
<?php if ($partners): ?>
 <div class="partners-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
       <h2>Partners</h2>
        <div class="partners">
<?php foreach ($partners as $partner): ?>
          <div>
            <img src="<?php echo $partner['sizes']['b-thumb']; ?>" alt="<?php echo $partner['alt']; ?>" />
          </div>
<?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="footer-wrap">
  <div class="container">
    <div class="row footer-menus">
      <div class="col-sm-3">
        <h3>Contact</h3>
        <?php the_field('contact_info', 'option'); ?>
        <p><a class="open-popup-link" href="#popup">Contact Us</a></p>
      </div>
      <div class="col-sm-3">
       <h3>Services</h3>
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
        <h3>About</h3>
        <?php the_field('about_footer', 'option'); ?>
      </div>
      <div class="col-sm-3">
        <h3>Connect</h3>
        <ul class="socials">
          <li><a class="youtube" href="http://www.youtube.com/ConcreteScience">Youtube</a></li>
          <li><a class="facebook" href="http://www.facebook.com/ConcreteScience">Facebook</a></li>
          <li><a class="google" href="https://plus.google.com/115078954904092653713">Google+</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="super-footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; <?php echo date('Y'); ?> Concrete Science</p>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>/terms-conditions">Terms & Conditions</a></p>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>