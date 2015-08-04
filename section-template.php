<?php
/*
 * Template Name: Section Template
 */
 ?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php if( have_rows('section_template') ): ?>
<?php while ( have_rows('section_template') ) : the_row(); ?>
 
<?php if( get_row_layout() == 'hero' ): ?>
  <?php get_template_part( 'inc/layout-hero' ); ?>    

<?php elseif( get_row_layout() == 'image_text' ): ?>
  <?php get_template_part( 'inc/layout-itt' ); ?>
  
<?php elseif( get_row_layout() == 'section_header' ): ?>
  <?php get_template_part( 'inc/layout-head' ); ?>
  
<?php elseif( get_row_layout() == 'full' ): ?>
  <?php get_template_part( 'inc/layout-full' ); ?>

<?php elseif( get_row_layout() == 'three_spot' ): ?>
  <?php get_template_part( 'inc/layout-three-spot' ); ?>

<?php elseif( get_row_layout() == 'four_spot' ): ?>
  <?php get_template_part( 'inc/layout-four-spot' ); ?>

<?php endif; //end if get_row_layout ?>

<?php endwhile; endif; //end if while section_template ?>

<?php endwhile; endif; //end if while have_posts ?>

<?php get_footer(); ?>