<?php

class Vehicle{

    public static $engine = 'Diesel';


    public function get_engine() {
        return self::$engine;
    }
}

class Bus extends Vehicle{
    
}

class Car extends Vehicle{

}


echo "The bus engine is " . Bus :: $engine . ".";
echo "<br>";
echo "The car engine is " . Car :: $engine . ".";

?>