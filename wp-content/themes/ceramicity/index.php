<?php get_header(); ?>
        <!-- featured post -->
        <?php get_template_part('featured'); ?>

        <!-- loop for posts -->
        <div id="container">
          <?php query_posts('offset=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('masonry'); ?>
          <?php endwhile; endif; ?>
        </div>
<?php get_footer(); ?>