<?php
/*
 * Template Name: Section Template
 */
 ?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container mid">
<?php if( have_rows('section_template') ): ?>
<?php while ( have_rows('section_template') ) : the_row(); ?>

  <?php if( get_row_layout() == 'hero' ): ?>
    <div class="row">
      <div class="hero_wrap">
        <img src="<?php the_sub_field('hero_image'); ?>" alt="<?php the_sub_field('hero_image'); ?>" title="<?php the_sub_field('hero_image'); ?>">
        <div class="hero-text <?php ?>">
          <h1><?php the_title(); ?></h1>
          <p><?php the_sub_field('hero_text'); ?></p>
          <p><?php the_sub_field('hero_cta'); ?></p>
        </div>
      </div>
    </div>
    

  <?php elseif( get_row_layout() == 'image_text' ): ?>
    <div class="row">
    </div>
    <?php $file = get_sub_field('file'); ?>

  <?php endif; ?>

<?php endwhile; else : ?>

    // no layouts found

<?php endif; ?>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>