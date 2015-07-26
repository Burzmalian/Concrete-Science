<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title><?php wp_title(''); ?></title>
  <!--Favicons -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="head-wrap">  
    <header class="container">
      <div class="row">
        <div class="col-sm-12 head">
          <div class="header-cta"><h3>Call 763-420-4073 or</h3><a class="btn">Get a free Quote</a></div>
          <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">Concrete Science</a>
        </div>
      </div>
    </header>
  </div>
  <div class="nav-wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav>
            <?php
              $defaults = array( 
                'theme_location' => 'main_menu',
                'container' => '',
                'menu_class' => 'main-menu',
                'menu_id' => '',
            );
            wp_nav_menu( $defaults );      
            ?>
            <div class="nav-icon">
              <div></div>
            </div>  
          </nav>
        </div>
      </div> 
         
    </div>
  </div>
  <div class="wrapper"><!-- ends in footer.php -->
  <div class="container">
    <div class="row">
      <img src="http://localhost/concrete-science/wp-content/uploads/2015/07/april-28-2006-043.jpg">
    </div>
  </div>
  