<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 10/04/2018
 * Time: 1:31 PM
 */
include 'template-parts/text-restriction.php';
?>

<?php get_header();
//Get from customizer
$about_text = get_theme_mod('mastertimecenter_about_text');
?>
<div class="about-container">
    <?php get_template_part('template-parts/custom-main-nav'); ?>
    <div class="banner"
         style="background-image:url('<?php echo get_theme_mod('mastertimecenter_about_banner_image', site_url() . '/wp-content/uploads/2018/04/main-banner.jpg'); ?>')"></div>
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
                <ul>
                    <?php
                    $args = array(
                        'post_type' => 'mtc_about_list',
                        'post_per_page' => 20
                    );
                    $about_list_loop = new WP_Query($args);
                    if ($about_list_loop->have_posts()) {

                        while ($about_list_loop->have_posts()) {
                            $about_list_loop->the_post();

                            ?>

                            <?php if ($about_list_loop->get_posts() >= 10){?>
                                <li><?php the_title(); ?></li>
                            <?php
                            }
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>