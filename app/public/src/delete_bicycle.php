<?php
require_once('conn.php');
require_once '../../private/functions.php';
require_once '../../private/classes/Bicycle.php';

use App\Bicycle;

if (isset($_GET['id'])) {
    var_dump($_GET);
    $id = $_GET['id'];
    $bicycle = Bicycle::find_by_id($id); 
    if ($bicycle) {
        $bicycle->delete($id); 
    }
    header("Location: inventory.php");
    exit;
} else {
    header("Location: inventory.php");
    exit;
}

