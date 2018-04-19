<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 19/04/2018
 * Time: 1:35 PM
 */

function get_placeholder_image($user_upload_image){
    if($user_upload_image){
        return $user_upload_image;
    }else{
        $the_place_holder_image = site_url().'/wp-content/themes/master-time-center/assets/images/placeholder-image.png';
        return $the_place_holder_image;
    }
}