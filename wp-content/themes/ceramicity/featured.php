<div class="featured-post">
  <?php $the_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <a href="<?php the_permalink() ?>">
        <div class="featured-post-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
      </a>
    <?php endif; ?>
    <div class="featured-post-content">
      <ul class="grey"><?php the_category(', '); ?></ul>
      <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
      <p><?php the_excerpt(); ?></p>
      <p class="grey"><?php the_date(); ?> / Leave a comment</p>
    </div>
  <?php endwhile;?>
</div>