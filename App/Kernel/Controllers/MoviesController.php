<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Controllers;

/**
 * Description of MoviesController
 *
 * @author leonid
 */
class MoviesController extends Controller
{
    public function index(): void
    {
        $page = $this->container->view;
        $page->view('movies');
    }
    
    public function add(): void
    {        
        $page = $this->container->view;
        $page->view('admin/movies/add');
    }
    
    public function store()
    {        
        $request = $this->container->request;
        
       
        $validation = $request->validate([
           'name' => ['required', 'min:3', 'max:50'],
        ]);
               
        if (!$validation) {
            $errors = $request->errors();            
            foreach ($errors as $field => $error) {
                $this->session()->set($field, $error);
            }
            $this->redirect('/admin/movies/add');
        }
        dd('Validation passed!!');
    }
}
