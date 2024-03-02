<?php
require APP_PATH. '/vendor/autoload.php';
spl_autoload_register(function($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        die('ERROR AUTOLOAD!!!');
    }
});