<?php
require_once 'App/Config/Autoload.php';

use App\Config\Router;

$app = new Router;

$app->group('home', function ($app) {
    // Homepage route
    $app->get('/', 'HomeController@index');
});

$app->run();