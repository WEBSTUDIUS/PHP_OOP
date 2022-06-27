<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>';  
    var_dump($data);
    echo '</pre>';
}

$car1 = new Car("Range Rover", "black", 260, 4);
$car1->year = "2021";

$car2 = new Car("Porsche", "black", 320, 4);
$car2->year = "2022";

$car1->getCarInfo();
$car2->getCarInfo();