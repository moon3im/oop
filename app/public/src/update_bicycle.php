<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('conn.php');
require_once '../../private/functions.php';
require_once '../../private/classes/Bicycle.php';
use App\Bicycle;

use function App\private\dd;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bicycle=Bicycle::update($_POST);
    $id=$_POST['id'];
    header("Location: details.php?id=" . $id);
} else {
    header("Location: inventory.php");
} 
