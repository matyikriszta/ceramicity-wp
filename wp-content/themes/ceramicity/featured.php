<ul>
  <?php $the_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
  <li><?php the_content(__('(more…)')); ?></li>
  <?php endwhile;?>
</ul>