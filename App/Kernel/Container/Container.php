<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

/**
 * Description of Container
 *
 * @author leonid
 */
class Container
{
    public readonly Request $request;   

    public readonly View $view;
    
    public readonly Validator $validator;

        public function __construct()
    {
        $this->registerServices();
    }

    
    private function registerServices(): void
    {
        $this->request = Request::createFromGlobals();        
        $this->view = new View();
        $this->validator = new Validator();
    }
}
