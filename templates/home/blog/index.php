<section class="sfwp-blog sfwp-container">
    <div class="sfwp-container__center">
        <div class="sfwp-blog__contents sfwp-grid">
            <?php
            $filter = [
                "post_type" => "post",
                "posts_per_page" => THEME_POSTLIMIT
            ];
            $query = new WP_Query($filter);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    get_template_part('content/content-loop');
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>