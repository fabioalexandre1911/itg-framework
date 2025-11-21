<?php get_header(); ?>

<main class="sfwp-main">

    <section class="sfwp-404 sfwp-container">
        <div class="sfwp-container__center">
            <div class="sfwp-404__contents">
                <span class="sfwp-404__title">404</span>
                <h1 class="sfwp-404__heading"><?php echo __('Ops:/ Você visitou uma página que não existe', THEME_TEXTDOMAIN) ?></h1>
                <a href="<?= get_home_url(); ?>" class="sfwp-404__link"><?php echo __('Clique aqui para voltar a página principal', THEME_TEXTDOMAIN) ?></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>