<?php 

require_once 'classes/Bicycle.php';
class ElectricalBicycle extends Bicycle {

    public $energy;
    public bool $is_light;


    function SetEnergy($is_light){

        if ($this->is_light){
            $this->energy = 'Full';
        }else{
            $this->energy= 'Empty';
        }
        return $this->energy;
    }
    

}