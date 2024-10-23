<?php 


class Session {
    private $admin_id;

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
}