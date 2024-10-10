<?php

class Vehicle{
    public $name;
    public $speed;
    public $mileage;

    function __construct($name,$speed,$mileage){
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    function get_name(){
        return $this->name;
    }
    function get_speed(){
        return $this->speed;
    }
    function get_mileage(){
        return $this->mileage;
    }

    function set_name($name){
        $this->name = $name;
    }
    function set_speed($speed){
        $this->speed = $speed;
    }
    function set_mileage($mileage){
        $this->mileage = $mileage;
    }
}

//I commented the instances to prevent issues in other classes.

/*
// Create an instance of the Vehicle class
$myVehicle = new Vehicle('Toyota Camry', 120, 25);

// Access the instance attributes using getter methods
echo "Name: " . $myVehicle->get_name() . "<br>";
echo "Speed: " . $myVehicle->get_speed() . "<br>";
echo "Mileage: " . $myVehicle->get_mileage() . "<br>";

*/

?>