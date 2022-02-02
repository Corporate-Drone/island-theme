<?php 

// Including stylesheet and script files
function load_scripts(){
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );	
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Main configuration function
function taniti_config(){

	// Registering our menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Navigation Bar',
			'footer_menu' => 'Footer Menu'
		)
	);

	add_theme_support( 'post-thumbnails');
	add_theme_support( 'post-formats', array( 'video', 'image') );
}
add_action( 'after_setup_theme', 'taniti_config', 0 );

// Registering our sidebars
add_action( 'widgets_init', 'taniti_sidebars' );
function taniti_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'taniti' ),
			'id' => 'sidebar-1',
			'description' => __( 'This is the Home Page Sidebar. You can add your widgets here. ' , 'taniti' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Social Media Icons', 'taniti' ),
			'id' => 'social-media',
			'description' => __( 'Social Media Icons Widget Area. Drag and drop your widgets here. ', 'taniti' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);								
}

?>