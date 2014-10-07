<?php get_header(); ?>
  <div id="container"> 

    
    <h1>
      <?php if ( is_day() ) : ?>
          <?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
      <?php elseif ( is_month() ) : ?>
          <?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
      <?php elseif ( is_year() ) : ?>
          <?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
      <?php else : ?>
          <?php _e( 'Blog Archives', 'twentyten' ); ?>
      <?php endif; ?>
    </h1>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('masonry'); ?>
      <?php endwhile; ?>

  </div>

<?php get_footer(); ?>