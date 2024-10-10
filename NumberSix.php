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
    protected $seatingCapacity;

    public function __construct(){
        $this->seatingCapacity = 50;
    }

      public function fare() {
        $totalFare = $this->calculateBaseFare();
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge;

    }

    private function calculateBaseFare() {
        return $this->seatingCapacity * 100;
    }
}

$bus = new Bus();
echo "Total amount of Bus fare is: " . $bus->fare();

?>
