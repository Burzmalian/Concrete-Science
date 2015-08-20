<?php // Layout for image title text ?>
 <div class="wrapper <?php if ( get_sub_field('itt_bg') == 'lg' ): ?>bg-light-gray<?php endif; ?>">
  <div class="container">
<?php //begin image stuff
  $image = get_sub_field('itt_image');
  $image_small = $image['sizes']['b-small'];  
  $alt = $image['alt'];
  $title = $image['title'];
?>
    <div class="row itt vertical-align">
      <div class="col-sm-6 <?php if (get_sub_field('itt_position') == "Right" ) : ?>col-sm-push-6<?php endif; ?>">
    <?php if ($image) : ?>
        <img class="width-full" src="<?php echo $image_small; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
    <?php else: ?>
        
    <?php endif; //end image stuff ?>
      </div>

      <div class="col-sm-6 <?php if (get_sub_field('itt_position') == "Right" ) : ?>col-sm-pull-6<?php endif; ?>">
        <h2 class="itt-title"><?php the_sub_field('itt_title'); ?></h2>
        <p class="itt-text"><?php the_sub_field('itt_text'); ?></p>
    <?php if (get_sub_field('itt_button_text')) : ?>  
        <p style="text-align:center;"><a href="<?php the_sub_field('itt_button_link'); ?>" class="button _orange"><?php the_sub_field('itt_button_text'); ?></a></p>
    <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div>