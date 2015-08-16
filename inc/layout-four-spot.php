<?php // Layout for 4 spot ?>
 <div class="wrapper <?php if ( get_sub_field('four_background') == 'lg' ) : ?>bg-light-gray<?php endif; ?>">
  <div class="container">
    <div class="row four-spot">
       <div class="col-sm-6 col-md-3">
         <?php the_sub_field('four_col_1') ?>
       </div>
       <div class="col-sm-6 col-md-3">
         <?php the_sub_field('four_col_2') ?>
       </div>
       <div class="col-sm-6 col-md-3">
         <?php the_sub_field('four_col_3') ?>
       </div>
      <div class="col-sm-6 col-md-3">
         <?php the_sub_field('four_col_4') ?>
       </div>
    </div>
  </div>
</div>