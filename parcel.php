<?php

class Parcel {
    private $length;
    private $width;
    private $height;
    private $weight;
    private $volume;
    private $cost;

    function __construct($length, $width, $height, $weight)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
    }
}
$parcel = new Parcel($_GET["height"], $_GET["width"], $_GET["length"], $_GET["weight"]);

    function volume(){
        $volume = $height * $width * $length;
        return $volume;
    }

    function costToShip(){
        $volume * $weight = $costToShip;
        return $costToShip;
    }


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
       <?php
       echo "<p>$costToShip</p>"
       ?>
   </div>
</body>
</html>
