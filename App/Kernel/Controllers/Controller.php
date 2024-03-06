<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Controllers;

use App\Kernel\View\View;

/**
 * Description of Controller
 *
 * @author leonid
 */

abstract class Controller
{
    private View $view;
    
    public function __construct()
    {
        return $this->view;
    }

}
