<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel;

/**
 * Description of App
 *
 * @author leonid
 */
class App
{
    public function run()
    {
        $routes = require_once APP_PATH . '/App/config/routes.php';
        $uri = $_SERVER['REQUEST_URI'];
        $routes[$uri]();
    }
}
