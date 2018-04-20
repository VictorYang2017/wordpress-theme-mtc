<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 16/04/2018
 * Time: 1:20 PM
 */
?>

<?php
/*
 * This is the everything for customizer(Register the customize function)
 */

//Remember $wp_customize object
function mastertimecenter_customize_register($wp_customize)
{
    //-----------------Home page---------------//
    //Hero image header
    $wp_customize->add_section('mastertimecenter_home_page_section',
        array(
            'title' => __('Home Page'),
            'priority' => 20
        ));
    $wp_customize->add_setting('mastertimecenter_home_page_hero_header',
        array(
            'default' => 'Nullam auctor lorem non nunc!'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_hero_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('Hero image header'),
            'settings' => 'mastertimecenter_home_page_hero_header'
        ));

    //Hero image paragraph
    $wp_customize->add_setting('mastertimecenter_home_page_hero_paragraph',
        array(
            'default' => 'Consectetur adipiscing elit. Suspendisse viverra neque quis dui consequat tincidunt. Nulla eleifend condimentum nisi id convallis. Orci varius natoque penatibus et magnis dis parturient montes.'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_hero_paragraph_ctrl',
        array(
            'type' => 'textarea',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('Hero image paragraph'),
            'settings' => 'mastertimecenter_home_page_hero_paragraph'
        ));

    //Home page 'who are we' sub title
    $wp_customize->add_setting('mastertimecenter_home_page_who_are_we_sub_title',
        array(
            'default' => 'Master Time Centre is a family owned business and has been operating for the past 8 years by Philip Green and Paula Massey.'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_who_are_we_sub_title_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Who are we\' sub title'),
            'settings' => 'mastertimecenter_home_page_who_are_we_sub_title'
        ));

    //Home page 'who are we' paragraph
    $wp_customize->add_setting('mastertimecenter_home_page_who_are_we_paragraph',
        array(
            'default' => 'At Master Time Centre we offer a full service for repairs and restoration of all timepieces, modern and vintage. As well as watch repairs we specialise in glass replacement with an extensive range of glasses available, we can cut and fit glasses for a large variety of goods. Our work is carried out by experienced watchmakers, and our workmanship is fully guaranteed.'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_who_are_we_paragraph_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Who are we\' paragraph'),
            'settings' => 'mastertimecenter_home_page_who_are_we_paragraph'
        ));

    //Home page 'find out more' first button title + Image
    //Text!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_first_btn',
        array(
            'default' => 'Meet the team'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_find_out_more_first_btn_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' first button title'),
            'settings' => 'mastertimecenter_home_page_find_out_more_first_btn'
        ));
    //Image!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_first_img',array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mastertimecenter_home_page_find_out_more_first_img_ctrl',
        array(
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' first image'),
            'settings' => 'mastertimecenter_home_page_find_out_more_first_img'
        )
    ));

    //Home page 'find out more' second title + image
    //Text!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_second_btn',
        array(
            'default' => 'Watch repair'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_find_out_more_second_btn_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' second button title'),
            'settings' => 'mastertimecenter_home_page_find_out_more_second_btn'
        ));
    //Image!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_second_img',array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mastertimecenter_home_page_find_out_more_second_img_ctrl',
        array(
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' second image'),
            'settings' => 'mastertimecenter_home_page_find_out_more_second_img'
        )
    ));

    //Home page 'find out more' third title + image
    //Text!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_third_btn',
        array(
            'default' => 'Watch repair'
        ));
    $wp_customize->add_control('mastertimecenter_home_page_find_out_more_third_btn_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' third button title'),
            'settings' => 'mastertimecenter_home_page_find_out_more_third_btn'
        ));
    //Image!
    $wp_customize->add_setting('mastertimecenter_home_page_find_out_more_third_img',array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mastertimecenter_home_page_find_out_more_third_img_ctrl',
        array(
            'section' => 'mastertimecenter_home_page_section',
            'label' => __('\'Find out more\' third image'),
            'settings' => 'mastertimecenter_home_page_find_out_more_third_img'
        )
    ));




//---------------About us-----------//
    //About text
    $wp_customize->add_section('mastertimecenter_about_section',
        array(
            'title' => __('About'),
            'priority' => 30
        ));
    $wp_customize->add_setting('mastertimecenter_about_text', array());
    $wp_customize->add_control('mastertimecenter_about_text_ctrl',
        array(
            'type' => 'textarea',
            'section' => 'mastertimecenter_about_section',
            'label' => __('About us text'),
            'settings' => 'mastertimecenter_about_text'
        ));


    //About image
    $wp_customize->add_setting('mastertimecenter_about_image', array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'mastertimecenter_about_image_ctrl',
        array(
            'section' => 'mastertimecenter_about_section',
            'label' => __('About us banner'),
            'settings' => 'mastertimecenter_about_image'
        )
    ));

    //Sub header
    $wp_customize->add_setting('mastertimecenter_about_sub_header', array());
    $wp_customize->add_control('mastertimecenter_about_sub_header_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_about_section',
            'label' => __('Sub header'),
            'settings' => 'mastertimecenter_about_sub_header'
        ));

    //Sub header
    $wp_customize->add_setting('mastertimecenter_about_header', array());
    $wp_customize->add_control('mastertimecenter_about_header_ctrl',
        array(
            'type' => 'text',
            'section' => 'mastertimecenter_about_section',
            'label' => __('Header'),
            'settings' => 'mastertimecenter_about_header'
        ));

}

add_action('customize_register', 'mastertimecenter_customize_register');









