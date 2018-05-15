<?php
/*adding theme options panel*/
$wp_customize->add_panel( 'supernews-design-panel', array(
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Layout/Design Option', 'supernews' )
) );

/*
* file for sidebar layout
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/sidebar-layout.php');

/*
* file for front page sidebar layout options
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/front-page-sidebar-layout.php');

/*
* file for front archive sidebar layout options
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/archive-sidebar-layout.php');

/*
* Category color options
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/colors-cats.php');

/*
* file for sticky sidebar
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/sticky-sidebar.php');

/*
* file for blog layout
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/blog-layout.php');

/*
* file for color options
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/colors-options.php');

/*
* file for background image layout
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/background-image.php');

/*
* file for custom css
*/
require_once supernews_file_directory('acmethemes/customizer/design-options/custom-css.php');