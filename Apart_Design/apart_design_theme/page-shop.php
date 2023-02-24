<?php
    get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-12">
    
    <p><?php the_content(); ?></p>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
    get_footer();
?>