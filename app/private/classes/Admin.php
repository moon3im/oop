<?php 
namespace Classes;
use Classes\User;

Class Admin extends User {

    var $is_admin = true;
    var  $functions = 0 ;

    function UserName(){
        echo 'the Student name is ' . $this->name . 'and he is an admin';
    }

}