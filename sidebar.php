<div class="sidebar">
<?php if( have_rows('sidebar', 'option') ): ?>
<?php while ( have_rows('sidebar', 'option') ) : the_row(); ?>
<?php if( get_row_layout() == 'sidebar_section' ): ?>
<?php the_sub_field('sidebar_wys'); ?>
<?php endif; endwhile; ?>
<?php else : ?>

    // Add Sidebar Section in Theme Settings

<?php endif; ?>
</div>