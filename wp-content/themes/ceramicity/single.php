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
            <p><span class="grey">By</span> <?php the_author(); ?> <span class="grey">/</span> <?php the_date(); ?> <span class="grey">/</span> <?php the_category(', '); ?> <span class="grey">/</span> Leave a comment  <span class="grey">/</span> Edit</p>
          </div>
        </div>
        <div id="post-content">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="divider"></div>
<?php get_footer(); ?>