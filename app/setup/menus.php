<?php
if (!function_exists('sierraFrameworkMenus')) :

    function sierraFrameworkMenus()
    {
        register_nav_menu('primary', __('Menu Principal', THEME_TEXTDOMAIN));
        register_nav_menu('footer', __('Menu Footer', THEME_TEXTDOMAIN));
    }

    add_action('after_setup_theme', 'sierraFrameworkMenus');

endif;
