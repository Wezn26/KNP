<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Router;

/**
 * Description of Router
 *
 * @author leonid
 */
class Router
{
    private array $allRoutes  = [
        'GET' => [],
        'POST' => [],
    ];
    
    public function __construct()
    {
        $this->initRoutes();
    }

    
    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);
        if (!$route) {
            $this->notFound();
        }
        
        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();
             /** @var Controller $controller */
            $controller = new $controller();
            call_user_func([$controller, $action]);
        } else {
            call_user_func($route->getAction());
        }
    }
    
    private function findRoute(string $uri, string $method): Route|false
    {
        $route = $this->allRoutes[$method][$uri];
        if (!isset($route)) {
            return false;
        } else {
            return $route;
        }       
        
    }
    
    private function notFound(): void
    {
        echo '404 | Not Found!!!';
        exit;
    }
    
    private function getRoutes(): array
    {
        return require_once APP_PATH . '/App/config/routes.php';
    }
    
    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->allRoutes[$route->getMethod()][$route->getUri()] = $route;
        }
    }
    
    
}
