<?php get_header(); ?>

<div class="wrapper group">
  <div class="container mid group">
    <div class="row">
      <div class="col-sm-12">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="group" id="post-<?php the_ID(); ?>">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
      </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>