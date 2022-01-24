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
			'name' => __( 'Info 1 Picture', 'taniti' ),
			'id' => 'info-1-picture',
			'description' => __( 'First Island Picture. ', 'taniti' ),
			'before_widget' => '<div class="home-info-picture">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="picture-title">',
			'after_title' => '</h2>'
		)
	);

    register_sidebar(
		array(
			'name' => __( 'Info 1 Text', 'taniti' ),
			'id' => 'info-1-text',
			'description' => __( 'First Island Info Area. ', 'taniti' ),
			'before_widget' => '<div class="home-info-text d-flex justify-content-center align-items-center flex-column">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="info-title">',
			'after_title' => '</h2>'
		)
	);

    register_sidebar(
		array(
			'name' => __( 'Info 2 Picture', 'taniti' ),
			'id' => 'info-2-picture',
			'description' => __( 'Second Island Picture. ', 'taniti' ),
			'before_widget' => '<div class="home-info-picture">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="picture-title">',
			'after_title' => '</h2>'
		)
	);

    register_sidebar(
		array(
			'name' => __( 'Info 2 Text', 'taniti' ),
			'id' => 'info-2-text',
			'description' => __( 'Second Island Info Area. ', 'taniti' ),
			'before_widget' => '<div class="home-info-text d-flex justify-content-center align-items-center flex-column">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="info-title">',
			'after_title' => '</h2>'
		)
	);

    register_sidebar(
		array(
			'name' => __( 'Info 3 Picture', 'taniti' ),
			'id' => 'info-3-picture',
			'description' => __( 'Second Island Picture. ', 'taniti' ),
			'before_widget' => '<div class="home-info-picture">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="picture-title">',
			'after_title' => '</h2>'
		)
	);

    register_sidebar(
		array(
			'name' => __( 'Info 3 Text', 'taniti' ),
			'id' => 'info-3-text',
			'description' => __( 'Second Island Info Area. ', 'taniti' ),
			'before_widget' => '<div class="home-info-text d-flex justify-content-center align-items-center flex-column">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="info-title">',
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