<?php


require_once __DIR__ . '/../vendor/autoload.php';

use app\routes\API;
use app\routes\Migrate;
use app\routes\Shop;

use kilyte\Application;

$app = new Application(dirname(__DIR__));

// $app->on(Application::EVENT_BEFORE_REQUEST, function () {
//     // echo "Before request from second installation";
// });

$webroutes = new Shop($app);
$apiroutes = new API($app);
$migration = new Migrate($app);

$app->run();
