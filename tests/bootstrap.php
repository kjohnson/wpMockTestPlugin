<?php

include_once __DIR__.'/../vendor/autoload.php';

WP_Mock::setUsePatchwork( false );
WP_Mock::bootstrap();

require_once __DIR__ . '/../plugin.php';
