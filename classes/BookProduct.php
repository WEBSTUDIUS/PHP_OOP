<?php

class BookProduct extends Product
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Pages: " . $this->numPages . "<br>";
        return $out;
    }
}