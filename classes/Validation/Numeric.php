<?php 
namespace Clinic\Classes\Validation;

    class Numeric implements ValidationRule{
        public function check(string $name,  $value){
            if(! is_numeric($value)){
                return "$name must be only numbers";
            }
            return false;

        }
    }

?>