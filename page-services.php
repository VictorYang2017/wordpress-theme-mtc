<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 12/04/2018
 * Time: 1:45 PM
 */
?>

<?php get_header(); ?>
<?php get_template_part('template-parts/custom-main-nav'); ?>
<section>
    <?php
    $args = array(
        'post_type' => 'mtc_service',
        'posts_per_page' => -1
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
            <div class="individual-service">
                <div class="individual-service--image">
                    <a href="<?php echo site_url().'/'.$post->post_type.'/'.$post->post_name;?>">
                        <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
                    </a>
                </div>
                <div class="individual-service--information">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php }
    } ?>
</section>
<?php get_footer(); ?>
