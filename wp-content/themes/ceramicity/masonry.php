<article class="post">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
    <ul class="post-categories"><?php the_category(', '); ?></ul>
    <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
    <?php the_excerpt(''); ?>
    <div class="post-meta">
        <?php the_date(); ?> / 
        <a href="<?php comments_link(); ?>">Leave a comment</a>
    </div>
</article>