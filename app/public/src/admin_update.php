<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('conn.php');
require_once '../../private/functions.php';
require_once '../../private/classes/Admin.php';
use App\Admin;

use function App\private\dd;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin=Admin::update_admin($_POST);
    $id=$_POST['id'];
    header("Location: update_admin.php?id=" . $id);
} else {
    header("Location: index_admins.php");
} 
