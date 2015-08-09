<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <div class="mid-wrap">
  <div class="container mid">
    <div class="row">
      <article class="col-sm-8">
        <h1 class="single-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="single-content"><?php the_excerpt(); ?></div>
      </article>
      <div class="col-sm-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>