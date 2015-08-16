<?php // Layout for 3 spot ?>
 <div class="wrapper <?php if ( get_sub_field('three_background') == 'lg' ) : ?>bg-light-gray<?php endif; ?>">
  <div class="container">
    <div class="row three-spot">
       <div class="col-sm-4">
         <?php the_sub_field('three_col_1') ?>
       </div>
       <div class="col-sm-4">
         <?php the_sub_field('three_col_2') ?>
       </div>
       <div class="col-sm-4">
         <?php the_sub_field('three_col_3') ?>
       </div>
    </div>
  </div>
</div>