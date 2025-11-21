<?php

if (!function_exists('sfwpAddAminPageMenu')) :
    function sfwpAddAminPageMenu()
    {
        add_menu_page('Framework', 'Framework', 'manage_options', 'sfwp', 'sfwpCreateAdminMenuPage', 'dashicons-welcome-widgets-menus', 60);
        add_action('admin_init', 'sfwpCustomSettings');
    }
    add_action('admin_menu', 'sfwpAddAminPageMenu');
endif;

function sfwpCustomSettings()
{

    /** User Social Settings */
    register_setting('sfwp-settings-group', 'user_social_facebook');
    register_setting('sfwp-settings-group', 'user_social_twitter');
    register_setting('sfwp-settings-group', 'user_social_instagram');
    register_setting('sfwp-settings-group', 'user_social_youtube');
    register_setting('sfwp-settings-group', 'user_social_github');
    register_setting('sfwp-settings-group', 'user_social_email');
    /** ./User Social Settings */

    /** User Address Settings */
    register_setting('sfwp-address-group', 'user_address_street');
    register_setting('sfwp-address-group', 'user_address_number');
    register_setting('sfwp-address-group', 'user_address_zipcode');
    register_setting('sfwp-address-group', 'user_address_neighborhood');
    register_setting('sfwp-address-group', 'user_address_city');
    register_setting('sfwp-address-group', 'user_address_state');
    register_setting('sfwp-address-group', 'user_address_complement');
    /** ./User Address Settings */

    add_settings_section('sfwp-config-options', '', 'sfwp_config_options', 'sfwp_options');
    add_settings_section('sfwp-config-address', '', 'sfwp_address_options', 'sfwp_address');

    /** User Social Settings */
    add_settings_field('sfwp-config-user-social-facebook', '<i class="fa fa-facebook"></i> URL do Facebook', 'user_social_facebook', 'sfwp_options', 'sfwp-config-options');
    add_settings_field('sfwp-config-user-social-twitter', '<i class="fa fa-twitter"></i> URL do Twitter', 'user_social_twitter', 'sfwp_options', 'sfwp-config-options');
    add_settings_field('sfwp-config-user-social-instagram', '<i class="fa fa-instagram"></i> URL do Instagram', 'user_social_instagram', 'sfwp_options', 'sfwp-config-options');
    add_settings_field('sfwp-config-user-social-youtube', '<i class="fa fa-youtube"></i> URL do Youtube', 'user_social_youtube', 'sfwp_options', 'sfwp-config-options');
    add_settings_field('sfwp-config-user-social-github', '<i class="fa fa-github"></i> URL do Github', 'user_social_github', 'sfwp_options', 'sfwp-config-options');
    add_settings_field('sfwp-config-user-social-email', '<i class="fa fa-envelope"></i> Endereço de e-mail', 'user_social_email', 'sfwp_options', 'sfwp-config-options');
    /** ./User Social Settings */

    /** User Address Settings */
    add_settings_field('sfwp-config-user-address-street', '<i class="fa fa-map"></i> Endereço (Rua):', 'user_address_street', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-number', '<i class="fa fa-map"></i> Número:', 'user_address_number', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-zipcode', '<i class="fa fa-map"></i> CEP:', 'user_address_zipcode', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-neighborhood', '<i class="fa fa-map"></i> Bairro:', 'user_address_neighborhood', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-city', '<i class="fa fa-map"></i> Cidade:', 'user_address_city', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-state', '<i class="fa fa-map"></i> Estado:', 'user_address_state', 'sfwp_address', 'sfwp-config-address');
    add_settings_field('sfwp-config-user-address-complement', '<i class="fa fa-map"></i> Complemento:', 'user_address_complement', 'sfwp_address', 'sfwp-config-address');
    /** ./User Address Settings */
}

function sfwp_config_options()
{
}

function sfwp_address_options()
{
}

function user_social_facebook()
{
    $userFacebook = get_option('user_social_facebook');
    echo '<input class="sfwp-input" type="url" name="user_social_facebook" placeholder="URL do Facebook:" value="' . $userFacebook . '" />';
}

function user_social_twitter()
{
    $userTwitter = get_option('user_social_twitter');
    echo '<input class="sfwp-input" type="url" name="user_social_twitter" placeholder="URL do Twitter:" value="' . $userTwitter . '" />';
}

function user_social_instagram()
{
    $userInstagram = get_option('user_social_instagram');
    echo '<input class="sfwp-input" type="url" name="user_social_instagram" placeholder="URL do Instagram:" value="' . $userInstagram . '" />';
}

function user_social_youtube()
{
    $userYoutube = get_option('user_social_youtube');
    echo '<input class="sfwp-input" type="url" name="user_social_youtube" placeholder="URL do Youtube:" value="' . $userYoutube . '" />';
}

function user_social_github()
{
    $userGithub = get_option('user_social_github');
    echo '<input class="sfwp-input" type="url" name="user_social_github" placeholder="URL do Github:" value="' . $userGithub . '" />';
}

function user_social_email()
{
    $userEmail = get_option('user_social_email');
    echo '<input class="sfwp-input" type="email" name="user_social_email" placeholder="Endereço de E-mail:" value="' . $userEmail . '" />';
}

function user_address_street()
{
    $value = get_option('user_address_street');
    echo '<input class="sfwp-input" type="text" name="user_address_street" placeholder="Endereço (Rua):" value="' . $value . '" />';
}

function user_address_number()
{
    $value = get_option('user_address_number');
    echo '<input class="sfwp-input" type="text" name="user_address_number" placeholder="Número:" value="' . $value . '" />';
}

function user_address_zipcode()
{
    $value = get_option('user_address_zipcode');
    echo '<input class="sfwp-input" type="text" name="user_address_zipcode" placeholder="CEP:" value="' . $value . '" />';
}

function user_address_neighborhood()
{
    $value = get_option('user_address_neighborhood');
    echo '<input class="sfwp-input" type="text" name="user_address_neighborhood" placeholder="Bairro:" value="' . $value . '" />';
}

function user_address_city()
{
    $value = get_option('user_address_city');
    echo '<input class="sfwp-input" type="text" name="user_address_city" placeholder="Cidade:" value="' . $value . '" />';
}

function user_address_state()
{
    $value = get_option('user_address_state');
    echo '<input class="sfwp-input" type="text" name="user_address_state" placeholder="Estado:" value="' . $value . '" />';
}

function user_address_complement()
{
    $value = get_option('user_address_complement');
    echo '<input class="sfwp-input" type="text" name="user_address_complement" placeholder="Complemento:" value="' . $value . '" />';
}

function sfwpCreateAdminMenuPage()
{
    require_once REQUIRE_PATH . '/app/admin/template.php';
}
