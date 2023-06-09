<?php 
namespace Clinic\Classes\Models;
use Clinic\Classes\Db;
use Clinic\Classes\Session;

class Admin extends Db{
    public function __construct(){
        $this->table = "admin";
        $this->connect();
    }

    public function login(string $email , string $password, Session $session){
        $sql = "SELECT * FROM $this->table WHERE email = '$email' LIMIT 1"; 
        $result = mysqli_query($this->conn, $sql);
        $admin = mysqli_fetch_assoc($result);
        //return $admin;
        if(! empty($admin)){
            $hashedpassword = $admin['password'];
            $isSame = password_verify($password , $hashedpassword);
            if($isSame){
                $session->set("adminId",$admin['id']);
                $session->set("adminName",$admin['name']);
                $session->set("adminEmail",$admin['email']);
                return true ;
            }else{
                return false ;
            }
        }else{
            return false ;
        }
         
    }
    public function logout(Session $session){
        $session->remove('adminId');
        $session->remove('adminName');
        $session->remove('adminEmail');
    }
}

?>