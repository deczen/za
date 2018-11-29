<?php
function artifakt_customize_register($wp_customize){
    
    $wp_customize->add_section('artifakt_color_scheme', array(
        'title'    => __('Client Details', 'artifakt'),
        'description' => '',
        'priority' => 120,
    ));
 
    //  =============================
    //  = Phone Number                =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[phone_number]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('artifakt_phone_number', array(
        'label'      => __('Phone Number', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[phone_number]',
    ));
    //  =============================
    //  = Email               =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[email_address]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_email_address', array(
        'label'      => __('Email Address', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[email_address]',
    ));

    //  =============================
    //  = Facebook               =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[facebook]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_facebook', array(
        'label'      => __('Facebook', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[facebook]',
    ));

    //  =============================
    //  = Twitter                =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[twitter]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_twitter', array(
        'label'      => __('Twitter', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[twitter]',
    ));

    //  =============================
    //  = Instagram               =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[instagram]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_instagram', array(
        'label'      => __('Instagram', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[instagram]',
    ));

    //  =============================
    //  = Pintrest              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[pintrest]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_pintrest', array(
        'label'      => __('Pintrest', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[pintrest]',
    ));

    //  =============================
    //  = Google Plus                =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[gplus]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_gplus', array(
        'label'      => __('Google+', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[gplus]',
    ));

    //  =============================
    //  = Linkedin               =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[linkedin]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_linkedin', array(
        'label'      => __('Linkedin', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[linkedin]',
    ));

    //  =============================
    //  = Youtube                =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[youtube]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_youtube', array(
        'label'      => __('Youtube', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[youtube]',
    ));
    //  =============================
    //  = Address               =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[address]', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('artifakt_Address', array(
        'label'      => __('Address', 'artifakt'),
        'section'    => 'artifakt_color_scheme',
        'settings'   => 'artifakt_theme_options[address]',
    ));

    //  =============================
    //  = Header Logo              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[header_logo]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => __('Header Logo', 'artifakt'),
        'section'  => 'artifakt_color_scheme',
        'settings' => 'artifakt_theme_options[header_logo]',
    )));
    //  =============================
    //  = Brokerage Logo              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[brokerage_logo]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'brokerage_logo', array(
        'label'    => __('Brokerage Logo', 'artifakt'),
        'section'  => 'artifakt_color_scheme',
        'settings' => 'artifakt_theme_options[brokerage_logo]',
    )));
    //  =============================
    //  = Footer Logo              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[footer_logo]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Footer Logo', 'artifakt'),
        'section'  => 'artifakt_color_scheme',
        'settings' => 'artifakt_theme_options[footer_logo]',
    )));
    //  =============================
    //  = Alt Brokerage Logo              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[alt_brokerage_logo]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'alt_brokerage_logo', array(
        'label'    => __('Alt. Brokerage Logo', 'artifakt'),
        'section'  => 'artifakt_color_scheme',
        'settings' => 'artifakt_theme_options[alt_brokerage_logo]',
    )));
    //  =============================
    //  = Map Icon              =
    //  =============================
    $wp_customize->add_setting('artifakt_theme_options[map_icon]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'map_icon', array(
        'label'    => __('Map Icon', 'artifakt'),
        'section'  => 'artifakt_color_scheme',
        'settings' => 'artifakt_theme_options[map_icon]',
    )));

}
add_action('customize_register', 'artifakt_customize_register');
