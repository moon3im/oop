<?php 

namespace App;

class Bicycle {

    public const CATEGORY = ['City' , 'Mountains' , 'Hybrid'];
    public $brand; 
    public $model;
    public $year;
    public $weight;
    public $description;
    public $color;
    public $price;
    public $condition;
    public $category;
    public $name;
    
    
    public function __construct($args=[]){
      $this->brand = $args['brand'] ?? null;
      $this->model = $args['model'] ?? null ;
      $this->year = $args['year'] ?? null ;
      $this->color = $args['color'] ?? null ;
      $this->weight = $args['weight'] ?? null ;
      $this->price = $args['price'] ?? null ;
      $this->description = $args['description'] ?? null ;
      $this->category = $args['category'] ?? null ;
      $this->condition = $args['condition'] ?? null ;
      $this->name = $this->brand . '' . $this->year . '' . $this->model ;
    }

    public static function intstantiate_object_from_csv($bicycle_data){
        return new static([
          'brand' => $bicycle_data[0],
          'model' => $bicycle_data[1],
          'year' => $bicycle_data[2],
          'color' => $bicycle_data[3],
          'weight' => $bicycle_data[4],
          'price' => $bicycle_data[5],
          'description' => $bicycle_data[6],
          'category' => $bicycle_data[7],
          'condition' => $bicycle_data[8],
        ]);
    }
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

    function weight_lb($weight_kg){
      return  $this->weight = $weight_kg * 2.20462 ?? 0;
    }

    function weight_lbs($weight_lbs){
      return $this->weight = $weight_lbs / 2.20462;
    }


}