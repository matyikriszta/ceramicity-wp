<?php get_header(); ?>

      <div id="site-page">

        <?php get_template_part('featured'); ?>

        <!-- loop for posts -->

        <?php query_posts('offset=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
            <ul class="grey"><?php the_category(', '); ?></ul>
            <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_excerpt(); ?></p>
            <p class="grey"><?php the_date(); ?> / Leave a comment</p>
          </article>

        <?php endwhile; endif; ?>

      </div>

<?php get_footer(); ?>