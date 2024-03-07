<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel;

use App\Kernel\Container\Container;
use App\Kernel\Controllers\Controller;
use App\Kernel\Router\Router;

/**
 * Description of App
 *
 * @author leonid
 */
class App extends Controller
{

    public function run()
    {


        $router = new Router();
        $uri = $this->container->request->uri();
        $method = $this->container->request->method();
        $router->dispatch($uri, $method);
        
        
        //SECOND ROUTER REALIZATION
        //$router = new Router();
        //$uri = $_SERVER['REQUEST_URI'];
        //$method = $_SERVER['REQUEST_METHOD'];
        //$router->dispatch($uri, $method);
      
        // FIRST ROUTER REALIZATION
//        $routes = require_once APP_PATH . '/App/config/routes.php';
//        $uri = $_SERVER['REQUEST_URI'];
//        $routes[$uri]();
    }
}
