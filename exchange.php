

<a href="index.php">Home</a>
<h1>Put Your bicycle weight</h1>
<form action="exchange.php" method="post">
<input type="text" name="weight_kg" value="" placeholder="KG"></input>
<input type="submit">
<input style="margin-top: 20px;" type="text" name="weight_lbs" value="" placeholder="LBS"></input>
<input type="submit">
</form>

<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../classes/ElectricalBicycle.php';
use Classes\ElectricalBicycle;

if(isset($_POST)){
    if($_POST['weight_kg']){
        $newbicycle = new ElectricalBicycle("vtt" , 2021);
        $weight_kg= $_POST['weight_kg'] ;
        if((int)$weight_kg != 0){
            echo "the bicycle weight in KG is ". $weight_kg ."  and with pounds is " . "". $newbicycle->weight_lb($weight_kg) . " ";
        }else{
            echo "Please put your weight";
        }
    }elseif($_POST['weight_lbs']){
        $newbicycle = new ElectricalBicycle("vtt" , 2021);
        $weight_lbs= $_POST['weight_lbs'] ;
        if((int)$weight_lbs != 0){
            echo "the bicycle weight in pounds is ". $weight_lbs ."  and with KG is " . "". $newbicycle->weight_lbs($weight_lbs) . " ";
        }else{
            echo "Please put your weight";
        }
    }

}



