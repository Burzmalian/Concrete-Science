<?php // Layout gallery ?>
 <div class="wrapper">
  <div class="container">
    <div class="row gallery-menu">
      <div class="col-sm-12">
        for each category <a href=""></a>
        filter
      </div>  
    </div>
    get image array
    link to popup
    filter classes for items
    <div class="row gallery">
      <div class="col-sm-12">
        <div class="item">
        
        </div>
        <?php the_sub_field('gallery_title') ?>
        <?php the_sub_field('gallery_image') ?>
        <?php the_sub_field('gallery_description') ?>
      </div>
    </div>
  </div>
</div>

get all popup items here
js (pop-up, isotope, bbq)
isotope option for breakpoints, heights etc
scss for layout_gallery