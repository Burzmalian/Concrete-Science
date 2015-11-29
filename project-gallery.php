<?php
/**
 * Template Name: Project Gallery Page
 */
?>
<?php get_header(); ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php if( have_rows('gallery_template') ):  ?>
<?php while ( have_rows('gallery_template') ) : the_row(); ?>
 
<?php if( get_row_layout() == 'hero' ): ?>
  <?php get_template_part( 'inc/layout-hero' ); ?>    

<?php elseif( get_row_layout() == 'gallery_row' ): ?>
  <?php get_template_part( 'inc/layout-gallery' ); ?>

<?php endif; //end if get_row_layout ?>

<?php endwhile; endif; //end if while section_template ?>

<?php endwhile; endif; //end if while have_posts ?>

<?php get_footer(); ?>