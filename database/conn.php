<?php 

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD" , "root");
define("DB_NAME","by_store");

function db_connect(){
    $conn = new mysqli (DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
    confirm_db_connect($conn);
    return $conn ;
}
function confirm_db_connect($conn){

            if($conn->connect_errno){
                $msg = "Database connection failed!";
                $msg .= $conn->connect_error;
                $msg .= "(" . $conn->connect_errno . ")";
                exit ($msg) ;
            }

}