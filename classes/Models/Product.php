<?php 
namespace Clinic\Classes\Models;
use Clinic\Classes\Db;

class Product extends Db{
    public function __construct(){
        $this->table = "products";
        $this->connect();
    }

    public function selectLimit($fileds = "*" , $limit = 1){
        $sql = "SELECT $fileds FROM $this->table LIMIT $limit";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
/*
    public function selectById($id,string $fileds = "products.*")
    {
        $sql = "SELECT $fileds FROM $this->table JOIN cats
            ON $this->table.cat_id = cats.id 
            WHERE products.id = $id";

        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function selectAllWithCats($fileds = "*"){
        $sql = "SELECT $fileds FROM $this->table JOIN cats
         ON $this->table.cat_id = cats.id
          ORDER BY $this->table.id DESC";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }*/
}
