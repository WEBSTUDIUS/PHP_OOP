<?php

abstract class Product { //made class ABSTRACTED

    public $name;
    public $price;

//    public $cpu;
//    public $numPages;  // Not for MAIN class

    //PUBLIC, PROTECTED, PRIVATE
//    public $public = "PUBLIC";
//    protected $protected = "PROTECTED";
//    private $private = "PRIVATE";

    private $discount = 0; // PROTECTED IS FOR UNABLE TO REDEFINE IT IN THE PUBLIC PART!!!

    public static $i = 1;

//    public function __construct($name, $price, $cpu = null, $numPages = null) {  // Not for MAIN class
      public function __construct($name, $price) {

            $this->name = $name;
            $this->price = $price;
//        $this->cpu = $cpu;
//        $this->numPages = $numPages; // Not for MAIN class
    }



//    public function getProduct($type = 'notebook') {   // Not for MAIN class
        public function getProduct() {

            return "<hr><b>About Product #" . self::$i++ ."</b><br>
                Name: " . $this->name . "<br>
                Discount Price: " . $this->getPrice() . "$<br>
                Old Price: " . $this->price . "<br>
                Discount: " . $this->getDiscount() . "%<br>";


//            if($type == 'notebook') {
//                $out .= "CPU: " . $this->cpu . "<br>";
//            } else {
//                $out .= "Pages: " . $this->numPages . "<br>";
//            }
//        return $out;    // Not for MAIN class
    }


    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }


    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getDiscount() : int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }

}