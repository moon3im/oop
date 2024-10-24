<?php
namespace Init;
require_once "../../../vendor/autoload.php";
use App\Session;
require_once '../../private/functions.php';
require_once('conn.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
require_once '../../private/classes/Bicycle.php';
require_once '../../private/classes/Admin.php';
$session = new Session();


