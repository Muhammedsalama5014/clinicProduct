<?php

namespace Clinic\Classes\Models;

use Clinic\Classes\Db;

class Setting extends Db
{
    public function __construct() {
        $this->table = "settings";
        $this->connect();
    }

    public function getAboutHeader() {
        return $this->getKey("about_header");
    }

    public function getAboutBody() {
        return $this->getKey("about_body");
    }

    public function getKey( $key ) {
        $sql = "SELECT value FROM $this->table WHERE name = '$key'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc( $result )['value'];
    }


}