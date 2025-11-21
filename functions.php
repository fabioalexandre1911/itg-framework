<?php

/**
 * @package sierra-framework
 * @version: 1,0
 */

/** theme confis */
const THEME_TEXTDOMAIN = "sierra-framework";
const THEME_VERSION = 1.0;
const THEME_POSTLIMIT = 8;

/** user settings */
define('USER_FACEBOOK', esc_attr(get_option('user_social_facebook')));
define('USER_TWITTER', esc_attr(get_option('user_social_twitter')));
define('USER_YOUTUBE', esc_attr(get_option('user_social_youtube')));
define('USER_INSTAGRAM', esc_attr(get_option('user_social_instagram')));
define('USER_GITHUB', esc_attr(get_option('user_social_github')));
define('USER_EMAIL', esc_attr(get_option('user_social_email')));

define('USER_ADDRESS_STREET', esc_attr(get_option('user_address_street')));
define('USER_ADDRESS_NUMBER', esc_attr(get_option('user_address_number')));
define('USER_ADDRESS_ZIPCODE', esc_attr(get_option('user_address_zipcode')));
define('USER_ADDRESS_NEIGHBORHOOD', esc_attr(get_option('user_address_neighborhood')));
define('USER_ADDRESS_CITY', esc_attr(get_option('user_address_city')));
define('USER_ADDRESS_STATE', esc_attr(get_option('user_address_state')));
define('USER_ADDRESS_COMPLEMENT', esc_attr(get_option('user_address_complement')));

/** site settings */
const GOOGLETAGMANAGER = "GTM-123456";

/** path to require file */
define('REQUIRE_PATH', get_stylesheet_directory());
define('INCLUDE_PATH', get_stylesheet_directory_uri());

/** require  */
require_once REQUIRE_PATH . '/app/custom/custom.php';

require_once REQUIRE_PATH . '/app/setup/setup.php';
require_once REQUIRE_PATH . '/app/setup/enqueue.php';
require_once REQUIRE_PATH . '/app/setup/menus.php';
require_once REQUIRE_PATH . '/app/setup/cleaner.php';

require_once REQUIRE_PATH . '/app/admin/admin.php';
require_once REQUIRE_PATH . '/app/admin/customizer.php';
