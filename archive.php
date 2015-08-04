<?php get_header(); ?>
  <div class="container mid">
    <div class="row">
      <article class="col-sm-8">
      <h1>Blog</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="archive-item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail() ) : ?>

<?php
$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-small' );
$medium_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-medium' );
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'b-large' );
?>    
	      <figure>
          <img srcset="<?php echo $small_image_url[0] ?> 480w, <?php echo $medium_image_url[0]; ?> 750w" sizes="(min-width: 750px) 750px, (min-width: 360px) 360px" alt="" width="800" height="1200">
        </figure>
<?php endif; ?>
        <div class="single-content"><?php the_excerpt(); ?></div>
        </div>
<?php endwhile; endif; ?>
      </article>
      <div class="col-sm-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>