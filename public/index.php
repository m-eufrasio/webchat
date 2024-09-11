<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

$options = array(
    'cluster' => 'sa1',
    'useTLS' => true
);

$pusher = new Pusher\Pusher(
    '00bfe34ff01e025c27ba',
    'd0e1d2283651974edb48',
    '1850290',
    $options
);
