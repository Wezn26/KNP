<?php

use App\Kernel\Controllers\HomeController;
use App\Kernel\Controllers\IndexController;
use App\Kernel\Controllers\MoviesController;
use App\Kernel\Router\Route;

return [
    Route::get('/', [IndexController::class, 'index']),
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies', [MoviesController::class, 'index']),
    Route::get('/test', function() {
        echo 'Test';
    }),
//    '/' => function() {
//        require_once APP_PATH . '/App/views/pages/index.php';
//    }
];

