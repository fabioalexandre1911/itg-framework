<?php
if (!function_exists('sierraFrameworkEnqueue')) :

    function sierraFrameworkEnqueue()
    {

        wp_enqueue_style('sierraFrameworkStyle', INCLUDE_PATH . '/build/index.css', '', THEME_VERSION, 'all');
        wp_enqueue_style('sierraFrameworkFontMain', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', '', THEME_VERSION, 'all');
        wp_enqueue_style('sierraFrameworkFontHeading', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap', '', THEME_VERSION, 'all');
        wp_enqueue_script('sierraFrameworkJquery', 'https://code.jquery.com/jquery-3.6.3.min.js', array('wp-color-picker'), THEME_VERSION, true);
        wp_enqueue_script('sierraFrameworkIcons', 'https://kit.fontawesome.com/f962440187.js', '', THEME_VERSION, true);
        wp_enqueue_script('sierraFrameworkScript', INCLUDE_PATH . '/build/index.js', '', THEME_VERSION, true);
    }

    add_action('wp_enqueue_scripts', 'sierraFrameworkEnqueue');
    add_action('admin_enqueue_scripts', 'sierraFrameworkEnqueue');

endif;
