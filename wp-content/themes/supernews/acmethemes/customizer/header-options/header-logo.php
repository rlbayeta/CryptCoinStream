<?php
global $wp_version;
// Return if wp version less than 4.5
if ( version_compare( $wp_version, '4.5', '<' ) ) {
    /*header logo*/
    $wp_customize->add_setting( 'supernews_theme_options[supernews-header-logo]', array(
        'capability'		=> 'edit_theme_options',
        'default'			=> $defaults['supernews-header-logo'],
        'sanitize_callback' => 'supernews_sanitize_image',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'supernews_theme_options[supernews-header-logo]',
            array(
                'label'		=> __( 'Logo', 'supernews' ),
                'section'   => 'title_tagline',
                'settings'  => 'supernews_theme_options[supernews-header-logo]',
                'type'	  	=> 'image',
                'priority'  => 10
            )
        )
    );
}

/*header logo/text display options*/
$wp_customize->add_setting( 'supernews_theme_options[supernews-header-id-display-opt]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['supernews-header-id-display-opt'],
    'sanitize_callback' => 'supernews_sanitize_select'
) );
$choices = supernews_header_id_display_opt();
$wp_customize->add_control( 'supernews_theme_options[supernews-header-id-display-opt]', array(
    'choices'  	=> $choices,
    'label'		=> __( 'Logo/Site Title-Tagline Display Options', 'supernews' ),
    'section'   => 'title_tagline',
    'settings'  => 'supernews_theme_options[supernews-header-id-display-opt]',
    'type'	  	=> 'radio',
    'priority'  => 30
) );