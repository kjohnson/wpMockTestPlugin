<?php

/**
 * Plugin Name: wpMockTestPLugin
 * Description: A test plugin with WP_Mock.
 */

require_once 'vendor/autoload.php';

function myFunction() {
    do_action( 'my_action', 'foo' );

    return true;
}