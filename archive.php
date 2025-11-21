<?php get_header(); ?>

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
<?php get_footer(); ?>