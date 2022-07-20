<?php

namespace classes;

class Car
{

    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public static $countCar = 0;
    public static $i = 1;

    const TEST_CAR = "PROTOTYPE";
    const TEST_CAR_SPEED = 300;

    public function __construct($brand, $color, $speed, $wheels) {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
        $this->wheels = $wheels; 
        self::$countCar++; 
    }

    public static function getCountCar() {
        return self::$countCar;
    }

    public function getCarInfo() {
       
        return "<h3>About my car #" . self::$i++ . "</h3>
        Brand: {$this->brand} <br> 
        Color: {$this->color} <br> 
        Speed: {$this->speed} <br> 
        Year: {$this->year} <br>
        ";
    }

    public function getPrototypeInfo() {
        self::$countCar++;
        
       return "<h3>PROTOTYPE CAR #" . self::$i++ . "</h3>
        Brand: ". self::TEST_CAR ."<br> 
        Speed: ". self::TEST_CAR_SPEED ."<br> 
        ";
        
    }

}