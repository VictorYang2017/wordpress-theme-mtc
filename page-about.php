<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 10/04/2018
 * Time: 1:31 PM
 */
?>
    <!--'--><?php //echo get_theme_mod('mastertimecenter_about_banner_image', site_url() . '/wp-content/uploads/2018/04/main-banner.jpg'); ?><!--'-->

<?php
include 'template-parts/text-restriction.php';
include 'template-parts/placeholder-image.php';
//Banner image
$banner_image = get_theme_mod('mastertimecenter_about_banner_image');
?>

<?php get_header();
//Get from customizer
$about_text = get_theme_mod('mastertimecenter_about_text');
?>
    <div class="about-container">
        <?php get_template_part('template-parts/custom-main-nav'); ?>
        <div class="banner" style="background-image:url('<?php echo get_placeholder_image($banner_image); ?>')"></div>
        <div class="about-information">
            <div class="about-information--info">
                <h2><?php echo get_theme_mod('mastertimecenter_about_header'); ?></h2>
                <h5><?php echo limit_text(get_theme_mod('mastertimecenter_about_sub_header'), 30); ?></h5>
                <p>
                    <?php if ($about_text || is_customize_preview()):
                        echo wpautop($about_text);
                    endif; ?>
                </p>
            </div>
            <div class="about-information--points">
                <div class="points-heading">
                    <h2>We are :</h2>
                </div>
                <div class="points">
                    <?php
                    $args = array(
                        'post_type' => 'mtc_about_list',
                        'post_per_page' => 20
                    );
                    $about_list_loop = new WP_Query($args);
                    $posts = $about_list_loop->get_posts();
                    $first_half_list = array_slice($posts, 0, 11);
                    $second_half_list = array_slice($posts, 10);
                    ?>
                    <div class="left-side-list">
                        <ul>
                            <?php if ($first_half_list) {
                                foreach ($first_half_list as $first_each_point) { ?>
                                    <li><?php echo $first_each_point->post_title ?></li>
                                <?php }
                            } ?>
                        </ul>
                    </div>
                    <div class="right-side-list">
                        <ul>
                            <?php if ($second_half_list) {
                                foreach ($second_half_list as $second_each_point) { ?>
                                    <li><?php echo $second_each_point->post_title; ?></li>
                                <?php }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>