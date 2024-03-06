<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Controllers;

/**
 * Description of IndexController
 *
 * @author leonid
 */
class IndexController extends Controller
{
    public function index()
    {
         $page = $this->container->view;
         $page->view('index');
//        $this->container->view->view('index');
    }
}
