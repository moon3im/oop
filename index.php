<?php 

header('Location:../app/public/src/home.php');
exit;

?>

<!-- <h1>Welcome To Our Store</h1>
<form action="index.php" method="post">
<input type="text" name="model" value="" placeholder="model"></input>
<input type="text" name="description" value="" placeholder="description"></input>
<input type="text" name="weight" value="" placeholder="weight"></input>
<input type="submit" name="submit">
</form>

<a href="exchange.php" class="button">Go to Convert your bicycle weight</a>
<a href="energy.php" class="button">Go to See Energy <br /></a> -->
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// require_once '../vendor/autoload.php';
// require_once '../classes/Bicycle.php';
// require_once '../classes/ElectricalBicycle.php';

// use Classes\Bicycle;
// use Classes\ElectricalBicycle;

// ?>
// <?php
// session_start();

// if(isset($_POST)){
//     $_SESSION['model'] = $_POST['model'];
//      $_SESSION['description'] = $_POST['description'];
//     $_SESSION['weight'] = $_POST['weight'];
// }

// $bicycle= new Bicycle(['brand' => 'rocke' , 'year' => 2022]);
// $bicycle->model = $_POST['model']?? null;
// $bicycle->description = $_POST['description']?? null;   
// $weight= $_POST['weight'];
// $bicycle->set_weight($weight);

// $car = clone $bicycle;



// echo "<pre>";
// print_r($bicycle) . "<br>"; 
// echo "the bicycle name is " . $name ."<br>" ;






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