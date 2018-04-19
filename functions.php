<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 10/04/2018
 * Time: 12:30 PM
 */

/*
 * inc file links
 */
// Custom post type
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/woocommerce.php';

/*
 * Setup
 */
function mastertimecenter_setup(){
//  Enable support for featured images
    add_theme_support('post-thumbnails');

//    Enable support for categories
    add_theme_support('post-formats', array('gallery','video'));

//    This is the menu
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'mastertimecenter'),
            'menu-2' => esc_html__('Secondary', 'mastertimecenter')
        )
    );
}
add_action('after_setup_theme','mastertimecenter_setup');


/*
 * This is style function
 */
function mastertimecenter_scripts(){
    wp_enqueue_style('mastertimecenter-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','mastertimecenter_scripts');









/**
 * Add a sidebar.
 */
//function mastertimecenter_widgets_init() {
//    register_sidebar( array(
//        'name'          => __( 'Primary Sidebar', 'theme_name' ),
//        'id'            => 'sidebar-1',
//        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//        'after_widget'  => '</aside>',
//        'before_title'  => '<h2 class="widget-title">',
//        'after_title'   => '</h2>',
//    ) );
//}
//add_action( 'widgets_init', 'mastertimecenter_widgets_init' );


/*
 * Custom headers
 */
function mastertimecenter_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'assets/images/main-banner.jpg',
        'default-text-color' => 'fff',
        'width'              => 1920,
        'height'             => 600,
        'flex-width'         => true,
        'flex-height'        => true,
        'header-text'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'mastertimecenter_custom_header_setup' );



