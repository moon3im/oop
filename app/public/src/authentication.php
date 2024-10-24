<?php
require_once('app.php');

use App\Admin;
use function App\private\dd;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['hashed_password'];
    if (empty($email) || empty($password)) {    
        $error = "Please fill in both email and password.";
    } else {
        $admin = Admin::find_by_email($email);
        if(!$admin){
            die("Admin not found.");
        }

        if (password_verify($password, $admin->hashed_password)) {
             ;
            $admin_id=$session->set_admin_id($admin->id);
            $email=$session->set_admin_email($admin->email);
            $session->store($email , $admin_id);
            header("Location: index_admins.php"); 
            exit();
                } else {
                    header("Location: login.php");
                    echo "Invalid email or password.";
                }
}
}