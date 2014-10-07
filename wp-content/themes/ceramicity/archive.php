<?php get_header(); ?>
  <div id="container">
    <h1>Montly archives</h1>
          <?php query_posts('offset=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('masonry'); ?>
          <?php endwhile; endif; ?>    
  </div>

<?php get_footer(); ?>