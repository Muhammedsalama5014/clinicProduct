<?php
namespace Clinic\Classes\Validation;


interface ValidationRule
{
    public function check(string $name , $value);
    
}

?>