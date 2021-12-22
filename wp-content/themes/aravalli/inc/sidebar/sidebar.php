<?php	
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aravalli
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function aravalli_widgets_init() {	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'aravalli' ),
		'id' => 'aravalli-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'aravalli' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'aravalli' ),
		'id' => 'aravalli-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'aravalli' ),
		'before_widget' => '<div class="col-lg-3 col-md-6 mb-lg-0 mb-md-0 mb-4"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );	
}
add_action( 'widgets_init', 'aravalli_widgets_init' );
?>