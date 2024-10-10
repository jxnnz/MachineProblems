<?php

include 'NumberOne.php';

class Bus extends Vehicle{

    public function seating_capacity($capacity = 50) {
        return $capacity;
      }
}


?>