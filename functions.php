<?php 

function getclassproperties(){
$bicycle= new Bicycle();
$bicycle->brand = $_POST['brand'] ?? null;
$bicycle->model = $_POST['model']?? null;
$bicycle->year = $_POST['year']?? null;
$bicycle->description = $_POST['description']?? null;
$bicycle->weight = $_POST['weight']?? null;
}