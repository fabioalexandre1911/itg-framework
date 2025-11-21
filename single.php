<?php
get_header();
?>

<main class="sfwp-main">

    <?php
    if (have_posts()) :
        the_post();
        get_template_part('content/content');
    endif;
    ?>

</main>

<?php get_footer(); ?>