<?php 

namespace Classes;

class Bicycle {

    public const CURENT_YEAR = 2024 ;
    public $brand ; 
    public $model;
    public $year;
    public $description;
    private static $weight;

    public static function set_weight($weight){

      if (is_null($weight)){
        echo "Please put your weight a positive number";
      }else {
        $rule= '/^\d+\.\d{2}$/';
        if (preg_match($rule , $weight) == 1){
          echo "your weight is " . $weight;
        }else{
          echo "Please put your weight correctly";
        }
      }
      return self::$weight = $weight;
    }
    function name(){
        return $name = $this->brand . '' . $this->year . '' . $this->model ;
    }
    function weight_lb($weight_kg){
      return  $this->weight = $weight_kg * 2.20462 ?? 0;
    }

    function weight_lbs($weight_lbs){
      return $this->weight = $weight_lbs / 2.20462;
    }

    public function next_year(){
      return self::CURENT_YEAR + 1;
    }
    
}