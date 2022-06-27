<?php

class Car
{

    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function __construct($brand, $color, $speed, $wheels) {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
        $this->wheels = $wheels; 
    }

    public function getCarInfo() {
        echo "<h3>About my car</h3>
            Brand: {$this->brand} <br> 
            Color: {$this->color} <br> 
            Speed: {$this->speed} <br> 
            Year: {$this->year} <br>
            ";
    }

}