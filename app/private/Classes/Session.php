<?php 

namespace App;
class Session {
    private  $admin_id;

    private $email;

    public function __construct() {
        session_start();
    }


    
    public function set_admin_id($id){
        $this->admin_id = $id ;
        return $this->admin_id;
    }

    public function set_admin_email($email){
        $this->email = $email;  
        return $this->email;
    }
    public function store($email , $admin_id){
        $_SESSION['admin_id'] = $email;
        $_SESSION['email'] = $admin_id;
        return $_SESSION;
    }

    public static function require_login(){
        if(!isset($_SESSION['admin_id'])){
            header('Location: /login.php');
            exit;
        }else{
            return true;
        }
    }

    public function login_check($admin){
        if($admin){
            session_regenerate_id();
            $_SESSION['admin_id']= $admin->id;
            $this->admin_id = $admin->id;
        }
        return true ;
    }

    public function is_logged_in(){
        return isset($this->admin_id);
    }

    public function log_out(){
        unset($_SESSION['admin_id']);
        unset($this->admin_id);
    }

    public function check_current_login(){
        if(isset($_SESSION['admin_id'])){
            $this->admin_id = $_SESSION['admin-id'];
        }

    }
}