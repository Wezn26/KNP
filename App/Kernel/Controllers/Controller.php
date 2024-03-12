<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Controllers;

use App\Kernel\Container\Container;
use App\Kernel\Session\Session;
use App\Kernel\View\View;

/**
 * Description of Controller
 *
 * @author leonid
 */

abstract class Controller
{
    
    public readonly Container $container;    
    public function __construct()
    {
        $this->container = new Container();
    }
    
    public function redirect($url)
    {
        header("Location: $url");
        exit;
    }
    
    private function getSession()
    {
        $session = new Session();
        return $session;
    }
    
    public function session()
    {
        return $this->getSession();
    }


}
