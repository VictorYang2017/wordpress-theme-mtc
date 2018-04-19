<?php
/**
 * Created by PhpStorm.
 * User: 845865276
 * Date: 16/04/2018
 * Time: 12:26 PM
 */
?>


<div id="custom-main-nav">
    <header>
        <div class="woocommerce-cart-icon">
            <span class="cart-icon cart-customlocation">
                <a href="<?php echo wc_get_cart_url() ?>">
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
</div>

