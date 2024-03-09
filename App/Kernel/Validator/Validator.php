<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Kernel\Validator;

/**
 * Description of Validator
 *
 * @author leonid
 */
class Validator
{
    private array $errors = [];
    private array $data;
    
    public function valid(array $data, array $rules): bool
    {
        $this->errors = [];
        $this->data = $data;
        
        foreach ($rules as $key => $rule) {
            $rules = $rule;
            
            foreach ($rules as $rule) {
                $rule = explode(':', $rule);
                
                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;
                
                $error = $this->validateRule($key, $ruleName, $ruleValue);
                
                if ($error) {
                    $this->errors[$key];
                }
            }
        }
        
        return empty($this->errors);
    }
    
    public function errors(): array
    {
        return $this->errors;
    }
    
    private function validateRule(
            string $key, 
            string $ruleName, 
            string $ruleValue = null): ?string
    {
        $value = $this->data[$key];
        
        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return "Field $key is required";
                }
                break;
            case 'min':    
                if (strlen($value) < $ruleValue) {
                    return "Field $key must be at least $ruleValue characters long";
                }
                break;
            case 'max':    
                if (strlen($value) > $ruleValue) {
                    return "Field $key must be at most $ruleValue characters long";
                }
                break;
            case 'email':    
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    return "Field $key must be a valid email address";
                }
                break;
            case 'confirmed':    
                if ($value !== $this->data["{$key}_confirmation"]) {
                    return "Field $key must be confirmed";
                }
                break;           
        }
        return false;
    }
}
