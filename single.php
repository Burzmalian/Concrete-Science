<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <div class="mid-wrap">
  <div class="container mid">
    <div class="row">
      <article class="col-sm-8">
        <h1 class="single-header"><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail() ) : ?>

<?php
$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-small' );
?>    
	      <figure>
          <img class="single-img" src="<?php echo $small_image_url[0] ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        </figure>
<?php endif; ?>
        <div class="single-content"><?php the_content(); ?></div>
      </article>
      <div class="col-sm-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif;  ?>
<?php get_footer(); ?>