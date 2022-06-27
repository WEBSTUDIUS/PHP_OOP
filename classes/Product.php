<?php

class Product {

    public $name;
    public $price;

    public $cpu;
    public $numPages;

    public static $i = 1;

    public function __construct($name, $price, $cpu = null, $numPages = null) {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;
    }

    public function getCpu() {
        return $this->cpu;
    }
    public function getNumPages() {
        return $this->numPages;
    }

    public function getProduct($type = 'notebook') {
        $out = "<hr><b>About Product #" . self::$i++ ."</b><br>
                Name: " . $this->name . "<br>
                Price: " . $this->price . "<br>";
            if($type == 'notebook') {
                $out .= "CPU: " . $this->cpu . "<br>";
            } else {
                $out .= "Pages: " . $this->numPages . "<br>";
            }
        return $out;    
    }

}