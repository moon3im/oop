<?php
// var_dump($_POST);
require_once 'classes/Bicycle.php';
require_once 'classes/ElectricalBicycle.php';

$bicycle= new Bicycle();
$bicycle->brand = $_POST['brand'] ?? null;
$bicycle->model = $_POST['model']?? null;
$bicycle->year = $_POST['year']?? null;
$bicycle->description = $_POST['description']?? null;
$bicycle->weight = $_POST['weight']?? null;

$elec_bicycle= new ElectricalBicycle();
$elec_bicycle->energy= $_POST['year'] ?? null ;
?>
<h1>Welcome To Our Store</h1>
<form action="index.php" method="post">
<input type="text" name="brand" value="" placeholder="brand"></input>
<input type="text" name="model" value="" placeholder="model"></input>
<input type="text" name="year" value="" placeholder="year"></input>
<input type="text" name="description" value="" placeholder="description"></input>
<input type="text" name="weight" value="" placeholder="weight"></input>
<input type="submit" name="submit">
</form>

<a href="exchange.php" class="button">Go to Convert your bicycle weight</a>
<a href="energy.php" class="button">Go to See Energy</a>
<?php

$name = $bicycle->name();

echo "<pre>";
print_r($bicycle) . "<br>"; 

echo "the bicycle name is " . $name ."<br>" ;




// $student = new Student();

// $student->age = 20;
// $student->name = "John";
// $student->class= "10th";
// $student->gender="male";

// echo "<pre>";
// print_r($student);       
// $x= get_class_vars( 'Student');

// echo "<pre>";
// print_r($x);

// echo $student->StudentName() . "<br>"; 
// echo $student->StudentAge() . "<br>";


// echo "<pre>";
// print_r(get_class_methods('Student') ) . "<br>";    


// if (method_exists($student, 'StudentName')) {
//     echo $student->StudentName() . "<br>";

// }else{
//     echo "Method does not exist";
// }