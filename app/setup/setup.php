<?php
if (!function_exists('sierraFrameworkSetup')) :

    function sierraFrameworkSetup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo');
        add_theme_support('editor-styles');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
        add_theme_support('widgets');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'sierraFrameworkSetup');

endif;
