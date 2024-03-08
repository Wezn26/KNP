<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;
use const APP_PATH;

/**
 * Description of View
 *
 * @author leonid
 */
class View
{
    public function view(string $name): void
    {
        $viewPath = APP_PATH . "/App/views/pages/$name.php";
        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException("View $name not found!!!");
        }
        extract([
            'view' => $this,
        ]);
        
        require $viewPath;
    }
    
    public function component(string $name): void
    {
        $componentPath = APP_PATH . "/App/views/components/$name.php";
        if (!file_exists($componentPath)) {
            echo "Component $name not found!!!";
            return;
        }
        
        require $componentPath;
    }
}
