<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Http;

/**
 * Description of Request
 *
 * @author leonid
 */
class Request
{
    public function __construct(
            public readonly array $get,
            public readonly array $post,
            public readonly array $server,
            public readonly array $files,
            public readonly array $cookies,
    )
    {
        
    }
    
    public static function createFromGlobals(): static 
    {
        return new static(
                $_GET,
                $_POST,
                $_SERVER,
                $_FILES,
                $_COOKIE,
        );
    }
    
    public function uri(): string
    {
        return strtok($this->server['REQUEST_URI'], '?');
    }
    
    public function method(): string
    {
        return $this->server['REQUEST_METHOD'];
    }
}
