<?php 
namespace App;

use function App\private\dd;

class DatabaseObject {
    static protected $database;

    static public function set_database($database){
        self::$database = $database ;
    }


    public static function find_all(){
        $sql ="SELECT * FROM bicycles" ;
       return self::find_by_sql($sql);
    }
   

    public static function find_by_sql($sql){
      $result = self::$database->query($sql);
      if(!$result){
        exit("DB Query Failed");
      }
      $ob_array =[];
      
      while($record = $result->fetch_assoc()){
        $ob_array[] = self::instatiate($record) ;
      }
      $result->free();
        return $ob_array; 
    }

    static public function instatiate($record){
        $object = new Admin();
        foreach($record as $property => $value){
            if(property_exists($object , $property)){
                $object->$property = $value;
            }
        }
        return $object;
    }

    static public function find_by_id($id){ 
        $sql = "SELECT * FROM bicycles WHERE id = ";
        $sql .= $id ;
        $sql .= " LIMIT 1 ";
        // dd($sql);
        $ob_array= self::find_by_sql($sql);
        if(!empty($ob_array)){
            return array_shift($ob_array);
        }else{
            return false ;
        }
    }

    static public function create($args=[]) {

        $sql = "INSERT INTO bicycles SET ";
        $sql .= "brand = '" . $args['brand'] . "', ";
        $sql .= "model = '" . $args['model'] . "', ";
        $sql .= "year = '" . $args['year'] . "', ";
        $sql .= "category = '" . $args['category'] . "', ";
        $sql .= "gender = '" . $args['gender'] . "', ";
        $sql .= "color = '" . $args['color'] . "', ";
        $sql .= "price = '" . $args['price'] . "', ";
        $sql .= "weight_kg = '" . $args['weight_kg'] . "', ";
        $sql .= "condition_id = '" . $args['condition_id'] . "', ";
        $sql .= "description = '" . $args['description'] . "'"; 
        
        
        $result = self::$database->query($sql);
        if (!$result) {
            exit("DB Query Failed");
        }
        return $result;
    }

    static public function delete($id){

        $sql = "DELETE FROM bicycles WHERE id = ";
        $sql .= $id ;
        $sql .= " LIMIT 1";
        $result = self::$database->query($sql);
        if (!$result) {
            exit("DB Query Failed");
        }

        return $result;
    }

    static public function update($args=[]){    
        $sql = "UPDATE bicycles SET ";
        $sql .= "brand = '" . $args['brand'] . "', ";
        $sql .= "model = '" . $args['model'] . "', ";
        $sql .= "year = '" . $args['year'] . "', "; 
        $sql .= "category = '" . $args['category'] . "', ";
        $sql .= "gender = '" . $args['gender'] . "', ";
        $sql .= "color = '" . $args['color'] . "', ";
        $sql .= "price = '" . $args['price'] . "', ";
        $sql .= "weight_kg = '" . $args['weight_kg'] . "', ";
        $sql .= "condition_id = '" . $args['condition_id'] . "', ";
        $sql .= "description = '" . $args['description'] . "'"; 
        $sql .= " LIMIT 1";
        $result = self::$database->query($sql);
        if (!$result) {
            exit("DB Query Failed");
        }
        return $result;
    }

    protected static function sanitized_values($args=[]){
        $sanitized =[];
        foreach ($args as $key => $value){
            $sanitized[$key] = self::$database->escapestring($value);
        }
        return $sanitized ;
    }
}
