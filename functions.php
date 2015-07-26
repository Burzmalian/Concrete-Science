<?php
// REGISTER MENUS
add_action('init', 'register_my_menus');
 
function register_my_menus() {
    register_nav_menus( array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu',
      'footer_menu_2' => 'Footer Menu 2', 
 ));
}

// REGISTER SCRIPTS
    function get_scripts() 
    {   
		// Deregister the included library  
		wp_deregister_script( 'jquery' );  
		  
		// Register the library again from Google's CDN  
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, true );		
		wp_register_script( 'prod', get_template_directory_uri() . '/assets/prod/js/prod.min.js', array( 'jquery' ), null, true);
    
    wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'prod' );	
    }  
    add_action( 'wp_enqueue_scripts', 'get_scripts' ); 
	
// REGISTER STYLES
	function get_styles()
	{	
    wp_register_style( 'prod', get_template_directory_uri() .'/assets/prod/css/main.css');
    
    wp_enqueue_style( 'prod' );
	}
	add_action( 'wp_enqueue_scripts', 'get_styles' );

// Remove emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Custom thumbnail sizes
add_theme_support( 'post-thumbnails' );
add_image_size( 'b-small', 360 );
add_image_size( 'b-medium', 750 );

function paulund_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'paulund_remove_default_image_sizes');

// Replace the default ellipsis
function trim_excerpt($text) {
     $text = str_replace('[&hellip;]', '...', $text);
     return $text;
    }
add_filter('get_the_excerpt', 'trim_excerpt');

// Removes the white spaces from wp_title
function af_titledespacer($title) {
	return trim($title);
}

add_filter('wp_title', 'af_titledespacer');

?>