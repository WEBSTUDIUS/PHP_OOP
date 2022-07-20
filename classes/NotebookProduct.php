<?php
namespace classes;

use classes\interfaces\I3D;
use classes\interfaces\IGadget;
use classes\traits\TColor;

class NotebookProduct extends Product implements I3D, IGadget
{
    use TColor;

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
        $this->setDiscount(50);
    }

    public function test()
    {
//        var_dump(self::TEST2);
    }

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    public function getProduct() {

        $out = parent::getProduct();
        $out .= "CPU: " . $this->cpu . "<br>";
        $out .= "Color: " . $this->getColor() . "<br>";
        return $out;

    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }
}