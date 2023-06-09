<?php
namespace Clinic\Classes;
class Session
{
    public function __construct(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
    } 
    public function set(string $key , $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get(string $key)
    {
        return $_SESSION[$key];
    }
    public function has(string $key)
    {
        return isset($_SESSION[$key]);
    }
    public function remove(string $key)
    {
         unset($_SESSION[$key]);
    }
    public function destroy()
    {
        $_SESSION = [];
        session_destroy();
    }
}


?>