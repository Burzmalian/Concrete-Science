<?php // Layout gallery ?>
 <div class="wrapper">
  <div class="container">
    <div class="row">      
       <?php $field_key = "field_564bf180e086b";
        $field = get_field_object($field_key);    
      ?>
      
      
        
        <?php if( $field ) { ?>
        <?php  {
            echo '<div class="col-sm-12 filter-menu"><button class="is-checked" data-filter="*">All Projects</a>';
              foreach( $field['choices'] as $k => $v )
              {
                echo '<button data-filter="' . '.' . $k . ' ' .'">' . $v . '</a>';
              }
            echo '</div>';
          } ?>
        <?php }; ?> 
    </div>

<?php if( have_rows('gallery_repeater') ): $i = 0; ?>
    <div class="clearfix">
      <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gutter"></div>
    <?php while ( have_rows('gallery_repeater') ) : the_row(); $i++; ?>
      
    <?php //begin image stuff
      $image = get_sub_field('gallery_image'); 
      $image_thumb = $image['sizes']['b-thumb']; 
      $alt = $image['alt'];
      $title = $image['title'];
    ?>
      
        <a href="#gallery-<?php echo $i; ?>" class="gallery-item <?php $fields = get_sub_field_object('gallery_category');
                                                    $value = $fields['value'];
                                                    $choices = $fields['choices'];
                                                    if( $value ): ?><?php foreach( $value as $j => $b ): ?><?php echo $b . ' '; ?><?php endforeach; ?><?php endif; ?> open-popup-link">
          <h2><?php the_sub_field('gallery_title') ?></h2>
          <div class="gallery-image-wrap"><img class="gallery-image" src="<?php echo $image_thumb; ?>" alt="<?php echo $alt; ?>"></div>
          <p><?php echo wp_trim_words( get_sub_field('gallery_description' ), $num_words = 20, $more = '...' ); ?></p>
        </a>
        
    <?php endwhile; ?>
      </div>
    </div>
<?php endif; ?>
  </div>
</div>

<?php if( have_rows('gallery_repeater') ): $i = 0; ?>
<?php while ( have_rows('gallery_repeater') ) : the_row(); $i++; ?>

  <?php //begin image stuff
    $image = get_sub_field('gallery_image'); 
    $image_thumb = $image['sizes']['b-thumb']; 
    $image_small = $image['sizes']['b-small']; 
    $image_medium = $image['sizes']['b-medium'];
    $alt = $image['alt'];
    $title = $image['title'];
  ?>

<div id="gallery-<?php echo $i; ?>" class="white-popup gallery-popup mfp-hide">
  <h3><?php the_sub_field('gallery_title') ?></h3>
  <?php if ($image) : ?>
    <img class="gallery-image" src="<?php echo $image_small; ?>" srcset="<?php echo $image_thumb; ?> 767w, <?php echo $image_medium; ?> 1024w" alt="<?php echo $alt; ?>">
  <?php endif; ?>
  <p><?php the_sub_field('gallery_description') ?></p>
  <p><a href="<?php the_sub_field('cta_link') ?>" class="button medium _orange"><?php the_sub_field('gallery_cta') ?></a></p>
</div>

<?php endwhile; endif; ?>


