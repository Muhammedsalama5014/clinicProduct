<?php 
namespace Clinic\Classes\Models;
use Clinic\Classes\Db;
class Cats extends Db{
    public function __construct(){
        $this->table = "cats";
        $this->connect();
    }
}

?>