<?php

namespace Clinic\Classes\Models;

use Clinic\Classes\Db;
class Blog extends Db
{
    public function __construct(){
        $this->table = "blogs";
        $this->connect();
    }

}