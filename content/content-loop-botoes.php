<article class="sfwp-blog__item sfwp-grid__item sfwp-grid__item-31">
    <div class="sfwp-blog__item-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <h3 class="sfwp-blog__item-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <div class="sfwp-blog__item-excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>