<?php
define('APP_PATH', dirname(__DIR__));
require APP_PATH . '/autoload.php';

$app = new App\App();
dd($app);