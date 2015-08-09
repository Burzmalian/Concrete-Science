<div class="wrapper">
<?php if( have_rows('hero_set') ): ?>
<?php $counter = 1; ?>
      <div class="hero-slider ">
<?php while ( have_rows('hero_set') ) : the_row(); ?>
        <div class="hero-wrap">  
<?php //begin image stuff
  $image = get_sub_field('hero_image');
  $image_small = $image['sizes']['b-small']; 
  $image_medium = $image['sizes']['b-medium'];
  $image_full = $image['url']; 
  $alt = $image['alt'];
  $title = $image['title'];
?>
<?php if ($image) : ?>
          <img src="<?php echo $image_full; ?>" alt="<?php echo $alt; ?>">
<?php endif; //end image stuff ?>
        <div class="center hero-txt-wrap">
          <div class="hero-text <?php //position goes here ?>">
<?php if ( $counter == 1 ): ?>             
            <h1 class="hero-title"><?php the_title(); ?></h1>
<?php else: ?>
            <h2 class="hero-title"><?php the_sub_field('hero_title'); ?></h2> 
<?php endif; ?>
<?php if (get_sub_field('hero_text')) : ?>            
            <p class="hero-sub"><?php the_sub_field('hero_text'); ?></p>
<?php endif; ?>
<?php if (get_sub_field('hero_button_text')) : ?>           
        <p><a href="<?php the_sub_field('hero_button_link'); ?>" class="button _orange"><?php the_sub_field('hero_button_text'); ?></a></p>
<?php endif; ?>
        </div>
        </div>
<?php $counter++; // add one per row ?> 
        </div>
<?php endwhile; ?>  
      </div>
<?php endif; // end if hero_set ?>
</div>