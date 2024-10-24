<?php 
namespace App;

require_once '../classes/Bicycle.php';

use App\Bicycle;
class ElectricalBicycle extends Bicycle {

    public $energy;
    public null $is_light;


    function SetEnergy($is_light){

        if ($is_light){
            $this->energy = "Full";
        }else{
            $this->energy= "Empty";
        }
        return $this->energy;
    }
    

}