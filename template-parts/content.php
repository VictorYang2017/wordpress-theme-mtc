<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 11/04/2018
 * Time: 1:02 PM
 */
?>
<!--Post content-->
<div>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
    <h1><?php the_title();?></h1>
    <h6><?php the_date(); ?></h6>
    <h4><?php the_content();?></h4>
</div>
