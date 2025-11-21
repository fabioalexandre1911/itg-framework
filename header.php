<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php get_template_part('includes/google-tag-manager-head'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('includes/google-tag-manager-body'); ?>

    <header class="sfwp-header sfwp-container sfwp-background__white">
        <div class="sfwp-container__center">
            <div class="sfwp-header__contents sfwp-flex sfwp-flex sfwp-flex--justify__between sfwp-flex--align__center sfwp-flex--direction__row">
                <div class="sfwp-header__logo">
                    <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                        echo __('<h3>Framework</h3>', THEME_TEXTDOMAIN);
                    endif;
                    ?>
                </div>
                <nav class="sfwp-header__navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                    ));
                    ?>
                    <button class="sfwp-header__mobile">
                        <span></span><span></span><span></span>
                    </button>
                    <button class="sfwp-header__search">
                        <span class="fa-solid fa-magnifying-glass"></span>
                    </button>
                </nav>
            </div>
            <div class="sfwp-header__searchform">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>