<?php 
namespace Classes;

class User {

private $is_admin = false;  
public $name;
protected $age;

protected $class;

protected $gender;


public function set_adminaccess($is_admin){
    $this->is_admin = $is_admin;
}

public function get_adminaccess(){
    return $this->is_admin; 
}
public function UserName(){
    echo 'the Student name is ' . $this->name;
}

protected function UserAge(){
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
