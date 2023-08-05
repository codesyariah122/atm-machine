<?php
require_once 'App/Config/Autoload.php';

use App\Config\Router;

$app = new Router;

$app->group('home', function ($app) {
    $app->get('/', 'ATMMachineController@index');
});

$app->run();