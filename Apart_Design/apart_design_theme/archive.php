<?php
    get_header();
?>

<section id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p><?php the_content(); ?></p>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</section>

<?php
    get_footer();
?>