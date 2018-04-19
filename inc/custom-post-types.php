<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 12/04/2018
 * Time: 1:30 PM
 */


/*
 * Creating post types
 */
function mastertimecenter_create_post_types(){
    register_post_type('mtc_service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('service')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array(
                'editor',
                'title',
                'thumbnail'
            )
        )
    );

    // About list post
    register_post_type('mtc_about_list',
        array(
            'labels' => array(
                'name' => __('About lists'),
                'singular_name' => __('About list')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 6,
            'supports' => array(
                'title'
            )
        ));

//    create a new taxonomy for custom post types
    register_taxonomy(
        'mtc_service_service',
        'mtc_service',
        array(
            'label' => __('Service'),
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            )
        )
    );
}
add_action('init', 'mastertimecenter_create_post_types');