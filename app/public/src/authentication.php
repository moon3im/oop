<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../private/functions.php';
require_once('conn.php');
require_once '../../private/classes/Admin.php';

use App\Admin;

use function App\private\dd;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['hashed_password'];
    $hashed_password = Admin::find_by_id();
    dd($hashed_password);
    password_verify($password,$hashed_password);
    if (empty($email) || empty($password)) {    
        $error = "Please fill in both email and password.";
    } else {
        $admin = Admin::login($email, $password);

        if ($admin) {
            $_SESSION['admin_id'] = $admin->id;
            $_SESSION['admin_email'] = $admin->email;
            header("Location: index_admins.php");
            exit();
        } else {
            header("Location: login.php");
            echo "Invalid email or password.";
        }
    }
}

if (!empty($error)) {
    echo "<p style='color: red;'>$error</p>";
}
