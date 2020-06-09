<?php

/**
 * Plugin Name: wpMockTestPLugin
 */

require_once 'vendor/autoload.php';

function myFunction() {
    do_action( 'my_action', 'foo' );

    return true;
}