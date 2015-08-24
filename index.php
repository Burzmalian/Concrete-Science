<?php get_header(); ?>
 <div class="mid-wrap">
  <div class="container mid">
    <div class="row">
    <div class="col-sm-8">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h1 class="single-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="single-content"><?php the_excerpt(); ?></div>
      </article>
<?php endwhile; endif; ?>
    </div>
     <div class="col-sm-4 sidebar">
        <?php get_sidebar(); ?>
    </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>