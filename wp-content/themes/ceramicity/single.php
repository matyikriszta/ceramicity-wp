<?php get_header(); ?>
<?php the_post(); ?>

      <div class="divider"></div>
      <div id="post-aside">
        <div id="post-nav">
          <p><?php previous_post_link('%link', '<< Previous'); ?> / <?php next_post_link('%link', 'Next >>'); ?></p>
          <ul>
            <li><div class="email"></div><p>Email</p></li>
            <li><div class="facebook"></div><p>Facebook</p></li>
            <li><div class="twitter"></div><p>Twitter</p></li>
            <li><div class="google"></div><p>Google +</p></li>
            <li><div class="tumblr"></div><p>Tumblr</p></li>
            <li><div class="pinterest"></div><p>Pinterest</p></li>
            <li><div class="linkedin"></div><p>LinkedIn</p></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div id="post">
        <div id="post-title">
          <h1><?php the_title(); ?></h1>
          <div id="post-meta"> 
            <?php 
              $archive_year  = get_the_time('Y'); 
              $archive_month = get_the_time('m'); 
              $archive_day   = get_the_time('d'); 
            ?> 
            <p><span class="grey">by</span> <?php the_author_posts_link(); ?> <span class="grey">/</span> <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php the_date(); ?></a> <span class="grey">/</span> <?php the_category(', '); ?> <span class="grey">/</span> Leave a comment</p>
          </div>
        </div>
        <div id="post-content">
          <?php the_content(); ?>
          <?php comments_template(); ?>
        </div>
      </div>
      <div class="divider"></div>
<?php get_footer(); ?>