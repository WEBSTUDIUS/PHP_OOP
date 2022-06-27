<?php

require_once 'classes/Car.php';
require_once 'classes/Debug.php';
require_once 'classes/File.php';
require_once 'classes/Product.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body style="max-width: 1200px;margin:auto">
    <h1>MY CARS</h1>
    <hr>
    <?
        $car1 = new Car("Range Rover", "black", 260, 4);
        $car1->year = "2021";
        
        $car2 = new Car("Porsche", "black", 320, 4);
        $car2->year = "2022";
        
        echo $car1->getCarInfo();
        echo $car2_info = $car2->getCarInfo();
        echo $car1->getPrototypeInfo();

        echo '<h3>Total Cars in Garage: ' . Car::getCountCar() . '</h3>';

        $file = new File(__DIR__."/file.txt");
        // $file->write($car2_info);
    ?>
    <hr>
    <h1>MY PRODUCTS</h1>
    <?
        $notebook = new Product("MacBook Pro 16", "1000$", "Intel Core i7-11654");
        echo $notebook->getProduct("notebook");

        $book1 = new Product("Book 1", "10$", false ,"900");
        echo $book1->getProduct("book1");
    ?>
</body>
</html>