<?php get_header(); ?>
<?php the_post(); ?>

      <div class="divider"></div>
      <div class="single-post">
        <div class="single-post-title">
          <h1><?php the_title(); ?></h1>
          <div class="single-post-meta"> 
            <?php 
              $archive_year  = get_the_time('Y'); 
              $archive_month = get_the_time('m'); 
              $archive_day   = get_the_time('d'); 
            ?> 
            <p>by <?php the_author_posts_link(); ?> <span class="grey">/</span> <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php the_date(); ?></a> <span class="grey">/</span> <?php the_category(', '); ?> <span class="grey">/</span> <a href="#respond">Leave a comment</a></p>
          </div>
        </div>
        <div class="post-aside">
          <div class="post-nav">
            <p><?php previous_post_link('%link', '&laquo; Previous'); ?> <span class="grey">/</span> <?php next_post_link('%link', 'Next &raquo;'); ?></p>
            <ul>
              <li><div class="email"></div><p>Email</p></li>
              <li><div class="facebook"></div><p>Facebook</p></li>
              <li><div class="twitter"></div><p>Twitter</p></li>
              <li><div class="google"></div><p>Google +</p></li>
              <li><div class="tumblr"></div><p>Tumblr</p></li>
              <li><div class="pinterest"></div><p>Pinterest</p></li>
              <li><div class="linkedin"></div><p>LinkedIn</p></li>
            </ul>
          </div>
        </div>
        <div class="post-content">
          <?php the_content(); ?>
          <div class="post-tags">
            Tags: <?php the_tags('', ', '); ?>
          </div>
          <div class="post-comment">
            <?php comments_template(); ?>
          </div>
        </div>
      </div>
      <div class="divider"></div>
<?php get_footer(); ?>