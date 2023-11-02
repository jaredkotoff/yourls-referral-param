<?php
/*
Plugin Name: Referral Parameter
Plugin URI: https://github.com/jaredkotoff/yourls-referral-param
Description: Track clicks based on url parameter
Version: 1.0
Author: Jared.K
Author URI: https://jared.land
 */

// No direct call
if (!defined('YOURLS_ABSPATH')) {
    die();
}

// Redirection: http://sho.rt/ABC first converted to http://sho.rt/abc
yourls_add_filter('get_request', 'jk_ref_param_get_ref');
function jk_ref_param_get_ref($keyword) {
    echo $keyword;
    return $keyword;
}

/*

Your code goes here.

Suggested read:
https://docs.yourls.org/guide/extend/plugins.html
https://docs.yourls.org/development/plugins.html
https://docs.yourls.org/development/coding-standards.html
and in general the whole "Development" section on https://docs.yourls.org/

Have fun!

 */
