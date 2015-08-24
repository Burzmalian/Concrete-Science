<div class="sidebar">
<?php if( have_rows('sidebar', 'option') ): ?>
<?php while ( have_rows('sidebar', 'option') ) : the_row(); ?>
<?php if( get_row_layout() == 'sidebar_section' ): ?>
  <div class="side-item">
  <?php the_sub_field('sidebar_wys'); ?>
  </div>
<?php endif; endwhile; ?>
<?php else : ?>

    // Add Sidebar Section in Theme Settings

<?php endif; ?>
</div>