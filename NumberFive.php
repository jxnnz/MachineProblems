<?php

interface Vehicle{
   public function getEngineType();
}

class Bus implements Vehicle{
    public function getEngineType() {
        return 'diesel'; // Return a fixed value of 'diesel'
    }
}

class Car implements Vehicle{
    public function getEngineType() {
        return 'diesel'; 
    }
}

// Create instances of Bus and Car
$bus = new Bus();
$car = new Car();

// Access the properties
echo "The bus engine is ". $bus->getEngineType() . "."; // Output: diesel
echo "<br>";
echo "The car engine is " . $car->getEngineType(). "."; // Output: diesel

?>
