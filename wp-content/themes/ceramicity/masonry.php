<article class="post">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
    <ul class="grey"><?php the_category(', '); ?></ul>
    <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    <p class="post-excerpt"><?php the_excerpt(); ?></p>
    <p class="grey"><?php the_date(); ?> / Leave a comment</p>
</article>
