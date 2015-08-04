<div class="wrapper <?php if ( get_sub_field('header_background') == 'lg' ) : ?>bg-light-gray<?php endif; ?>">
  <div class="container">
    <div class="row header-row">
      <div class="col-sm-12">
    <?php if ( get_sub_field('header_tag') == 'H1' ) : ?>
        <h1 class="section-header"><?php the_sub_field('header_text'); ?></h1>
    <?php elseif ( get_sub_field('header_tag') == 'H2' ) : ?>
        <h2 class="section-header"><?php the_sub_field('header_text'); ?></h2>
    <?php elseif ( get_sub_field('header_tag') == 'H3' ) : ?>
        <h3 class="section-header"><?php the_sub_field('header_text'); ?></h3>
    <?php endif; ?>
      </div>
    </div>
  </div>
</div>