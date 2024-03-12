<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Http;

use App\Kernel\Controllers\Controller;
use App\Kernel\Validator\Validator;


/**
 * Description of Request
 *
 * @author leonid
 */
class Request extends Controller
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
    
    public function input(string $key, $default = null): mixed
    {
        return $this->post[$key] ?? $this->get[$key] ?? $default;
    }
    
    public function validate(array $rules): bool
    {
        $validator = $this->getValidator();
        $data = [];
        foreach ($rules as $field => $rule) {
            $data[$field] = $this->input($field);
        }
        return $validator->valid($data, $rules);
    }
    
    private function getValidator(): Validator
    {
        $validator = $this->validator = new Validator();
        return $validator;
    }
    
    public function errors(): array
    {
        $errors = $this->getValidator()->errors();
        return $errors;
    }
}
