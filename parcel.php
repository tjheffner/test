<?php

class Parcel {
    private $length;
    private $width;
    private $height;
    private $weight;

    function getLength(){
        return $this->length;
    }
    function getWidth(){
        return $this->width;
    }
    function getHeight(){
        return $this->height;
    }
    function getWeight(){
        return $this->weight;
    }
    function __construct($length, $width, $height, $weight)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
    }

    function volume(){
    $volume = $this->length * $this->width * $this->height;
    return $volume;
    }

    function costToShip(){
        $costToShip = $this->volume() * 0.50;
        return $costToShip;
    }
}

$parcel = new Parcel($_GET["height"], $_GET["width"], $_GET["length"], $_GET["weight"]);

?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="styles.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 <title>Shipping</title>
</head>
<body>
   <div class="container">
       <h1>Cost to Ship:</h1>
       <ul>
       <?php
           echo "<li>".$parcel->volume()." cubic inches </li>";
           echo "<li>$".$parcel->costToShip()." monies </li>";

       ?>
       </ul>
   </div>
</body>
</html>
