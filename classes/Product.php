<?php

class Product {

    public $name;
    public $price;

//    public $cpu;
//    public $numPages;  // make MAIN class

    public static $i = 1;

//    public function __construct($name, $price, $cpu = null, $numPages = null) {  // make MAIN class
      public function __construct($name, $price) {

            $this->name = $name;
        $this->price = $price;
//        $this->cpu = $cpu;
//        $this->numPages = $numPages; // make MAIN class
    }



//    public function getProduct($type = 'notebook') {   // make MAIN class
        public function getProduct() {

            return "<hr><b>About Product #" . self::$i++ ."</b><br>
                Name: " . $this->name . "<br>
                Price: " . $this->price . "<br>";
//            if($type == 'notebook') {
//                $out .= "CPU: " . $this->cpu . "<br>";
//            } else {
//                $out .= "Pages: " . $this->numPages . "<br>";
//            }
//        return $out;    // make MAIN class
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function getName()
    {
        return $this->name;
    }

}