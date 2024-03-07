<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel;

use App\Kernel\Router\Router;

/**
 * Description of App
 *
 * @author leonid
 */
class App
{
    public function run()
    {
        $router = new Router();
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $router->dispatch($uri, $method);
        
        
        // FIRST ROUTER REALIZATION
//        $routes = require_once APP_PATH . '/App/config/routes.php';
//        $uri = $_SERVER['REQUEST_URI'];
//        $routes[$uri]();
    }
}
