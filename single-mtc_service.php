<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 13/04/2018
 * Time: 12:30 PM
 */

?>
<?php get_header(); ?>
<?php get_template_part('template-parts/custom-main-nav'); ?>
<div id="content-inner">
    <?php //The loop
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
        <h1><?php the_title(); ?></h1>
        <?php wpautop(the_content()); ?>
        <?php the_terms($post->ID, 'mtc_service_service', 'Service: ', ' | ', ' '); ?>
    <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php
//get_sidebar('sidebar-1');
get_footer(); ?>
