<?php get_header(); ?>

<main class="sfwp-main">

    <section class="sfwp-search-top sfwp-container">
        <div class="sfwp-container__center">
            <div class="sfwp-search-top__contents">
                <h1 class="sfwp-search-top__title">
                    <?php echo get_search_query(); ?>
                </h1>
            </div>
        </div>
    </section>

    <section class="sfwp-blog sfwp-container">
        <div class="sfwp-container__center">
            <div class="sfwp-blog__contents sfwp-grid">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        get_template_part('content/content-loop');
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
