<?php

abstract class Vehicle{
    protected $seatingCapacity;

    function __construct($seatingCapacity){
        $this->seatingCapacity = $seatingCapacity;
        
    }

    public function fare() {
        return $this->seatingCapacity * 100;
    } 

}

class Bus extends Vehicle{

    public function __construct(){
        parent::__construct(50);
    }

      public function fare() {
        $totalFare = parent :: fare();
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge;

    }
}
 $bus = new Bus();
 echo "Total amount of Bus fare is: " . $bus->fare();


?>