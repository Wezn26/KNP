<?php

use App\Kernel\Controllers\IndexController;
use App\Kernel\Router\Route;

return [
    Route::get('/', [IndexController::class, 'index']),
//    '/' => function() {
//        require_once APP_PATH . '/App/views/pages/index.php';
//    }
];

