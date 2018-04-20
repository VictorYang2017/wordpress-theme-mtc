<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 11/04/2018
 * Time: 1:02 PM
 */
include 'text-restriction.php';
?>
<!--Post content-->
<a href="<?php site_url() ?>"><div class="each-blog">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
        <div class="each-blog--info">
            <h1><?php the_title();?></h1>
            <h5><?php the_date(); ?></h5>
            <p><?php echo wp_trim_words( get_the_content(), $num_words = 80);?></p>
        </div>
    </div></a>
