<?php

class Car
{
    private  $model;
    private $price;
    private $miles;
    private $color;
    private $drive;
    public $image_path;

    function __construct($model, $price, $miles, $color, $drive, $image_path)
    {
        $this->model = $model;
        $this->price = $price;
        $this->miles = $miles;
        $this->color = $color;
        $this->drive = $drive;
        $this->image_path = $image_path;
    }

    function worthBuying($max_price)
    {
        return $this->price < ($max_price + 100);
    }

    function setPrice($new_price)
    {
        $this->price = (float) $new_price;
        if ($float_price !=0) {
            $formatted_price = number_format($float_price, 2);
            $this->price = $float_price;
        }
    }
    function getPrice()
    {
        return $this->price;
    }
    function setMiles($new_miles)
    {
        $this->miles = (float) $new_miles;
        if ($float_miles !=0) {
            $this->miles = $float_miles;
        }
    }
    function getMiles()
    {
        return $this->miles;
    }
    function setColor($new_color)
    {
        $this->color = $new_color;
    }
    function getColor()
    {
        return $this->color;
    }
        function setDrive($new_drive)
        {
            $this->drive = $new_drive;
        }
        function getDrive()
        {
            return $this->drive;

    }
    function setModel($new_model)
    {
        $this->model = $new_model;
    }
    function getModel()
    {
        return $this->model;
    }
}

  $first_car = new Car("2014 Porsche 911", 114991, 7864, "red", "4wd", "images/porsche.jpg");
  $second_car = new Car("2011 Ford F450", 55995, 14241, "blue", "2wd", "images/ford.jpg");
  $third_car = new Car("2013 Lexus RX 350", 44700, 20000, "gold", "no wheel drive", "images/lexus.jpg");
  $fourth_car = new Car("Mercedes Benz CLS550", 39900, 37979, "brown", "8wd", "images/mercedes.jpg");

 $cars = array($first_car, $second_car, $third_car, $fourth_car);

 $cars_matching_search = array();
 foreach ($cars as $car) {
     if ($car->worthBuying($_GET["price"])) {
         array_push($cars_matching_search, $car);
     }
 }?>

 <!DOCTYPE html>
 <html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Car Dealership!</title>
</head>
<body>
    <div class="container">
        <h1>Deals</h1>
        <ul>
            <?php
                foreach ($cars_matching_search as $car) {
                    $car_price = $car->getPrice();
                    $car_miles = $car->getMiles();
                    $car_color = $car->getColor();
                    $car_drive = $car->getDrive();
                    $car_model = $car->getModel();
                    echo "<li> $car_model </li>";
                    echo "<li><img src='$car->image_path'></li>";
                    echo "<ul>";
                        echo "<li> $$car_price </li>";
                        echo "<li> $car_miles </li>";
                        echo "<li> $car_color </li>";
                        echo "<li> $car_drive </li>";
                    echo "</ul>";
                }
                if (empty($cars_matching_search)) {
                    echo "<li>No cars match your search.</li>";
                }
            ?>
        </ul>
    </div>
</body>
 </html>
