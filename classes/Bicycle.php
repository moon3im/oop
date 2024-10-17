<?php 


class Bicycle {
    public $brand ; 
    public $model;
    public $year;
    public $description;
    public $weight;


    function name(){
        return $name = $this->brand . '' . $this->year . '' . $this->model ;
    }
    function weight_lb($weight_kg){
      return  $this->weight = $weight_kg * 2.20462 ?? 0;
    }


    function set_weight_lbs($weight_lbs){
      return $this->weight = $weight_lbs / 2.20462;
    }


}