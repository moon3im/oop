<?php 

class Student {

var $name;
var $age;

var $class;

var $gender;

function StudentName(){
    echo 'the Student name is ' . $this->name;
}

function StudentAge(){
    echo 'the Student age is ' . $this->age;
}



}

// $classes = get_declared_classes();

// $my_classes=['Student' , 'DateTime', 'Person'];


// foreach($my_classes as $class) {
//     if(class_exists($class)){
//         echo $class . ' ' . 'exists' . '<br>';
//     } else{
//         echo $class . ' ' . 'does not exist' . '<br>';
//     }
// }


// echo is_a($student, Student::class);
