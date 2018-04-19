<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 10/04/2018
 * Time: 1:31 PM
 */
//Calling a template-parts
include 'template-parts/text-restriction.php';
include 'template-parts/placeholder-image.php';

//Hero image HEADER!
$hero_header = limit_text(get_theme_mod('mastertimecenter_home_page_hero_header'),8);
//Hero image PARAGRAPH
$hero_paragraph = limit_text(get_theme_mod('mastertimecenter_home_page_hero_paragraph'),25);
//Who are we SUB TITLE
$who_are_we_sub_title = limit_text(get_theme_mod('mastertimecenter_home_page_who_are_we_sub_title'), 25);
//Who are we PARAGRAPH
$who_are_we_paragraph = limit_text(get_theme_mod('mastertimecenter_home_page_who_are_we_paragraph'), 80);
//Find out more FIRST button title + image
$find_out_more_first_btn_title = limit_text(get_theme_mod('mastertimecenter_home_page_find_out_more_first_btn'),5);
$find_out_more_first_image = get_theme_mod('mastertimecenter_home_page_find_out_more_first_img');
//Find out more SECOND button title + image
$find_out_more_second_btn_title = limit_text(get_theme_mod('mastertimecenter_home_page_find_out_more_second_btn'),5);
$find_out_more_second_image = get_theme_mod('mastertimecenter_home_page_find_out_more_second_img');
//Find out more THIRD button title + image
$find_out_more_third_btn_title = limit_text(get_theme_mod('mastertimecenter_home_page_find_out_more_third_btn'),5);
$find_out_more_third_image = get_theme_mod('mastertimecenter_home_page_find_out_more_third_img');
?>

<?php get_header(); ?>
<div id="home-container">
    <div class="hero-image">
        <div class="hero-image-background">
            <header>
                <div class="woocommerce-cart-icon">
                    <span class="cart-icon cart-customlocation">
                        <a href="<?php echo wc_get_cart_url()?>">
                            <i class="fa fa-shopping-cart fa-lg"></i>
                            <?php $cart_count = WC()->cart->get_cart_contents_count();
                            echo $cart_count;
                                //echo $cart_count > 0 ? '(' . $cart_cart . ')' : '';
                            ?>
                        </a>
                    </span>
                </div>
                <nav><?php wp_nav_menu(array('theme_location' => 'menu-1')); ?></nav>
            </header>
            <div class="hero-image--information">
                <h1><?php echo $hero_header; ?></h1>
                <p><?php echo $hero_paragraph; ?></p>
            </div>
        </div>
    </div>
    <div class="home-content">
        <div class="home-content--who-are-we">
            <h2>Who are we?</h2>
            <h5><?php echo $who_are_we_sub_title; ?></h5>
            <p><?php echo $who_are_we_paragraph; ?></p>
            <a href="about">
                <div class="home-content--about-us-btn">
                    <p>I like to know more!</p>
                </div>
            </a>
        </div>
        <div class="home-content--links">
            <h1>Find out more!</h1>
            <div class="three-links">
                <div class="meet-the-team links">
                    <div class="meet-the-team-img img-links" style="background-image:url('<?php echo get_placeholder_image($find_out_more_first_image); ?>')"></div>
                    <a href="about">
                        <div class="meet-the-team-btn links-btn">
                            <p><?php echo $find_out_more_first_btn_title; ?></p>
                        </div>
                    </a>
                </div>
                <div class="watch-repairs links">
                    <div class="watch-repairs-img img-links" style="background-image:url('<?php echo get_placeholder_image($find_out_more_second_image); ?>')"></div>
                    <a href="<?php echo site_url() . '/mtc_service/watch-repair-services/'; ?>">
                        <div class="watch-repairs-btn links-btn">
                            <p><?php echo $find_out_more_second_btn_title; ?></p>
                        </div>
                    </a>
                </div>
                <div class="glass-repairs links">
                    <div class="glass-repairs-img img-links" style="background-image:url('<?php echo get_placeholder_image($find_out_more_third_image); ?>')"></div>
                    <a href="<?php echo site_url() . '/mtc_service/glass-repairs/'; ?>">
                        <div class="glass-repairs-btn links-btn">
                            <p><?php echo $find_out_more_third_btn_title; ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wo-op-heading">
        <h2>Our Products</h2>
    </div>
    <div class="wo-op">
        <?php
        $args = array(
        'post_type' => 'product',
        'posts_per_page' => 5
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) {
        while ($loop->have_posts()) {
        $loop->the_post();
        ?>
            <div class="wo-op--our-product">
                <a href="<?php echo get_permalink(get_page_by_path('product')->ID) ?>">
                <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
            </div>
        <?php }
        } ?>
    </div>
</div>
<?php get_footer(); ?>
