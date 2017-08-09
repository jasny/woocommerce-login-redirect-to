<?php

/*
 *   Plugin Name: WooCommerce login redirect_to
 *   Description: Support for `redirect_to` query parameter to specify a redirect page after login via WooCommerce user profile page.
 *   Version: 1.0.0
 *   Author: Jasny
 *   Author URI: http://www.jasny.net
 *   License: MIT
 */

   
function on_woocommerce_login_redirect_to($redirect, $user)
{
    return !empty($_GET['redirect_to']) ? $_GET['redirect_to'] : $redirect;
}

// add the filter 
add_filter('woocommerce_login_redirect', on_woocommerce_login_redirect_to, 10, 2 );
