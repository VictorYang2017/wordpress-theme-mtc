<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 17/04/2018
 * Time: 2:28 PM
 */

/*
 * Woocommerce setup
 */
function mastertimecenter_woocommerce_setup(){
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Remove related products
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

    add_filter('woocommerce_product_related_posts_query', '__return_empty_array', 100);

}
add_action('after_setup_theme','mastertimecenter_woocommerce_setup');




/*
 * Add "woocommerce active' class to body tag
 */
function mastertimecenter_woocommerce_active_body_class(){
    $classes[] = 'woocommerce-active';
    return $classes;
}

add_filter('body_class', 'mastertimecenter_woocommerce_active_body_class');








/*
 * Woocommerce scripts(Add styles)
 */
function mastertimecenter_woocommerce_scripts(){
    wp_enqueue_style('mastertimecenter-woocommerce-style', get_template_directory_uri().'/woocommerce.css');
}
add_action('wp_enqueue_scripts','mastertimecenter_woocommerce_scripts');


