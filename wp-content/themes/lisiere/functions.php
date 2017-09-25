<?php


function bbx_theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'bbx_theme_setup' );


function bbx_enqueue_scripts() {
	$js_directory = get_template_directory_uri() . '/javascript/';
	wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'global' );
}
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );



// Size
add_image_size( '800x800', 800, 800, true );
add_image_size( '1800x800', 1800, 800, true );
add_image_size( '800x600', 800, 600, true );

// Post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'service',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
    )
  );
}


// Page option

if( function_exists('acf_add_options_page') ) {
	// Page principale
	acf_add_options_page(array(
		'page_title'    => 'Options',
		'menu_title'    => 'Options',
		'menu_slug'     => 'options-generales',
		'capability'    => 'edit_posts',
		'redirect'      => true
	));

}
