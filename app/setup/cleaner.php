<?php

if (!function_exists('sierraFrameworkCleaner')) :
    function sierraFrameworkCleaner()
    {
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link');
        remove_action('wp_print_style', 'print_emoji_styles');
    }
    add_action('after_setup_theme', 'sierraFrameworkCleaner');
endif;
