<?php get_header(); ?>

      <div class="divider"></div>

      <div id="site-page">

        <!-- loop for posts -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">
          <?php the_post_thumbnail(); ?>
          <p class="grey"><?php the_category(', '); ?></p>
          <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
          <p><?php the_excerpt(); ?></p>
          <p class="grey">May 23, 2014 / Leave a comment</p>
        </article>

        <?php endwhile; endif; ?>

      </div>

      <div class="divider"></div>

<?php get_footer(); ?>