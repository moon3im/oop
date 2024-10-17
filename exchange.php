
<a href="index.php">Home</a>
<h1>Put Your bicycle weight</h1>
<form action="exchange.php" method="post">
<input type="text" name="weight_kg" value="" placeholder="KG"></input>
<input type="submit">
</form>
<?php 
require_once'classes/Bicycle.php';
require_once'classes/ElectricalBicycle.php';
$weight_kg=$_POST['weight_kg'];
$bicycle = new Bicycle();
if(isset($weight_kg)){
    echo "the bicycle weight in KG is ". $_POST['weight_kg'] ."  and with pounds is " . $bicycle->weight_lb($weight_kg) . "<br>";
}


?>
<form action="exchange.php" method="Get">
<input style="margin-top: 20px;" type="text" name="weight_lbs" value="" placeholder="LBS"></input>
<input type="submit">
</form>
<?php 

$weight_lbs=$_GET['weight_lbs'];
if(isset($weight_lbs)){
    echo "the bicycle weight in pounds is ". $weight_lbs ."  and with KG is " . $bicycle->set_weight_lbs($weight_lbs) ;
}
