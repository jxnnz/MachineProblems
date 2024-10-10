<?php

include 'NumberOne.php';

class Bus extends Vehicle{
 
}

$myBus = new Bus("School Bus","40","20");

echo "Name: " . $myBus->get_name() . "<br>";
echo "Speed: " . $myBus->get_speed() . "<br>";
echo "Mileage: " . $myBus->get_mileage() . "<br>";

?>