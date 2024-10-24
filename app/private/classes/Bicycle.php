<?php 

namespace App;

require_once 'DatabaseObject.php';

use App\DatabaseObject;

use function App\private\dd;

class Bicycle extends DatabaseObject {
    public $id ;
    public $brand;
    public $model;
    public $year;
    public $color;
    public float|null $weight_kg;
    public $price;
    public $description;
    public $category;
    public $gender;
    public $condition_id;
    public $name;
    
    public function __construct($args=[]){
      $this->id = $args['id'] ?? null ;
      $this->brand = $args['brand'] ?? null;
      $this->model = $args['model'] ?? null ;
      $this->year = $args['year'] ?? null ;
      $this->category = $args['category'] ?? null ;
      $this->gender = $args['gender'] ?? null; 
      $this->color = $args['color'] ?? null ;
      $this->price = $args['price'] ?? null ;
      $this->weight_kg = $args['weight_kg'] ?? null ;
      $this->condition_id = $args['condition_id'] ?? null ;
      $this->description = $args['description'] ?? null ;
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
      return self::$weight_kg = $weight;
    }
    public static function find_all_bicycles(){
      $sql ="SELECT * FROM bicycles" ;
     return self::find_by_sql($sql);
    }

    function weight_lb($weight_kg){
      return  $this->weight_kg = $weight_kg * 2.20462 ?? 0;
    }


}