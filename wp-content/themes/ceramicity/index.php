<?php get_header(); ?>


        <?php get_template_part('featured'); ?>

        <!-- loop for posts -->
        <?php query_posts('offset=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="container">
          <?php get_template_part('masonry'); ?>
        </div>


        <?php endwhile; endif; ?>


<?php get_footer(); ?>