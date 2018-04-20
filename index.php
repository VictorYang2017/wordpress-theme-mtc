<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 10/04/2018
 * Time: 12:49 PM
 */
?>

<?php get_header(); ?>
<?php get_template_part('template-parts/custom-main-nav'); ?>
    <div id="content-inner">
    <?php //The loop
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part('template-parts/content');
     endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>
<?php
//get_sidebar('sidebar-1');
get_footer(); ?>