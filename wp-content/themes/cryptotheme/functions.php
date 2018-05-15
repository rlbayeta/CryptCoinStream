<?php 

if ( ! function_exists('crypto_setup') ) : 

		function crypto_setup() {
			//hadling title 
			add_theme_support( 'title-tag' );
			//thumbnail support
			/*add_theme_support( 'post-thumbnail' );
			// set_post_thumbnail_size( 150,150 );
			//post formats
			add_theme_support('post-formats',array('aside','gallery','link','image','quote','status','video','audio','chat'));
	        // automatic feed links
	        add_theme_support('automatic-feed-links');
	        //add custom bg support
	        add_theme_support( 'custom-background', array() );

	        if ( ! isset( $content_width ) ) $content_width = 698;*/

		}

endif;

add_action('after_setup_theme', 'crypto_setup');

/* Menu */

function register_crypto_menus(){
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'), 
			'footer'  => __('Footer Menu') 
		)
	);
}
add_action( 'init', 'register_crypto_menus' );

/* Scripts */

function crypto_scripts(){
	wp_enqueue_style('crypto_styles',get_stylesheet_uri()); 
	wp_enqueue_style('crypto_bootstrap_css','https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');

	wp_enqueue_script('crypto_bootstrap_js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js ');
	wp_enqueue_script('jquery'); 
}
add_action('wp_enqueue_scripts','crypto_scripts');

/* Widgets */

function crypto_widgets_init(){
	register_sidebars( 	array(
		'name'          => __('Main Sidebar','crypto'),
		'id'            => 'main-sidebar', 
		'description'   => __('Widgets for sidebar', 'crypto'),
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '<section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	));
}
add_action('widgets_init', 'crypto_widgets_init');

?>


