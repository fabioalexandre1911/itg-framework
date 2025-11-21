<?php
function sierraFrameworkCustomizer($wp_customize)
{
    /** panels */
    $wp_customize->add_panel('panel__sierra', array(
        'priority' => 30,
        'capabilities' => 'edit_theme_optinos',
        'theme_supports' => '',
        'title' => __('Framework', THEME_TEXTDOMAIN),
        'description' => __('Personalize o seu framework', THEME_TEXTDOMAIN)
    ));

    /** section */
    $wp_customize->add_section('section__sierra', array(
        'title' => __('Framework', THEME_TEXTDOMAIN),
        'priority' => 1,
        'panel' => 'panel__sierra'
    ));

    /** setting */
    $wp_customize->add_setting('setting__home_hero_title', array(
        'default' => 'Framework',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('setting__home_hero_title_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'capability' => "edit_theme_options"
    ));


    $wp_customize->add_setting('setting__home_hero_image', array(
        'default' => '',
        'transport' => 'refresh',
        'capability' => "edit_theme_options"
    ));

    /** control */
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'setting__home_hero_title', array(
        'label' => __('Chamada Principal da Homepage', THEME_TEXTDOMAIN),
        'section' => 'section__sierra',
        'settings' => 'setting__home_hero_title',
        'type' => 'textarea'
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'setting__home_hero_title_color', array(
        'label' => __('Cor da Chamada Principal da Homepage', THEME_TEXTDOMAIN),
        'section' => 'section__sierra',
        'settings' => 'setting__home_hero_title_color',
    )));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'setting__home_hero_image', array(
        'label' => __('Imagem da Chamada Principal da Homepage', THEME_TEXTDOMAIN),
        'section' => 'section__sierra',
        'settings' => 'setting__home_hero_image',
    )));
}

add_action('customize_register', 'sierraFrameworkCustomizer');
