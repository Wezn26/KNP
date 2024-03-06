<?php

use App\Kernel\App;

define('APP_PATH', dirname(__DIR__));
require APP_PATH . '/autoload.php';

$app = new App();

$main = new \App\Kernel\Controllers\IndexController();
dd($main->index());
$app->run();
