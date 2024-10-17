


<form action="energy.php" method="post">
    <h1>Does your bicycle Lights</h1>
    <input type="radio" name="is_light" value="true">Yes</input>
    <input type="radio" name="is_light" value="false">No</input>
    <input type="submit">
</form>


<?php 
$is_light=$_POST['is_light'];

var_dump($is_light);

$elec_bicycle = new ElectricalBicycle();


var_dump($elec_bicycle);
echo $elec_bicycle->SetEnergy($is_light);

?>