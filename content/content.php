<section class="sfwp-single-meta sfwp-container">
    <div class="sfwp-container__center">
        <div class="sfwp-single-meta__contents">
            <div class="sfwp-single-meta__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="sfwp-single-meta__author">
                <p><strong>Autor:</strong><?php the_author_meta('user_email'); ?></p>
            </div>
            <div class="sfwp-single-meta__title">
                <h1><?php the_title(); ?></h1>
            </div>      
        </div>
    </div>
</section>

<section class="sfwp-single-content sfwp-container">
    <div class="sfwp-container__center">
        <div class="sfwp-single-content__contents">
            <?php the_content(); ?>
        </div>
    </div>
</section>