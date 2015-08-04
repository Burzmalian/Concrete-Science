<div class="wrapper <?php if ( get_sub_field('full_background') == 'lg' ) : ?>bg-light-gray<?php endif; ?>">
  <div class="container">
    <div class="row full">
      <div class="col-sm-12 col-md-10 col-md-push-1">
        <h2 class="section-header"><?php the_sub_field('full_title'); ?></h2>
<?php if (get_sub_field('full_text')) : ?>
        <p><?php the_sub_field('full_text'); ?></p>
<?php endif; ?>
<?php if (get_sub_field('full_button_text')) : ?>
        <p><a class="button _orange" href="<?php the_sub_field('full_button_link'); ?> "><?php the_sub_field('full_button_text'); ?></a></p>
<?php endif; ?>
      </div>
    </div>
  </div>
</div>