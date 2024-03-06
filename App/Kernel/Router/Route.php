<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Router;

/**
 * Description of Route
 *
 * @author leonid
 */
class Route
{
    public function __construct(
            private string $uri,
            private string $method,
            private mixed $action,
    )
    {
        
    }
    
    public static function get(string $uri, $action): static 
    {
        return new static($uri, 'GET', $action);
    }
    
    public static function post(string $uri, $action): static 
    {
        return new static($uri, 'POST', $action);
    }
    
    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getAction(): mixed
    {
        return $this->action;
    }



}
