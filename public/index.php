<?php


require_once __DIR__ . '/../vendor/autoload.php';

use app\routes\Admin;
use app\routes\Migrate;
use app\routes\Shop;

use kilyte\Application;

$app = new Application(dirname(__DIR__), 'shop.error');
$app->layout = 'shop.main';

// $app->on(Application::EVENT_BEFORE_REQUEST, function () {
//     // echo "Before request from second installation";
// });

$webroutes = new Shop($app);
$migration = new Migrate($app);
$admin = new Admin($app);

$app->run();
