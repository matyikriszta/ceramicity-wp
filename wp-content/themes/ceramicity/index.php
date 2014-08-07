<?php get_header(); ?>

      <div class="divider"></div>

      <div id="site-page">

        <!-- loop for posts -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">
          <img src="images/lindform3.jpg" alt="">
          <p class="grey"><?php the_category(', '); ?></p>
          <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
          <p><?php the_excerpt(); ?></p>
          <p class="grey">May 23, 2014 / Leave a comment</p>
        </article>

        <?php endwhile; endif; ?>

      </div>

      <div class="divider"></div>
      </main>
      <footer>
        <p>Create a free website or blog at WordPress.com</p>
        <p>Theme by Krisztina Matyi</p>
      </footer>
    </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>