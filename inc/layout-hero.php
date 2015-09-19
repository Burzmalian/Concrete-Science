<div class="wrapper hero">
<?php if( have_rows('hero_set') ): ?>
<?php $counter = 1; ?>
      <div class="hero-slider ">
<?php while ( have_rows('hero_set') ) : the_row(); ?>
        <div class="hero-wrap">  
<?php //begin image stuff
  $image = get_sub_field('hero_image'); 
$image_thumb = $image['sizes']['b-thumb']; 
  $image_small = $image['sizes']['b-small']; 
  $image_medium = $image['sizes']['b-medium'];
  $image_large = $image['sizes']['b-large'];
  $alt = $image['alt'];
  $title = $image['title'];
  $width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];
?>
<?php if ($image) : ?>
          <img class="hero-image" height="<?php echo $height; ?>" width="<?php echo $width; ?>" src="<?php echo $image_small; ?>" srcset="<?php echo $image_thumb; ?> 767w, <?php echo $image_medium; ?> 1024w, <?php echo $image_large; ?> 1280w" alt="<?php echo $alt; ?>">
<?php endif; //end image stuff ?>
        <div class="center hero-txt-wrap">
          <div class="hero-text">
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
<?php $counter++; // add one per rows ?> 
        </div>
<?php endwhile; ?>  
      </div>
<?php endif; // end if hero_set ?>
</div>