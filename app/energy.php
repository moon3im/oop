


<form action="energy.php" method="post">
    <h1>Does your bicycle Lights</h1>
    <input type="radio" name="is_light" value="true">Yes</input>
    <input type="radio" name="is_light" value="false">No</input>
    <input type="submit">
</form>


<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
var_dump("hello");
require_once '../classes/Bicycle.php';
require_once '../vendor/autoload.php';
require_once '../classes/ElectricalBicycle.php';
use Classes\Bicycle;
use Classes\ElectricalBicycle; 
$weight="85.26";
$b = new Bicycle();
$b->set_weight($weight);

$is_light=$_POST['is_light'];


$elec_bicycle = new ElectricalBicycle();


echo $elec_bicycle->SetEnergy($is_light);

?>